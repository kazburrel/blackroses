<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\JobVacancy;
use App\Models\Settings;
use App\Models\User;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function home()
    {
        SEOMeta::setTitle('Homepage');
        $setting = Settings::first();
        return view('index', ['setting' => $setting]);
    }

    public function about()
    {
        SEOMeta::setTitle('About us');
        $setting = Settings::first();
        return view('about-us', ['setting' => $setting]);
    }
    public function services()
    {
        SEOMeta::setTitle('Services');
        $setting = Settings::first();
        return view('services', ['setting' => $setting]);
    }
    public function referrals()
    {
        SEOMeta::setTitle('Referrals');
        $setting = Settings::first();
        return view('referrals', ['setting' => $setting]);
    }
    public function vaccancy()
    {
        SEOMeta::setTitle('Vaccancy');
        $vaccancy = JobVacancy::where('is_listed', 1)->get();
        $setting = Settings::first();
        // dd($vaccancy);
        return view(
            'vaccancies',
            [
                'vaccancies' => $vaccancy,
                'setting' => $setting
            ]
        );
    }
    public function contact()
    {
        SEOMeta::setTitle('Contact');
        $setting = Settings::first();

        return view('contact', ['setting' => $setting]);
    }
    public function team()
    {
        SEOMeta::setTitle('Our Team');
        $setting = Settings::first();
        return view('our-team', ['setting' => $setting]);
    }

    public function apply($job)
    {
        SEOMeta::setTitle('Job Application');
        $get_job = JobVacancy::where('uuid', $job)->first();
        $setting = Settings::first();
        return view(
            'apply',
            [
                'setting' => $setting,
                'job' => $get_job
            ]
        );
    }

    // ADMIN VIEWS

    public function adminDashboard()
    {

        return view('admin.dashboard');
    }

    public function vacancy()
    {
        $user = Auth::user();
        $vaccancy = JobVacancy::all();
        return view('admin.vacancy', [
            'vaccancies' => $vaccancy
        ]);
    }

    public function getPostVacancy()
    {

        return view('admin.post_vacancy');
    }

    public function jobApplications()
    {

        return view('admin.all_applications');
    }

    public function jobApplication($uuid)
    {
        $applications = JobApplication::where('vaccancy_id', $uuid)->with('vaccancy')->get();
        $vaccancy = JobVacancy::where('uuid', $uuid)->first();
        // dd($applications);
        return view('admin.vaccancy_applications', [
            'applications' => $applications,
            'vaccancy' => $vaccancy
        ]);
    }
}
