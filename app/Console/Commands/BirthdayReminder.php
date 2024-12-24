<?php

use App\Models\Settings;
use Illuminate\Console\Command;
use App\Models\User;
use App\Notifications\BirthdayNotification;
use App\Notifications\BirthdayReminderToBoss;
use Carbon\Carbon;

class BirthdayReminder extends Command
{
    protected $signature = 'birthday:reminder';
    protected $description = 'Send birthday reminders and notifications to the boss and staff';

    public function handle()
    {
        $today = Carbon::today();
        $sevenDaysFromNow = $today->addDays(7);

        // Get all users whose birthday is today
        $todayBirthdays = User::whereRaw('MONTH(date_of_birth) = ? AND DAY(date_of_birth) = ?', [$today->month, $today->day])
            ->get();

        foreach ($todayBirthdays as $user) {
            // Send birthday notification to staff
            $user->notify(new BirthdayNotification());
        }

        // Get all users whose birthday is 7 days from now
        $upcomingBirthdays = User::whereRaw('MONTH(date_of_birth) = ? AND DAY(date_of_birth) = ?', [$sevenDaysFromNow->month, $sevenDaysFromNow->day])
            ->get();

        foreach ($upcomingBirthdays as $user) {
            // Send a reminder to info@blackrosessupport.co.uk about the upcoming birthday
            Settings::where('email', 'info@blackrosessupport.co.uk')->first()->notify(new BirthdayReminderToBoss($user));
        }
    }
}
