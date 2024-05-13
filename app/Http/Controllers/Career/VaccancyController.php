<?php

namespace App\Http\Controllers\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJobApplicationRequest;
use App\Http\Requests\StoreJobVaccancyFormRequest;
use App\Models\JobApplication;
use App\Models\JobVacancy;
use App\Models\Settings;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Utyemma\LaraNotice\Notify;

class VaccancyController extends Controller
{
    public function postVacancy(StoreJobVaccancyFormRequest $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $uuid = Str::uuid();
        JobVacancy::create($request->safe()->merge([
            'uuid' => $uuid,
            'creator_id' => $user->uuid,
            'description' => "Please visit the application page to view the complete description",
            'requirement' => "Please visit the application page to view the complete requirement",
            'responsibility' => "Please visit the application page to view the complete responsibility",
        ])->all());
        toast('Job advert posted successfully', 'success');
        return redirect()->back();
    }

    public function storeApplication(StoreJobApplicationRequest $request, $job)
    {
        $vaccancy = JobVacancy::where('uuid', $job)->first();
        $uuid = Str::uuid();
        $hr = Settings::all();
        $file = $request->hasFile('cv') ? $request->file('cv')->store('ApplicationsCV', 'public') : '';
        $application = JobApplication::create($request->safe()->merge([
            'uuid' => $uuid,
            'vaccancy_id' => $vaccancy->uuid,
            'cv' => $file
            // 'cv' => asset('storage/' . $file),
        ])->all());
        toast('Your application has been submitted successfully!', 'success');
        (new Notify())
            ->subject('Application Received - ' . $vaccancy->title)
            ->greeting('Dear ' . $request->fullname . ',')
            ->line('Thank you for applying for the ' . $vaccancy->title . ' position at ' . config('app.name') . '. We have received your application and appreciate your interest in joining our team.')
            ->line('Our hiring team will carefully review your application and qualifications. If your profile matches our requirements, we will reach out to you to proceed with the next steps of the hiring process.')
            ->line('Please note that due to the high volume of applications we receive, we may not be able to respond to every applicant immediately. However, rest assured that your application is important to us, and we will get back to you as soon as possible.')
            ->line('Once again, thank you for considering ' . config('app.name') . ' as your potential employer.')
            ->mail($application);
        (new Notify())
            ->subject('New Job Application - ' . $vaccancy->title)
            ->greeting('Dear HR Team,')
            ->line('A new job application has been received for the ' . $vaccancy->title . ' position at ' . config('app.name') . '.')
            ->line('Please review the application at your earliest convenience.')
            ->line('Thank you.')
            ->mail($hr);
        return redirect()->route('home');
    }

    public function jobListing($uuid)
    {

        $job = JobVacancy::where('uuid', $uuid)->first();
        try {
            $job->is_listed = !$job->is_listed;
            $job->save();
            Log::info('Job listing toggled successfully.');
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            Log::error('Error toggling job listing: ' . $e->getMessage());
            return response()->json(['success' => false, 'error' => 'An error occurred.']);
        }
    }

    public function deleteApplication($uuid)
    {
        $application = JobApplication::where('uuid', $uuid)->first();
        if (!$application) {
            return response()->json(['message' => 'Application not found'], 404);
        }
        try {
            $application->delete();
            return response()->json(['message' => 'Application deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete application'], 500);
        }
    }

    public function approveApplication($uuid)
    {
        $application = JobApplication::where('uuid', $uuid)->first();
        if (!$application) {
            return response()->json(['message' => 'Job application not found.'], 404);
        }
        $application->is_approved = true;
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
            return response()->json(['message' => 'Job application approved successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to approve job application.'], 500);
        }
    }

    public function rejectApplication($uuid)
    {
        $application = JobApplication::where('uuid', $uuid)->first();
        if (!$application) {
            return response()->json(['message' => 'Job application not found.'], 404);
        }
        $application->is_rejected = true;
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
            return response()->json(['message' => 'Job application rejected successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to reject job application.'], 500);
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
        $fileName = $applicant->fullname . '_cv';
        $filePath = Storage::disk('public')->path($cvPath);

        // Get file extension
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        // dd($extension);

        // Set appropriate content type based on file extension
        $contentType = mime_content_type($filePath);

        $fileNameWithExtension = $fileName . '.' . $extension;

        // Create a BinaryFileResponse and set headers manually
        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            'attachment',
            $fileNameWithExtension, // Use the file name with extension
            $contentType // Set the detected content type
        );

        return $response;
    }
}
