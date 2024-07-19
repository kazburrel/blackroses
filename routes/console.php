<?php

use Illuminate\Support\Facades\Schedule;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Schedule::command('send:cert-reminders')->everyMinute();

Schedule::command('queue:restart')
    ->everyFiveMinutes();


// Schedule the 'queue:work' Artisan command to run every minute.
// The '--stop-when-empty' option ensures that the worker will stop when the queue is empty.
// The 'withoutOverlapping' method prevents the command from overlapping with itself.
Schedule::command('queue:work --stop-when-empty')
    ->everyMinute()
    ->withoutOverlapping();
