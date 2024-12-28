<?php

use Illuminate\Support\Facades\Schedule;

// Schedule::command('send:cert-reminders')->everyMinute();
// Schedule::command('files:clear-unused')->everySixHours();
// Schedule::command('birthday:reminder')->dailyAt('8:00');

Schedule::command('queue:work --stop-when-empty')
    ->everyMinute()
    ->withoutOverlapping();
