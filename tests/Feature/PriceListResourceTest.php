<?php

use JeffersonGoncalves\Commerce\Pricing\Models\PriceList;
use JeffersonGoncalves\FilamentCommerce\Pricing\Resources\PriceList\Pages\CreatePriceList;
use JeffersonGoncalves\FilamentCommerce\Pricing\Resources\PriceList\Pages\ListPriceList;
use Livewire\Livewire;

it('renders the pricing list page', function () {
    PriceList::factory()->count(2)->create();

    Livewire::test(ListPriceList::class)->assertOk();
});

it('creates a pricing record through the panel', function () {
    Livewire::test(CreatePriceList::class)
        ->fillForm([
            'title' => 'Summer Sale',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(PriceList::query()->count())->toBe(1);
});
