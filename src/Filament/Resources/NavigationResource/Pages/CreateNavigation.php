<?php

namespace Digitonic\FilamentNavigation\Filament\Resources\NavigationResource\Pages;

use Digitonic\FilamentNavigation\Filament\Resources\NavigationResource\Pages\Concerns\HandlesNavigationBuilder;
use Digitonic\FilamentNavigation\FilamentNavigation;
use Filament\Resources\Pages\CreateRecord;

class CreateNavigation extends CreateRecord
{
    use HandlesNavigationBuilder;

    public static function getResource(): string
    {
        return FilamentNavigation::get()->getResource();
    }
}
