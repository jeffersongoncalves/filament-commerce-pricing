<?php

namespace JeffersonGoncalves\FilamentCommerce\Pricing\Concerns;

use JeffersonGoncalves\FilamentCommerce\Core\Concerns\HasCommercePluginConfig;

trait HasCommercePricingPluginConfig
{
    use HasCommercePluginConfig;

    protected function getConfigKey(): string
    {
        return 'filament-commerce-pricing';
    }

    protected function getDefaultNavigationGroup(): string
    {
        return 'Commerce — Catalog';
    }
}
