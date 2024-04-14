<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Models\User;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        $setting = Settings::all();
        return view('index', ['setting' => $setting]);
    }

    public function about()
    {
        $setting = Settings::all();
        return view('about-us', ['setting' => $setting]);
    }
    public function services()
    {
        $setting = Settings::all();
        return view('services', ['setting' => $setting]);
    }
    public function referrals()
    {
        $setting = Settings::all();
        return view('referrals', ['setting' => $setting]);
    }
    public function testmonials()
    {
        $setting = Settings::all();
        return view('testmonials', ['setting' => $setting]);
    }
    public function contact()
    {
        $setting = Settings::all();
        return view('contact', ['setting' => $setting]);
    }
    public function team()
    {
        $setting = Settings::all();
        return view('our-team', ['setting' => $setting]);
    }
}
