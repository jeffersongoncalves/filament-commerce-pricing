<?php

namespace JeffersonGoncalves\FilamentCommerce\Pricing\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\FilamentCommerce\Pricing\CommercePricingPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CommercePricingPlugin::make(),
            ]);
    }
}
