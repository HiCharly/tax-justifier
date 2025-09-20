<?php

namespace App\Filament\Resources\WorkTrips\Pages;

use App\Filament\Resources\WorkTrips\WorkTripResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditWorkTrip extends EditRecord
{
    protected static string $resource = WorkTripResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
