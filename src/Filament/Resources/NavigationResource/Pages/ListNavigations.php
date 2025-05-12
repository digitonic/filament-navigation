<?php

namespace Digitonic\FilamentNavigation\Filament\Resources\NavigationResource\Pages;

use Digitonic\FilamentNavigation\FilamentNavigation;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNavigations extends ListRecords
{
    public static function getResource(): string
    {
        return FilamentNavigation::get()->getResource();
    }

    protected function getActions(): array
    {
        return [
            CreateAction::make('create'),
        ];
    }
}
