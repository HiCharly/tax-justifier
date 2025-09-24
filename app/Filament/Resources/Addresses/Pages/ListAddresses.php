<?php

namespace App\Filament\Resources\Addresses\Pages;

use App\Filament\Resources\Addresses\AddressResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\Support\Htmlable;

class ListAddresses extends ListRecords
{
    protected static string $resource = AddressResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTitle(): string|Htmlable
    {
        return __('app.address.my_addresses');
    }
}
