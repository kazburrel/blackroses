<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Models\User;
use App\Rules\Recaptcha;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Utyemma\LaraNotice\Notify;


class ContactController extends Controller
{
    public function contactUs(Request $request)
    {


        $user = Settings::all();
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
            'g-recaptcha-response' => ['required', new Recaptcha],

        ]);

        (new Notify)->subject($validatedData['subject'])
            ->greeting('Hello')
            ->line('You have a new message for ' . config('app.name'))
            ->line('Name: ' . $validatedData['name'])
            ->line('Email: ' . $validatedData['email'])
            ->line('Message: ' . $validatedData['message'])
            ->mail($user);
        toast('Email has been sent successfully.', 'success');
        return redirect()->back();
    }
}
