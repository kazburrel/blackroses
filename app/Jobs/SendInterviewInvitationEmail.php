<?php

namespace App\Jobs;

use App\Models\JobApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Utyemma\LaraNotice\Notify;

class SendInterviewInvitationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // The JobApplication instance representing the application
    protected $application;

    // Constructor to initialize the job with the application
    public function __construct(JobApplication $application)
    {
        $this->application = $application;
    }

    // Handle the job to send the interview invitation email
    public function handle()
    {
        // Create a new notification instance and configure the email content
        (new Notify())
            ->subject('Interview Invitation: Congratulations, Your Job Application is Approved!') // Set the email subject
            ->greeting('Hello ' . $this->application->fullname . '!') // Set the email greeting
            ->line('Congratulations! Your job application has been approved, and we would like to invite you to the next stage of our hiring process: the interview.') // Add a line to the email body
            ->line('Please check your email regularly for further instructions regarding the interview schedule and details.') // Add another line to the email body
            ->line('We look forward to meeting with you and discussing your candidacy further.') // Add another line to the email body
            ->line('Thank you for your interest in joining our company, and we appreciate your participation in our hiring process.') // Add a final line to the email body
            ->mail($this->application); // Send the email to the applicant
    }
}
