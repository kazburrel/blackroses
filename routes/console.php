<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('send:cert-reminders')->everyMinute();

Schedule::command('files:clear-unused')->everySixHours();

Schedule::command('birthday:reminder')->dailyAt('8:00');

// clear log
// echo "" > storage/logs/laravel.log
