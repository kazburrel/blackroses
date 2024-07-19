<?php

namespace App\Http\Controllers\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJobApplicationRequest;
use App\Http\Requests\StoreJobVaccancyFormRequest;
use App\Http\Requests\StoreVacancyUpdateRequest;
use Illuminate\Support\Facades\Auth;
use App\SweetAlertToast;
use JobApplicationService;
use JobVacancyService;

class VaccancyController extends Controller
{
    use SweetAlertToast;

    protected $jobVacancyService;
    protected $jobApplicationService;

    // The constructor method initializes the VacancyController class.
    // It creates instances of JobVacancyService and JobApplicationService
    // and assigns them to the controller's properties for later use.
    public function __construct()
    {
        $this->jobVacancyService = new JobVacancyService();
        $this->jobApplicationService = new JobApplicationService();
    }

    public function postVacancy(StoreJobVaccancyFormRequest $request)
    {
        $user = Auth::user();
        $this->jobVacancyService->createVacancy($request, $user);
        toast('Job advert posted successfully', 'success');
        return redirect()->back();
    }

    public function storeApplication(StoreJobApplicationRequest $request, $job)
    {
        $response = $this->jobApplicationService->createApplication($request, $job);
        if ($response['status']) {
            toast('Your application has been submitted successfully!', 'success');
            return redirect()->route('home');
        } else {
            return redirect()->back()->withErrors(['error' => $response['message']]);
        }
    }

    public function jobListing($uuid)
    {
        $response = $this->jobVacancyService->toggleJobListing($uuid);
        return response()->json($response);
    }

    public function deleteApplication($uuid)
    {
        $response = $this->jobApplicationService->deleteApplication($uuid);
        return response()->json($response, $response['status'] ? 200 : 500);
    }

    public function approveApplication($uuid)
    {
        $response = $this->jobApplicationService->approveApplication($uuid);
        return response()->json($response, $response['status'] ? 200 : 500);
    }

    public function rejectApplication($uuid)
    {
        $response = $this->jobApplicationService->rejectApplication($uuid);
        return response()->json($response, $response['status'] ? 200 : 500);
    }

    public function downloadCV($uuid)
    {
        return $this->jobApplicationService->downloadCV($uuid);
    }

    public function updateVacancy(StoreVacancyUpdateRequest $request, $uuid)
    {
        $this->jobVacancyService->updateVacancy($request, $uuid);
        toast('Job vacancy edited successfully!');
        return redirect()->back();
    }
}
