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

    public function handle()
    {
        $today = Carbon::today();

        // Let's find all the certificates that we need to remind people about.
        // We only want certificates that haven't told us to stop sending emails.
        $certificates = Certificate::where('stop_sending_mails', false)
            // Now, let's check if the certificate is either expired or about to expire soon.
            ->where(function ($query) use ($today) {
                // If the certificate's expiry date is today or earlier, we need to remind them.
                $query->whereDate('expiry_date', '<=', $today)
                    // Or if the certificate will expire in a few days, we also need to remind them.
                    ->orWhereRaw('DATEDIFF(expiry_date, ?) <= days_until_notification', [$today])
                    // Or if the certificate will expire in 10 or fewer days, we also need to remind them.
                    ->orWhereRaw('DATEDIFF(expiry_date, ?) <= 10', [$today]);
            })
            // Get all the certificates that match our rules.
            ->get();
        // dd($certificates);
        foreach ($certificates as $certificate) {
            if ($today->greaterThanOrEqualTo($certificate->expiry_date)) {
                $this->sendExpiryNotification($certificate);
            } else {
                $this->sendRenewalNotification($certificate);
            }
        }
    }

    /**
     * Sends a renewal notification for a certificate that is nearing its expiry date.
     *
     * @param Certificate $certificate The certificate that is about to expire.
     */
    protected function sendRenewalNotification($certificate)
    {
        // Calculate the number of days until the certificate expires.
        $daysToExpiry = Carbon::now()->diffInDays(Carbon::parse($certificate->expiry_date)->startOfDay(), false);

        // Determine the text to display for the number of days until expiry.
        $daysToExpiryText = $daysToExpiry < 1 ? '1 day' : "{$daysToExpiry} days";

        // Create and send a notification email to the certificate holder.
        (new Notify())
            ->subject('Certificate Renewal Notification') // Set the email subject.
            ->greeting('Hello,') // Set the email greeting.
            ->line("Your certificate will expire in {$daysToExpiryText}.") // Inform the user about the expiry date.
            ->line('Please ensure that you renew your certificate before its expiry date to avoid any disruptions.') // Request the user to renew the certificate.
            ->line('If you have already renewed your certificate, kindly disregard this reminder.') // Inform the user to ignore if already renewed.
            ->line('Thank you for your attention to this matter.') // Thank the user.
            ->mail($certificate); // Send the email to the certificate holder.
    }

    protected function sendExpiryNotification($certificate)
    {
        (new Notify())
            ->subject('Certificate Expiry Notification')
            ->greeting('Hello,')
            ->line("Your certificate '{$certificate->name}' has expired. Please take immediate action to renew your certificate as it has already expired.")
            ->line('Failure to renew the certificate promptly may result in disruptions.')
            ->line('Thank you for your prompt attention to this matter.')
            ->mail($certificate);
    }
}
