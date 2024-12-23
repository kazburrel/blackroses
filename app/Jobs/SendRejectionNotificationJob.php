<?php

namespace App\Jobs;

use App\Models\JobApplication;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Utyemma\LaraNotice\Notify;

class SendRejectionNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $application;
    protected $subject;
    protected $greeting;
    protected $lines;

    public function __construct(JobApplication $application, $subject, $greeting, array $lines)
    {
        $this->application = $application;
        $this->subject = $subject;
        $this->greeting = $greeting;
        $this->lines = $lines;
    }

    public function handle()
    {
        (new Notify())
            ->subject($this->subject)
            ->greeting($this->greeting)
            ->lines($this->lines)
            ->mail($this->application);
    }
}
