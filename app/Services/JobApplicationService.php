<?php

namespace App\Services;

use App\Http\Requests\StoreJobApplicationRequest;
use App\Jobs\SendApplicationReceivedEmail;
use App\Jobs\SendNewJobApplicationEmail;
use App\Jobs\SendInterviewInvitationEmail;
use App\Jobs\SendApplicationRejectionEmail;
use App\Models\JobApplication;
use App\Models\JobVacancy;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class JobApplicationService
{
    // Store a new job application
    public function storeApplication(StoreJobApplicationRequest $request, $job)
    {
        // Find the job vacancy by UUID
        $vacancy = JobVacancy::where('uuid', $job)->first();
        if (!$vacancy) {
            throw new \Exception('Job vacancy not found.');
        }

        // Generate a new UUID for the application
        $uuid = Str::uuid();

        // Store the CV file if it exists
        $file = $request->hasFile('cv') ? $request->file('cv')->store('ApplicationsCV', 'public') : '';

        DB::beginTransaction();
        try {
            // Create a new job application
            $application = JobApplication::create($request->safe()->merge([
                'uuid' => $uuid,
                'vaccancy_id' => $vacancy->uuid,
                'cv' => $file
            ])->all());

            // Dispatch email jobs
            SendApplicationReceivedEmail::dispatch($application, $vacancy->title);
            SendNewJobApplicationEmail::dispatch($vacancy->title);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error storing job application: ' . $e->getMessage());
            throw $e;
        }
    }

    // Delete a job application by UUID
    public function deleteApplication($uuid)
    {
        // Find the job application by UUID
        $application = JobApplication::where('uuid', $uuid)->first();
        if (!$application) {
            throw new \Exception('Application not found.');
        }
        // Delete the application
        $application->delete();
    }

    // Approve a job application by UUID
    public function approveApplication($uuid)
    {
        // Find the job application by UUID
        $application = JobApplication::where('uuid', $uuid)->first();
        if (!$application) {
            throw new \Exception('Job application not found.');
        }
        // Mark the application as approved
        $application->is_approved = true;
        DB::beginTransaction();
        try {
            // Save the application and dispatch the interview invitation email
            $application->save();
            SendInterviewInvitationEmail::dispatch($application);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error approving job application: ' . $e->getMessage());
            throw $e;
        }
    }

    // Reject a job application by UUID
    public function rejectApplication($uuid)
    {
        // Find the job application by UUID
        $application = JobApplication::where('uuid', $uuid)->first();
        if (!$application) {
            throw new \Exception('Job application not found.');
        }
        // Mark the application as rejected
        $application->is_rejected = true;
        DB::beginTransaction();
        try {
            // Save the application and dispatch the rejection email
            $application->save();
            SendApplicationRejectionEmail::dispatch($application);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error rejecting job application: ' . $e->getMessage());
            throw $e;
        }
    }

    // Download the CV of a job application by UUID
    public function downloadCV($uuid)
    {
        // Find the job application by UUID
        $applicant = JobApplication::where('uuid', $uuid)->first();
        if (!$applicant) {
            throw new \Exception('Job application not found.');
        }
        // Get the CV file path
        $cvPath = $applicant->cv;
        if (!Storage::disk('public')->exists($cvPath)) {
            throw new \Exception('CV file not found.');
        }
        // Return the CV file path and filename
        return [
            'path' => Storage::disk('public')->path($cvPath),
            'filename' => $applicant->fullname . '_cv.' . pathinfo($cvPath, PATHINFO_EXTENSION),
        ];
    }
}
