<?php

namespace App\Filament\Resources\WorkTrips\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class WorkTripForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('date')
                    ->label(__('app.work_trip.date'))
                    ->required(),
                Select::make('vehicle_id')
                    ->label(ucfirst(trans_choice('app.vehicle.vehicle', 1)))
                    ->relationship('vehicle', 'name')
                    ->required(),
                Select::make('home_address_id')
                    ->label(__('app.work_trip.home_address'))
                    ->relationship('homeAddress', 'name')
                    ->required(),
                Select::make('work_address_id')
                    ->label(__('app.work_trip.work_address'))
                    ->relationship('workAddress', 'name')
                    ->required(),
            ]);
    }
}
