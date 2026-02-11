<?php

use Digitonic\FilamentNavigation\Models\Navigation;
use Illuminate\Support\Facades\Route;

function registerNavigationFrontendTestRoute(): void
{
    Route::get('/test-navigation/{handle}', function (string $handle) {
        $navigation = Navigation::fromHandle($handle);

        abort_if(blank($navigation), 404);

        $firstItemLabel = data_get($navigation->items, '0.label', '');

        return response("menu: {$navigation->name}\nitem: {$firstItemLabel}");
    });
}

it('renders a created navigation on a frontend page by handle', function () {
    registerNavigationFrontendTestRoute();

    Navigation::query()->create([
        'name' => 'Main Menu',
        'handle' => 'main-menu',
        'items' => [
            [
                'label' => 'Home',
                'type' => 'external-link',
                'data' => [
                    'url' => '/',
                    'target' => '',
                ],
                'children' => [],
            ],
        ],
    ]);

    $this->get('/test-navigation/main-menu')
        ->assertOk()
        ->assertSeeText('Main Menu')
        ->assertSeeText('Home');
});

it('returns not found when navigation handle does not exist', function () {
    registerNavigationFrontendTestRoute();

    $this->get('/test-navigation/does-not-exist')
        ->assertNotFound();
});
