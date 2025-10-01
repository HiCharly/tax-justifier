<?php

namespace App\Filament\Widgets;

use App\Models\WorkTrip;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

abstract class YearlyWorkTrips extends StatsOverviewWidget
{
    public function __construct(private readonly int $year)
    {
    }

    public function getHeading(): string
    {
        return __('app.work_trip.my_work_trips') . ' ' . $this->year;
    }

    protected function getStats(): array
    {
        $user = Auth::user();

        // Get work trips for the year, grouped by home and work addresses
        $workTrips = WorkTrip::with(['homeAddress', 'workAddress'])
            ->where('user_id', $user->id)
            ->whereYear('date', $this->year)
            ->get()
            ->groupBy(function ($trip) {
                return sprintf('%s → %s (%s)', $trip->homeAddress->name, $trip->workAddress->name, $trip->vehicle->name);
            });

        $stats = [];

        foreach ($workTrips as $route => $trips) {
            $stats[] = Stat::make($route, $trips->count() * 2)
                ->description(__('app.work_trip.trips_count', ['count' => $trips->count()]));
        }

        // If no trips found, show a message
        if (empty($stats)) {
            $stats[] = Stat::make(__('app.work_trip.no_trips'), '0')
                ->description(__('app.work_trip.no_trips_last_year'));
        }

        return $stats;
    }
}
