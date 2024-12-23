<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Utyemma\LaraNotice\Notify;

class SendHRNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $hr;
    protected $subject;
    protected $greeting;
    protected $line;

    public function __construct($hr, $subject, $greeting, $line)
    {
        $this->hr = $hr;
        $this->subject = $subject;
        $this->greeting = $greeting;
        $this->line = $line;
    }

    public function handle()
    {
        (new Notify())
            ->subject($this->subject)
            ->greeting($this->greeting)
            ->line($this->line)
            ->mail($this->hr);
    }
}
