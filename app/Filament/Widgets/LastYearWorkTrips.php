<?php

namespace App\Filament\Widgets;

class LastYearWorkTrips extends YearlyWorkTrips
{
    public function __construct()
    {
        parent::__construct(date('Y') - 1);
    }
}
