<?php

namespace App\Jobs;

use App\Models\JobApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Utyemma\LaraNotice\Notify;

class SendApplicationReceivedEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // The JobApplication instance representing the application
    protected $application;

    // The title of the vacancy for which the application was submitted
    protected $vacancyTitle;

    // Constructor to initialize the job with the application and vacancy title
    public function __construct(JobApplication $application, $vacancyTitle)
    {
        $this->application = $application;
        $this->vacancyTitle = $vacancyTitle;
    }

    // Handle the job to send the application received email
    public function handle()
    {
        // Create a new notification instance and configure the email content
        (new Notify())
            ->subject('Application Received - ' . $this->vacancyTitle) // Set the email subject
            ->greeting('Dear ' . $this->application->fullname . ',') // Set the email greeting
            ->line('Thank you for applying for the ' . $this->vacancyTitle . ' position at ' . config('app.name') . '. We have received your application and appreciate your interest in joining our team.') // Add a line to the email body
            ->line('Our hiring team will carefully review your application and qualifications. If your profile matches our requirements, we will reach out to you to proceed with the next steps of the hiring process.') // Add another line to the email body
            ->line('Please note that due to the high volume of applications we receive, we may not be able to respond to every applicant immediately. However, rest assured that your application is important to us, and we will get back to you as soon as possible.') // Add another line to the email body
            ->line('Once again, thank you for considering ' . config('app.name') . ' as your potential employer.') // Add a final line to the email body
            ->mail($this->application); // Send the email to the applicant
    }
}
