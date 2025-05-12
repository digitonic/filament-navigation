<?php

namespace Digitonic\FilamentNavigation\Tests;

use Digitonic\FilamentNavigation\FilamentNavigation;
use Filament\Panel;
use Filament\PanelProvider;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->plugin(FilamentNavigation::make());
    }
}
