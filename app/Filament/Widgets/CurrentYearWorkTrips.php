<?php

namespace App\Filament\Widgets;

class CurrentYearWorkTrips extends YearlyWorkTrips
{
    public function __construct()
    {
        parent::__construct(date('Y'));
    }
}
