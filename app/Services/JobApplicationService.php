<?php

use App\Http\Requests\StoreJobApplicationRequest;
use App\Models\JobApplication;
use App\Models\JobVacancy;
use App\Models\Settings;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Utyemma\LaraNotice\Notify;

class JobApplicationService
{
    public function createApplication(StoreJobApplicationRequest $request, $job)
    {
        $vacancy = JobVacancy::where('uuid', $job)->first();
        $uuid = Str::uuid();
        $hr = Settings::all();
        $file = $request->hasFile('cv') ? $request->file('cv')->store('ApplicationsCV', 'public') : '';

        DB::beginTransaction();
        try {
            $application = JobApplication::create($request->safe()->merge([
                'uuid' => $uuid,
                'vaccancy_id' => $vacancy->uuid,
                'cv' => $file
            ])->all());

            (new Notify())
                ->subject('Application Received - ' . $vacancy->title)
                ->greeting('Dear ' . $request->fullname . ',')
                ->line('Thank you for applying for the ' . $vacancy->title . ' position at ' . config('app.name') . '. We have received your application and appreciate your interest in joining our team.')
                ->line('Our hiring team will carefully review your application and qualifications. If your profile matches our requirements, we will reach out to you to proceed with the next steps of the hiring process.')
                ->line('Please note that due to the high volume of applications we receive, we may not be able to respond to every applicant immediately. However, rest assured that your application is important to us, and we will get back to you as soon as possible.')
                ->line('Once again, thank you for considering ' . config('app.name') . ' as your potential employer.')
                ->mail($application);

            (new Notify())
                ->subject('New Job Application - ' . $vacancy->title)
                ->greeting('Dear HR Team,')
                ->line('A new job application has been received for the ' . $vacancy->title . ' position at ' . config('app.name') . '.')
                ->line('Please review the application at your earliest convenience.')
                ->line('Thank you.')
                ->mail($hr);

            DB::commit();
            return ['status' => true];
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error storing job application: ' . $e->getMessage());
            return ['status' => false, 'message' => 'An error occurred while submitting your application. Please try again.'];
        }
    }

    public function deleteApplication($uuid)
    {
        $application = JobApplication::where('uuid', $uuid)->first();
        if (!$application) {
            return ['message' => 'Application not found', 'status' => false];
        }
        try {
            $application->delete();
            return ['message' => 'Application deleted successfully', 'status' => true];
        } catch (\Exception $e) {
            Log::error('Error deleting job application: ' . $e->getMessage());
            return ['message' => 'Failed to delete application', 'status' => false];
        }
    }

    public function approveApplication($uuid)
    {
        $application = JobApplication::where('uuid', $uuid)->first();
        if (!$application) {
            return ['message' => 'Job application not found.', 'status' => false];
        }
        $application->is_approved = true;
        DB::beginTransaction();
        try {
            $application->save();
            (new Notify())
                ->subject('Interview Invitation: Congratulations, Your Job Application is Approved!')
                ->greeting('Hello ' . $application->fullname . '!')
                ->line('Congratulations! Your job application has been approved, and we would like to invite you to the next stage of our hiring process: the interview.')
                ->line('Please check your email regularly for further instructions regarding the interview schedule and details.')
                ->line('We look forward to meeting with you and discussing your candidacy further.')
                ->line('Thank you for your interest in joining our company, and we appreciate your participation in our hiring process.')
                ->mail($application);
            DB::commit();
            return ['message' => 'Job application approved successfully.', 'status' => true];
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error approving job application: ' . $e->getMessage());
            return ['message' => 'Failed to approve job application.', 'status' => false];
        }
    }

    public function rejectApplication($uuid)
    {
        $application = JobApplication::where('uuid', $uuid)->first();
        if (!$application) {
            return ['message' => 'Job application not found.', 'status' => false];
        }
        $application->is_rejected = true;
        DB::beginTransaction();
        try {
            $application->save();
            (new Notify())
                ->subject('Regarding Your Job Application')
                ->greeting('Hello ' . $application->fullname . '!')
                ->line('Thank you for your interest in our company and for taking the time to apply.')
                ->line('Unfortunately, we regret to inform you that your job application has been unsuccessful.')
                ->line('We appreciate your interest in our company and the time you took to apply. However, after careful consideration, we have decided not to proceed with your application at this time.')
                ->line('Thank you for your understanding and interest in our company.')
                ->mail($application);
            DB::commit();
            return ['message' => 'Job application rejected successfully.', 'status' => true];
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error rejecting job application: ' . $e->getMessage());
            return ['message' => 'Failed to reject job application.', 'status' => false];
        }
    }

    public function downloadCV($uuid)
    {
        $applicant = JobApplication::where('uuid', $uuid)->first();
        if (!$applicant) {
            abort(404, 'Job application not found.');
        }
        $cvPath = $applicant->cv;
        if (!Storage::disk('public')->exists($cvPath)) {
            abort(404, 'CV file not found.');
        }
        $extension = pathinfo($cvPath, PATHINFO_EXTENSION);
        $fileName =  $applicant->fullname . '_cv.' . $extension;
        $filePath = Storage::disk('public')->path($cvPath);
        return response()->download($filePath, $fileName);
    }
}
