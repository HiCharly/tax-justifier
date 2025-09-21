<?php

namespace App\Filament\Resources\WorkTrips;

use App\Filament\Resources\WorkTrips\Pages\CreateWorkTrip;
use App\Filament\Resources\WorkTrips\Pages\EditWorkTrip;
use App\Filament\Resources\WorkTrips\Pages\ListWorkTrips;
use App\Filament\Resources\WorkTrips\Pages\WeeklyWorkTrips;
use App\Filament\Resources\WorkTrips\Schemas\WorkTripForm;
use App\Filament\Resources\WorkTrips\Tables\WorkTripsTable;
use App\Models\WorkTrip;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class WorkTripResource extends Resource
{
    protected static ?string $model = WorkTrip::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ArrowsRightLeft;

    public static function form(Schema $schema): Schema
    {
        return WorkTripForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WorkTripsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListWorkTrips::route('/'),
            'create' => CreateWorkTrip::route('/create'),
            'edit' => EditWorkTrip::route('/{record}/edit'),
            'weekly' => WeeklyWorkTrips::route('/weekly'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('user_id', auth()->id());
    }

    public static function getModelLabel(): string
    {
        return trans_choice(__('app.work_trip.work_trip'), 1);
    }

    public static function getPluralModelLabel(): string
    {
        return trans_choice(__('app.work_trip.work_trip'), 2);
    }

    public static function getNavigationLabel(): string
    {
        return __('app.work_trip.my_work_trips');
    }
}
