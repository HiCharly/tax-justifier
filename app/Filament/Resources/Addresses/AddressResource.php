<?php

namespace App\Filament\Resources\Addresses;

use App\Filament\Resources\Addresses\Pages\CreateAddress;
use App\Filament\Resources\Addresses\Pages\EditAddress;
use App\Filament\Resources\Addresses\Pages\ListAddresses;
use App\Filament\Resources\Addresses\Schemas\AddressForm;
use App\Filament\Resources\Addresses\Tables\AddressesTable;
use App\Models\Address;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class AddressResource extends Resource
{
    protected static ?string $model = Address::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::MapPin;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return AddressForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AddressesTable::configure($table);
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
            'index' => ListAddresses::route('/'),
            'create' => CreateAddress::route('/create'),
            'edit' => EditAddress::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('user_id', auth()->id());
    }

    public static function getModelLabel(): string
    {
        return trans_choice('app.address.address', 1);
    }

    public static function getPluralModelLabel(): string
    {
        return trans_choice('app.address.address', 2);
    }

    public static function getNavigationLabel(): string
    {
        return __('app.address.my_addresses');
    }
}
