<?php

namespace App\Console\Commands;

use App\Mail\WeeklyWorkTripsNotification;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendWeeklyWorkTripsNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-weekly-work-trips-notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send weekly reminder to users to enter their work trips';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::all();


        foreach ($users as $user) {
            Mail::to($user->email)->send(new WeeklyWorkTripsNotification());
        }

        
        return Command::SUCCESS;
    }
}
