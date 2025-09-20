<?php

namespace App\Filament\Resources\WorkTrips\Pages;

use App\Filament\Resources\WorkTrips\WorkTripResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWorkTrips extends ListRecords
{
    protected static string $resource = WorkTripResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
