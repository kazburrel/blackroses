<?php

namespace App\Http\Controllers\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJobApplicationRequest;
use App\Http\Requests\StoreJobVaccancyFormRequest;
use App\Http\Requests\StoreVacancyUpdateRequest;
use App\Services\JobVacancyService;
use App\Services\JobApplicationService;

class VaccancyController extends Controller
{
    protected $jobVacancyService;
    protected $jobApplicationService;

    public function __construct(JobVacancyService $jobVacancyService, JobApplicationService $jobApplicationService)
    {
        $this->jobVacancyService = $jobVacancyService;
        $this->jobApplicationService = $jobApplicationService;
    }

    public function postVacancy(StoreJobVaccancyFormRequest $request)
    {
        $this->jobVacancyService->createVacancy($request);
        toast('Job advert posted successfully', 'success');
        return redirect()->back();
    }

    public function storeApplication(StoreJobApplicationRequest $request, $job)
    {
        try {
            $this->jobApplicationService->storeApplication($request, $job);
            toast('Your application has been submitted successfully!', 'success');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'An error occurred while submitting your application. Please try again.']);
        }
        return redirect()->route('home');
    }

    public function jobListing($uuid)
    {
        $response = $this->jobVacancyService->toggleJobListing($uuid);
        return response()->json($response);
    }

    public function deleteApplication($uuid)
    {
        try {
            $this->jobApplicationService->deleteApplication($uuid);
            return response()->json(['message' => 'Application deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete application'], 500);
        }
    }

    public function approveApplication($uuid)
    {
        try {
            $this->jobApplicationService->approveApplication($uuid);
            return response()->json(['message' => 'Job application approved successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to approve job application.'], 500);
        }
    }

    public function rejectApplication($uuid)
    {
        try {
            $this->jobApplicationService->rejectApplication($uuid);
            return response()->json(['message' => 'Job application rejected successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to reject job application.'], 500);
        }
    }

    public function downloadCV($uuid)
    {
        try {
            $fileData = $this->jobApplicationService->downloadCV($uuid);
            return response()->download($fileData['path'], $fileData['filename']);
        } catch (\Exception $e) {
            abort(404, $e->getMessage());
        }
    }

    public function updateVacancy(StoreVacancyUpdateRequest $request, $uuid)
    {
        $this->jobVacancyService->updateVacancy($request, $uuid);
        toast('Job vacancy edited successfully!');
        return redirect()->back();
    }
}
