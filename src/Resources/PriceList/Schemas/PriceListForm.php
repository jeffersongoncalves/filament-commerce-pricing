<?php

namespace JeffersonGoncalves\FilamentCommerce\Pricing\Resources\PriceList\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PriceListForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make('Details')
                    ->schema([
                        TextInput::make('title'),
                        TextInput::make('description'),
                    ])->columns(2),
            ]);
    }
}
