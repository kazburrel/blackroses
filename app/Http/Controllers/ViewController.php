<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        $user = User::all();
        return view('index', ['user' => $user]);
    }

    public function about()
    {
        return view('about-us');
    }
    public function services()
    {
        return view('services');
    }
    public function referrals()
    {
        return view('referrals');
    }
    public function testmonials()
    {
        return view('testmonials');
    }
    public function contact()
    {
        return view('contact');
    }
    public function team()
    {
        return view('our-team');
    }
}
