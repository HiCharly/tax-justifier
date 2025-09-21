<?php

namespace App\Filament\Resources\WorkTrips\Pages;

use App\Filament\Resources\WorkTrips\WorkTripResource;
use Filament\Resources\Pages\CreateRecord;

class CreateWorkTrip extends CreateRecord
{
    protected static string $resource = WorkTripResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}
