<?php

namespace App\Jobs;

use App\Models\JobApplication;
use App\Models\Settings;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Utyemma\LaraNotice\Notify;

class SendNewJobApplicationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $vacancyTitle; // The title of the job vacancy

    // Constructor to initialize the job with the vacancy title
    public function __construct($vacancyTitle)
    {
        $this->vacancyTitle = $vacancyTitle;
    }

    // Handle the job to send the new job application email
    public function handle()
    {
        $hr = Settings::all(); // Fetch all HR settings
        // Create a new notification instance and configure the email content
        (new Notify())
            ->subject('New Job Application - ' . $this->vacancyTitle) // Set the email subject
            ->greeting('Dear HR Team,') // Set the email greeting
            ->line('A new job application has been received for the ' . $this->vacancyTitle . ' position at ' . config('app.name') . '.') // Add a line to the email body
            ->line('Please review the application at your earliest convenience.') // Add another line to the email body
            ->line('Thank you.') // Add a final line to the email body
            ->mail($hr); // Send the email to the HR team
    }
}
