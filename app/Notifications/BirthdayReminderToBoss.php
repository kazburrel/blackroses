<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BirthdayReminderToBoss extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     * 
     * If this does not work or the UI is not good, 
     * please use utyemma like in ApplicationApproved.php.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $birthdayDay = $notifiable->birthday->format('l');

        return (new MailMessage)
            ->subject('Upcoming Birthday Reminder')
            ->greeting('Dear Boss,')
            ->line('We would like to inform you that the birthday of our esteemed staff member, ' . $notifiable->fname . ' ' . $notifiable->lname . ', is on ' . $birthdayDay . '.')
            ->line('Kindly consider preparing to acknowledge or celebrate this special occasion.')
            ->line('Thank you for your attention to this matter.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
