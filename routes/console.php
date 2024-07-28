<?php

use Illuminate\Support\Facades\Schedule;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Schedule::command('send:cert-reminders')->everyMinute();

Schedule::command('files:clear-unused')->everySixHours();

// clear log
// echo "" > storage/logs/laravel.log
