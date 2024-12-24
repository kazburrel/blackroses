<?php

namespace App\Services;

use App\Http\Requests\StoreJobApplicationRequest;
use App\Jobs\SendApplicantNotificationJob;
use App\Jobs\SendApprovalNotificationJob;
use App\Jobs\SendHRNotificationJob;
use App\Jobs\SendRejectionNotificationJob;
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
    private function createApplication($request, $job)
    {
        $vacancy = JobVacancy::where('uuid', $job)->first();
        $uuid = Str::uuid();
        $file = $request->hasFile('cv') ? $request->file('cv')->store('ApplicationsCV', 'public') : '';
        return JobApplication::create($request->safe()->merge([
            'uuid' => $uuid,
            'vaccancy_id' => $vacancy->uuid,
            'cv' => $file
        ])->all());
    }

    public function storeApplication(StoreJobApplicationRequest $request, $job)
    {
        DB::beginTransaction();
        try {
            $application = $this->createApplication($request, $job);
            DB::commit();

            $this->sendNotificationToApplicant($application);
            $this->sendNotificationToHR($application);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error storing job application: ' . $e->getMessage());
            throw new \Exception('There was an error processing your application. Please try again later.');
        }
    }

    private function sendNotificationToApplicant($application)
    {
        $subject = 'Application Received - ' . $application->vacancy->title;
        $greeting = 'Dear ' . $application->fullname . ',';
        $lines = [
            'Thank you for applying for the ' . $application->vacancy->title . ' position at ' . config('app.name') . '. We have received your application and appreciate your interest in joining our team.'
        ];

        SendApplicantNotificationJob::dispatch($application, $subject, $greeting, $lines);
    }

    private function sendNotificationToHR($application)
    {
        $hr = Settings::where('email', 'info@blackrosessupport.co.uk')->firstOrFail();
        $subject = 'New Job Application - ' . $application->vacancy->title;
        $greeting = 'Dear HR Team,';
        $line = 'A new job application has been received for the ' . $application->vacancy->title . ' position at ' . config('app.name') . '.';

        SendHRNotificationJob::dispatch($hr, $subject, $greeting, $line);
    }

    public function approveApplication($uuid)
    {
        $application = JobApplication::where('uuid', $uuid)->first();
        if (!$application) {
            throw new \Exception('Job application not found.');
        }
        $application->is_approved = true;
        DB::beginTransaction();
        try {
            $application->save();
            $subject = 'Interview Invitation: Congratulations, Your Job Application is Approved!';
            $greeting = 'Hello ' . $application->fullname . '!';
            $lines = [
                'Congratulations! Your job application has been approved, and we would like to invite you to the next stage of our hiring process: the interview.',
                'Please check your email regularly for further instructions regarding the interview schedule and details.',
                'We look forward to meeting with you and discussing your candidacy further.',
                'Thank you for your interest in joining our company, and we appreciate your participation in our hiring process.'
            ];

            SendApprovalNotificationJob::dispatch($application, $subject, $greeting, $lines);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error approving job application: ' . $e->getMessage());
            throw $e;
        }
    }

    public function rejectApplication($uuid)
    {
        $application = JobApplication::where('uuid', $uuid)->first();
        if (!$application) {
            throw new \Exception('Job application not found.');
        }
        $application->is_rejected = true;
        DB::beginTransaction();
        try {
            $application->save();
            $subject = 'Regarding Your Job Application';
            $greeting = 'Hello ' . $application->fullname . '!';
            $lines = [
                'Thank you for your interest in our company and for taking the time to apply.',
                'Unfortunately, we regret to inform you that your job application has been unsuccessful.',
                'We appreciate your interest in our company and the time you took to apply. However, after careful consideration, we have decided not to proceed with your application at this time.',
                'Thank you for your understanding and interest in our company.'
            ];

            SendRejectionNotificationJob::dispatch($application, $subject, $greeting, $lines);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error rejecting job application: ' . $e->getMessage());
            throw $e;
        }
    }

    public function deleteApplication($uuid)
    {
        $application = JobApplication::where('uuid', $uuid)->first();
        if (!$application) {
            throw new \Exception('Application not found');
        }
        $application->delete();
    }

    public function downloadCV($uuid)
    {
        $applicant = JobApplication::where('uuid', $uuid)->first();
        if (!$applicant) {
            throw new \Exception('Job application not found.');
        }
        $cvPath = $applicant->cv;
        if (!Storage::disk('public')->exists($cvPath)) {
            throw new \Exception('CV file not found.');
        }
        return [
            'path' => Storage::disk('public')->path($cvPath),
            'filename' => $applicant->fullname . '_cv.' . pathinfo($cvPath, PATHINFO_EXTENSION),
        ];
    }
}
