<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Utyemma\LaraNotice\Notify;

class CheckFailedJobs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jobs:check-failed-jobs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check for failed jobs and send email report';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $hours = $this->option('hours');
        $cutoffTime = Carbon::now()->subHours($hours);

        // Get failed jobs
        $failedJobs = DB::table('failed_jobs')
            ->where('failed_at', '>=', $cutoffTime)
            ->get();
        if ($failedJobs->count() > 0) {
            // Process jobs for email
            $jobDetails = $failedJobs->map(function ($job) {
                return [
                    'id' => $job->id,
                    'queue' => $job->queue,
                    'failed_at' => Carbon::parse($job->failed_at)->format('Y-m-d H:i:s'),
                    'payload' => json_decode($job->payload, true),
                    'exception' => $job->exception,
                ];
            });

            // Send email
            $recipientEmails = collect(['dev.blackrosessupport.co.uk']);
            (new Notify())
                ->subject('Failed Jobs Notification')
                ->greeting('Hello,')
                ->line("The following jobs have failed in the past {$hours} hours:")
                ->line('Please review the job details to identify and resolve the issues.')
                ->line('Thank you for your attention to this matter.')
                ->view('emails.failed-jobs-report', ['failedJobs' => $jobDetails, 'hours' => $hours])
                ->mail($recipientEmails);

            $this->info("Found {$failedJobs->count()} failed jobs. Email report sent.");
        } else {
            $this->info('No failed jobs found in the past ' . $hours . ' hours.');
        }
    }
}
