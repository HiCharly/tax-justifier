<?php

use App\Console\Commands\SendWeeklyWorkTripsNotification;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::command(SendWeeklyWorkTripsNotification::class)
    ->weeklyOn(5, '18:00');
