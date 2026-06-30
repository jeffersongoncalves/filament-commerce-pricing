<?php

namespace JeffersonGoncalves\FilamentCommerce\Pricing\Resources\PriceList\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\FilamentCommerce\Pricing\Resources\PriceList\PriceListResource;

class ListPriceList extends ListRecords
{
    protected static string $resource = PriceListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
