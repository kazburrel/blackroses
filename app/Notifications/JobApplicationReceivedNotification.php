<?php

namespace App\Notifications;

use App\Models\JobVacancy;
use App\Models\Settings;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Config;

class JobApplicationReceivedNotification extends Notification
{
    use Queueable;

    protected $vaccancy;

    /**
     * Create a new notification instance.
     *
     * @param JobVacancy $vaccancy
     */
    public function __construct(JobVacancy $vaccancy)
    {
        $this->vaccancy = $vaccancy;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New Job Application - ' . $this->vaccancy->title)
            ->greeting('Dear HR Team,')
            ->line('A new job application has been received for the ' . $this->vaccancy->title . ' position at ' . Config::get('app.name') . '.')
            ->line('Please review the application at your earliest convenience.')
            ->line('Thank you.');
    }
}
