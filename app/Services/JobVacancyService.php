<?php

namespace App\Services;

use App\Http\Requests\StoreJobVaccancyFormRequest;
use App\Http\Requests\StoreVacancyUpdateRequest;
use App\Models\JobVacancy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class JobVacancyService
{
    public function createVacancy(StoreJobVaccancyFormRequest $request)
    {
        $user = Auth::user();
        $uuid = Str::uuid();
        JobVacancy::create($request->safe()->merge([
            'uuid' => $uuid,
            'creator_id' => $user->uuid,
            'description' => "Please visit the application page to view the complete description",
            'requirement' => "Please visit the application page to view the complete requirement",
            'responsibility' => "Please visit the application page to view the complete responsibility",
        ])->all());
    }

    public function toggleJobListing($uuid)
    {
        $job = JobVacancy::where('uuid', $uuid)->first();
        try {
            $job->is_listed = !$job->is_listed;
            $job->save();
            Log::info('Job listing toggled successfully.');
            return ['success' => true];
        } catch (\Exception $e) {
            Log::error('Error toggling job listing: ' . $e->getMessage());
            return ['success' => false, 'error' => 'An error occurred.'];
        }
    }

    public function updateVacancy(StoreVacancyUpdateRequest $request, $uuid)
    {
        $vacancy = JobVacancy::where('uuid', $uuid)->first();
        $vacancy->update($request->safe()->merge([])->all());
    }
}
