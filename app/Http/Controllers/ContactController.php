<?php

namespace App\Http\Controllers;

use App\Mailables\ContactMailable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Utyemma\LaraNotice\Notify;


class ContactController extends Controller
{
    public function contactUs(Request $request)
    {
        //fetch the email from settings and the name of the admin

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        (new Notify)->subject($validatedData['subject'])
            ->greeting('Hello')
            ->line('You have a new message for ' . config('app.name'))
            ->line('Name: ' . $validatedData['name'])
            ->line('Email: ' . $validatedData['email'])
            ->line('Message: ' . $validatedData['message'])
            ->mail($validatedData['email']);

        Session::flash('success', 'Email has been sent successfully.');
        return redirect()->back();
    }
}
