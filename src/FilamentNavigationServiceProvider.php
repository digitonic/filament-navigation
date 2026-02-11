<?php

namespace Digitonic\FilamentNavigation;

use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentNavigationServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-navigation';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom([
            __DIR__.'/../database/migrations',
        ]);

        $this->loadViewsFrom([
            __DIR__.'/../resources/views',
        ], 'filament-navigation');

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'filament-navigation');

        FilamentAsset::register([
            Css::make('filament-navigation-styles', __DIR__.'/../resources/dist/plugin.css'),
            Js::make('filament-navigation-scripts', __DIR__.'/../resources/dist/plugin.js'),
        ], 'filament-navigation');
    }
}
