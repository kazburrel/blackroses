<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

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
        //
    }
}
