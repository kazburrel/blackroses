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

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::today();
        $certificates = Certificate::where('status', true)->where('is_renewed', false)->get();
        foreach ($certificates as $certificate) {
            $expiry_date = Carbon::parse($certificate->expiry_date);
            $emailSent = false;
            $expiryDate = Carbon::parse($certificate->expiry_date);
            if ($certificate->days_until_notification == 0) {
                $certificate->update(['status' => false]);
            }
            if ($expiryDate->isPast()) {
                (new Notify())
                    ->subject('Urgent: Expired Certificate - ' . $certificate->name)
                    ->greeting('Hello,')
                    ->line('This is an urgent reminder that your certificate, ' . $certificate->name . ', expired.')
                    ->line('Please take immediate action to renew your certificate as it has already expired.')
                    ->line('Failure to renew the certificate promptly may result in disruptions.')
                    ->line('Thank you for your prompt attention to this matter.')
                    ->mail($certificate);
            } else {
                $expiryDate = Carbon::createFromFormat('Y-m-d', $certificate->expiry_date);
                $remainingDays = $expiryDate->subDays($certificate->days_until_notification);
                $days = $certificate->days_until_notification;
                $dayString = $days == 1 ? 'day' : 'days';
                $message = 'This is a reminder that your certificate, ' . $certificate->name . ', is set to expire in ' . $days . ' ' . $dayString . '.';
                if ($certificate->days_until_notification > 0) {
                    if (Carbon::now() <= $remainingDays) {
                        (new Notify())
                            ->subject('Reminder: Certificate Expiry - ' . $certificate->name)
                            ->greeting('Hello,')
                            ->line($message)
                            ->line('Please ensure that you renew your certificate before its expiry date to avoid any disruptions.')
                            ->line('If you have already renewed your certificate, kindly disregard this reminder.')
                            ->line('Thank you for your attention to this matter.')
                            ->mail($certificate);
                        $emailSent = true;
                    }
                }
            }

            if ($emailSent && $today <= $expiry_date) {
                $certificate->days_until_notification = max(0, $certificate->days_until_notification - 1);
                $certificate->save();
            }
        }
    }
}
