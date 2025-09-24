<?php

namespace App\Filament\Pages\WorkTrips;

use App\Filament\Resources\WorkTrips\Pages\ListWorkTrips;
use App\Settings\WorkTripSettings;
use BackedEnum;
use Filament\Forms\Components\Select;
use Filament\Pages\SettingsPage;
use Filament\Panel;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class WorkTripDefaults extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static bool $shouldRegisterNavigation = false;

    protected static string $settings = WorkTripSettings::class;

    public function form(Schema $schema): Schema
    {
        $user = auth()->user();

        return $schema
            ->components([
                Select::make('default_vehicle_id')
                    ->label(__('app.work_trip.default_vehicle'))
                    ->options($user->vehicles()->pluck('name', 'id')),
                Select::make('default_home_address_id')
                    ->label(__('app.work_trip.default_home_address'))
                    ->options($user->addresses()->pluck('name', 'id')),
                Select::make('default_work_address_id')
                    ->label(__('app.work_trip.default_work_address'))
                    ->options($user->addresses()->pluck('name', 'id')),
            ]);
    }

    public function getTitle(): string
    {
        return __('app.work_trip.configure_defaults');
    }

    public function getBreadcrumbs(): array
    {
        return [
            ListWorkTrips::getUrl() => __('app.work_trip.my_work_trips'),
            $this->getTitle(),
        ];
    }

    public static function getSlug(?Panel $panel = null): string
    {
        return 'work-trips/defaults';
    }
}
