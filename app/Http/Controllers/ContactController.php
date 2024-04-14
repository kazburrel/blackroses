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

        (new Notify)->subject('Your Notification Subject')
            ->greeting('Hello', $validatedData['name'])
            ->line('You have a new message.')
            ->line('Thank you for using our application!')
            ->mail($validatedData['email']);

        Session::flash('success', 'Email has been sent successfully.');
        return redirect()->back();
    }
}
