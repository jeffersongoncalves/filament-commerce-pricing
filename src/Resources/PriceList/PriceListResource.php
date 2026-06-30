<?php

namespace JeffersonGoncalves\FilamentCommerce\Pricing\Resources\PriceList;

use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use JeffersonGoncalves\Commerce\Pricing\Models\PriceList;
use JeffersonGoncalves\FilamentCommerce\Pricing\CommercePricingPlugin;
use JeffersonGoncalves\FilamentCommerce\Pricing\Resources\PriceList\Pages\CreatePriceList;
use JeffersonGoncalves\FilamentCommerce\Pricing\Resources\PriceList\Pages\EditPriceList;
use JeffersonGoncalves\FilamentCommerce\Pricing\Resources\PriceList\Pages\ListPriceList;
use JeffersonGoncalves\FilamentCommerce\Pricing\Resources\PriceList\Schemas\PriceListForm;
use JeffersonGoncalves\FilamentCommerce\Pricing\Resources\PriceList\Tables\PriceListTable;

class PriceListResource extends Resource
{
    protected static ?string $model = PriceList::class;

    public static function getNavigationGroup(): ?string
    {
        try {
            return CommercePricingPlugin::get()->getNavigationGroup();
        } catch (\Throwable) {
            return config('filament-commerce-pricing.navigation_group', 'Commerce — Catalog');
        }
    }

    public static function form(Schema $schema): Schema
    {
        return PriceListForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PriceListTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPriceList::route('/'),
            'create' => CreatePriceList::route('/create'),
            'edit' => EditPriceList::route('/{record}/edit'),
        ];
    }
}
