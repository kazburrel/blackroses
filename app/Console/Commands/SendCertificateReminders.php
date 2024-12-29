<?php

namespace App\Console\Commands;

use App\Models\Certificate;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Utyemma\LaraNotice\Notify;

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

        // Find all certificates that need reminders and haven't opted out of emails.
        $certificates = Certificate::where('stop_sending_mails', false)
            ->where(function ($query) use ($today) {
                // Certificates that are expired or about to expire soon.
                $query->whereDate('expiry_date', '<=', $today)
                    ->orWhereRaw('DATEDIFF(expiry_date, ?) <= days_until_notification', [$today])
                    ->orWhereRaw('DATEDIFF(expiry_date, ?) <= 10', [$today]);
            })
            ->get();

        if ($certificates->isEmpty()) {
            return;
        }

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
    protected function sendRenewalNotification(Certificate $certificate)
    {
        // Calculate the number of days until the certificate expires.
        $daysToExpiry = Carbon::now()->diffInDays(Carbon::parse($certificate->expiry_date)->startOfDay(), false);
        $daysToExpiry = $daysToExpiry < 0 ? ceil($daysToExpiry) : floor($daysToExpiry);

        // Determine the text to display for the number of days until expiry.
        $daysToExpiryText = $daysToExpiry < 1 ? '1 day' : "{$daysToExpiry} days";


        (new Notify())
            ->subject('Certificate Renewal Notification')
            ->greeting('Hello,')
            ->line("Your certificate will expire in {$daysToExpiryText}.")
            ->line('Please ensure that you renew your certificate before its expiry date to avoid any disruptions.')
            ->line('If you have already renewed your certificate, kindly disregard this reminder.')
            ->line('Thank you for your attention to this matter.')
            ->mail($certificate);
    }

    /**
     * Sends an expiry notification for a certificate that has already expired.
     *
     * @param Certificate $certificate The certificate that has expired.
     */
    protected function sendExpiryNotification(Certificate $certificate)
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
