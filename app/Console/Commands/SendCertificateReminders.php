<?php

namespace App\Console\Commands;

use App\Models\Certificate;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Utyemma\LaraNotice\Notify;
use Illuminate\Support\Facades\Mail;

class SendCertificateReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:cert-reminders';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reminders for certificates nearing expiration';

    /**
     * Execute the console command.
     */
    // public function handle()
    // {
    //     // Get today's date
    //     $today = Carbon::today();

    //     // Retrieve all certificates that are active (status is true) and not renewed
    //     $certificates = Certificate::where('status', true)->where('is_renewed', false)->get();

    //     // Loop through each certificate
    //     foreach ($certificates as $certificate) {
    //         // Parse the expiry date of the certificate
    //         $expiry_date = Carbon::parse($certificate->expiry_date);

    //         // Initialize a flag to track if an email was sent
    //         $emailSent = false;

    //         // If the days until notification is 0 or null, mark the certificate as inactive
    //         if ($certificate->days_until_notification == 0 || $certificate->days_until_notification == null) {
    //             $certificate->update(['status' => false]);
    //         }

    //         // If the certificate has already expired
    //         if ($expiry_date->isPast()) {
    //             // Send an urgent notification email about the expired certificate
    //             (new Notify())
    //                 ->subject('Urgent: Expired Certificate - ' . $certificate->name)
    //                 ->greeting('Hello,')
    //                 ->line('This is an urgent reminder that your certificate, ' . $certificate->name . ', has expired.')
    //                 ->line('Please take immediate action to renew your certificate as it has already expired.')
    //                 ->line('Failure to renew the certificate promptly may result in disruptions.')
    //                 ->line('Thank you for your prompt attention to this matter.')
    //                 ->mail($certificate);
    //         } else {
    //             // Calculate the remaining days until the certificate expires
    //             $expiry_date = Carbon::createFromFormat('Y-m-d', $certificate->expiry_date);
    //             $remainingDays = $expiry_date->subDays((int)$certificate->days_until_notification);

    //             // Get the number of days until notification
    //             $days = $certificate->days_until_notification;

    //             // Determine the correct singular or plural form for "day"
    //             $dayString = $days == 1 ? 'day' : 'days';

    //             // Create a reminder message
    //             $message = 'This is a reminder that your certificate, ' . $certificate->name . ', is set to expire in ' . $days . ' ' . $dayString . '.';

    //             // If there are days left until notification
    //             if ($certificate->days_until_notification > 0) {
    //                 // If the current date is less than or equal to the remaining days
    //                 if (Carbon::now() <= $remainingDays) {
    //                     // Send a reminder notification email about the upcoming certificate expiry
    //                     (new Notify())
    //                         ->subject('Reminder: Certificate Expiry - ' . $certificate->name)
    //                         ->greeting('Hello,')
    //                         ->line($message)
    //                         ->line('Please ensure that you renew your certificate before its expiry date to avoid any disruptions.')
    //                         ->line('If you have already renewed your certificate, kindly disregard this reminder.')
    //                         ->line('Thank you for your attention to this matter.')
    //                         ->mail($certificate);

    //                     // Set the flag to indicate that an email was sent
    //                     $emailSent = true;
    //                 }
    //             }
    //         }

    //         // If an email was sent and today's date is less than or equal to the expiry date
    //         if ($emailSent && $today <= $expiry_date) {
    //             // Decrease the days until notification by 1, ensuring it doesn't go below 0
    //             $certificate->days_until_notification = max(0, (int)$certificate->days_until_notification - 1);

    //             // Save the updated certificate
    //             $certificate->save();
    //         }
    //     }
    // }

    public function handle()
    {
        $today = Carbon::today();

        $certificates = Certificate::where('stop_sending_mails', false)
            ->where(function ($query) use ($today) {
                $query->whereDate('expiry_date', '<=', $today)
                    ->orWhereRaw('DATEDIFF(expiry_date, ?) <= days_until_notification', [$today]);
            })
            ->get();

        foreach ($certificates as $certificate) {
            if ($today->greaterThanOrEqualTo($certificate->expiry_date)) {
                $this->sendExpiryNotification($certificate);
            } else {
                $this->sendRenewalNotification($certificate);
            }
        }
    }

    protected function sendRenewalNotification($certificate)
    {
        (new Notify())
            ->subject('Certificate Renewal Notification')
            ->greeting('Hello,')
            ->line("Your certificate will expire in {$certificate->days_until_notification} days.")
            ->line('Please ensure that you renew your certificate before its expiry date to avoid any disruptions.')
            ->line('If you have already renewed your certificate, kindly disregard this reminder.')
            ->line('Thank you for your attention to this matter.')
            ->mail($certificate);
    }

    protected function sendExpiryNotification($certificate)
    {
        (new Notify())
            ->subject('Certificate Expiry Notification')
            ->greeting('Hello,')
            ->line('Your certificate has expired. Please take immediate action to renew your certificate as it has already expired.')
            ->line('Failure to renew the certificate promptly may result in disruptions.')
            ->line('Thank you for your prompt attention to this matter.')
            ->mail($certificate);
    }
}
