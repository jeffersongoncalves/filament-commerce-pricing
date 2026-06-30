<?php

namespace JeffersonGoncalves\FilamentCommerce\Pricing;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\Pricing\Concerns\HasCommercePricingPluginConfig;
use JeffersonGoncalves\FilamentCommerce\Pricing\Resources\PriceList\PriceListResource;

class CommercePricingPlugin implements Plugin
{
    use HasCommercePricingPluginConfig;

    public function getId(): string
    {
        return 'filament-commerce-pricing';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'pricing' => PriceListResource::class,
        ]));

        $panel->widgets($this->resolveWidgets());
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
