<?php

namespace JeffersonGoncalves\FilamentCommerce\Pricing\Resources\PriceList\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class PriceListForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Details')
                    ->schema([
                        TextInput::make('title'),
                        TextInput::make('description'),
                    ])->columns(2),
            ]);
    }
}
