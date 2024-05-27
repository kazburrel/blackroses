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
        $certificates = Certificate::where('status', 1)
            ->where('expiry_date', '>', $today)
            ->get();
        // dd($certificates);

        foreach ($certificates as $certificate) {
            $expiryDateMinus60Days = Carbon::parse($certificate->expiry_date)->subDays(60);
            if ($today >= $expiryDateMinus60Days && $today < $certificate->expiry_date) {
                $daysUntilExpiry = $today->diffInDays(Carbon::parse($certificate->expiry_date), false);
                if ($daysUntilExpiry > 0) {
                    (new Notify())
                        ->subject('Reminder: Certificate Expiry - ' . $certificate->name)
                        ->greeting('Hello,')
                        ->line('This is a reminder that your certificate, ' . $certificate->name . ', is set to expire in ' . $daysUntilExpiry . ' days.')
                        ->line('Please ensure that you renew your certificate before its expiry date to avoid any disruptions.')
                        ->line('If you have already renewed your certificate, kindly change it on  disregard this reminder.')
                        ->line('Thank you for your attention to this matter.')
                        ->mail($certificate);
                    $certificate->status = false;
                    $certificate->save();
                }
            }
            if ($today->gt(Carbon::parse($certificate->expiry_date))) {
                $daysExpired = $today->diffInDays(Carbon::parse($certificate->expiry_date), false);
                (new Notify())
                    ->subject('Urgent: Expired Certificate - ' . $certificate->name)
                    ->greeting('Hello,')
                    ->line('This is an urgent reminder that your certificate, ' . $certificate->name . ', expired ' . abs($daysExpired) . ' days ago.')
                    ->line('Please take immediate action to renew your certificate as it has already expired.')
                    ->line('Failure to renew the certificate promptly may result in disruptions.')
                    ->line('Thank you for your prompt attention to this matter.')
                    ->mail($certificate);
            }
        }
    }
}
