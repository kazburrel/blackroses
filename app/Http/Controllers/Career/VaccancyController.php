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
            'cv' => $file,
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

    public function jobListing()
    {
    }
}
