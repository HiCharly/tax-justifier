<?php

namespace App\Filament\Resources\WorkTrips\Schemas;

use App\Settings\WorkTripSettings;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class WorkTripForm
{
    private WorkTripSettings $settings;

    function __construct(WorkTripSettings $settings)
    {
        $this->settings = $settings;
    }

    public static function configure(Schema $schema): Schema
    {
        $settings = app(WorkTripSettings::class);

        return $schema
            ->components([
                DatePicker::make('date')
                    ->label(__('app.work_trip.date'))
                    ->required(),
                Select::make('vehicle_id')
                    ->label(ucfirst(trans_choice('app.vehicle.vehicle', 1)))
                    ->relationship('vehicle', 'name')
                    ->default($settings->default_vehicle_id)
                    ->required(),
                Select::make('home_address_id')
                    ->label(__('app.work_trip.home_address'))
                    ->relationship('homeAddress', 'name')
                    ->default($settings->default_home_address_id)
                    ->required(),
                Select::make('work_address_id')
                    ->label(__('app.work_trip.work_address'))
                    ->relationship('workAddress', 'name')
                    ->default($settings->default_work_address_id)
                    ->required(),
            ]);
    }
}
