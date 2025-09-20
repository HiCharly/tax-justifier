<?php

namespace App\Filament\Resources\WorkTrips\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class WorkTripsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('date')
                    ->label(__('app.work_trip.date'))
                    ->date()
                    ->sortable()
                    ->searchable(),
                TextColumn::make('vehicle.name')
                    ->label(ucfirst(trans_choice('app.vehicle.vehicle', 1)))
                    ->searchable(),
                TextColumn::make('homeAddress.name')
                    ->label(__('app.work_trip.home_address'))
                    ->searchable(),
                TextColumn::make('workAddress.name')
                    ->label(__('app.work_trip.work_address'))
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
