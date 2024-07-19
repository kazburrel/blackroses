<?php

namespace App\Jobs;

use App\Models\JobApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Utyemma\LaraNotice\Notify;

class SendApplicationRejectionEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // The JobApplication instance representing the application
    protected $application;

    // Constructor to initialize the job with the application
    public function __construct(JobApplication $application)
    {
        $this->application = $application;
    }

    // Handle the job to send the application rejection email
    public function handle()
    {
        // Create a new notification instance and configure the email content
        (new Notify())
            ->subject('Regarding Your Job Application') // Set the email subject
            ->greeting('Hello ' . $this->application->fullname . '!') // Set the email greeting
            ->line('Thank you for your interest in our company and for taking the time to apply.') // Add a line to the email body
            ->line('Unfortunately, we regret to inform you that your job application has been unsuccessful.') // Add another line to the email body
            ->line('We appreciate your interest in our company and the time you took to apply. However, after careful consideration, we have decided not to proceed with your application at this time.') // Add another line to the email body
            ->line('Thank you for your understanding and interest in our company.') // Add a final line to the email body
            ->mail($this->application); // Send the email to the applicant
    }
}
