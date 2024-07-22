<?php

namespace App\Http\Controllers;

use App\Enums\UserPermissions;
use App\Enums\UserRoles;
use App\Models\JobApplication;
use App\Models\JobVacancy;
use App\Models\OurTeam;
use App\Models\Settings;
use App\Models\User;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

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
        $team = OurTeam::all();
        return view(
            'our-team',
            [
                'setting' => $setting,
                'teamMembers' => $team
            ]
        );
    }

    public function apply($job)
    {
        SEOMeta::setTitle('Job Application');
        $get_job = JobVacancy::where('uuid', $job)->first();
        $setting = Settings::all();
        return view(
            'apply',
            [
                'setting' => $setting,
                'job' => $get_job
            ]
        );
    }

    // DASHBOARD

    public function getProfile()
    {
        SEOMeta::setTitle('Profile');
        $user = Auth::user();
        return view('admin.profile.profile', [
            'user' => $user,
        ]);
    }

    public function getProfileEdit()
    {
        SEOMeta::setTitle('Edit profile');
        $user = Auth::user();
        return view('admin.profile.edit_profile', [
            'user' => $user,
        ]);
    }

    // ADMIN VIEWS

    public function adminDashboard()
    {
        $user = Auth::user();
        SEOMeta::setTitle('Dashboard');
        return view('admin.dashboard', [
            'user' => $user,
        ]);
    }

    public function vacancy()
    {
        SEOMeta::setTitle('Listed vacancy');
        $user = Auth::user();
        $vaccancy = Cache::remember('job_vacancies', 60 * 60, function () {
            return JobVacancy::all();
        });
        return view('admin.vacancy', [
            'vaccancies' => $vaccancy,
            'user' => $user
        ]);
    }

    public function getPostVacancy()
    {
        $user = Auth::user();
        SEOMeta::setTitle('Post vacancy');
        return view('admin.post_vacancy', [
            'user' => $user,
        ]);
    }

    public function jobApplications()
    {
        $user = Auth::user();
        SEOMeta::setTitle('All applications');
        return view('admin.all_applications', [

            'user' => $user,
        ]);
    }

    public function jobApplication($uuid)
    {
        $user = Auth::user();
        $applications = JobApplication::where('vaccancy_id', $uuid)->with('vaccancy')->get();
        $vaccancy = JobVacancy::where('uuid', $uuid)->first();
        SEOMeta::setTitle('Applications');
        return view('admin.vaccancy_applications', [
            'applications' => $applications,
            'vaccancy' => $vaccancy,
            'user' => $user
        ]);
    }

    public function getTeam()
    {
        $user = Auth::user();
        SEOMeta::setTitle('BRS Team');
        return view('admin.team.all-team', [
            'user' => $user
        ]);
    }

    public function addTeamMember()
    {
        $user = Auth::user();
        SEOMeta::setTitle('Add a Team Member');
        return view('admin.team.add-team', [
            'user' => $user
        ]);
    }
    public function mailTeamMember()
    {
        $user = Auth::user();
        SEOMeta::setTitle('Mail Team');

        $staffUsers = User::permission(UserPermissions::STAFF_TO_MANAGEUSERS)->get();
        return view('admin.team.mail-team', [
            'user' => $user,
            'staffUsers' => $staffUsers
        ]);
    }

    public function getCertificate()
    {
        $user = Auth::user();
        SEOMeta::setTitle('Certificates');
        return view('admin.certificate.certificate', [
            'user' => $user
        ]);
    }
}
