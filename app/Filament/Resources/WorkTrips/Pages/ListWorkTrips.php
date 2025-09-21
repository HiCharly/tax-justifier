<?php

namespace App\Filament\Resources\WorkTrips\Pages;

use App\Filament\Resources\WorkTrips\WorkTripResource;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\Support\Htmlable;

class ListWorkTrips extends ListRecords
{
    protected static string $resource = WorkTripResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('weekly')
                ->label(__('app.work_trip.weekly_work_trips'))
                ->icon('heroicon-o-calendar-days')
                ->url(fn (): string => WorkTripResource::getUrl('weekly'))
                ->color('primary'),
            CreateAction::make(),
        ];
    }

    public function getTitle(): string|Htmlable
    {
        return __('app.work_trip.my_work_trips');
    }
}
