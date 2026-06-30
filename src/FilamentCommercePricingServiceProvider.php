<?php

namespace JeffersonGoncalves\FilamentCommerce\Pricing;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCommercePricingServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-commerce-pricing';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
