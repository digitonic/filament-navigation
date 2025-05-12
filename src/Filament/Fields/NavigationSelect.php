<?php

namespace Digitonic\FilamentNavigation\Filament\Fields;

use Digitonic\FilamentNavigation\Models\Navigation;
use Filament\Forms\Components\Select;

class NavigationSelect extends Select
{
    protected string $optionValueProperty = 'id';

    protected function setUp(): void
    {
        parent::setUp();

        $this->options(function (NavigationSelect $component) {
            return Navigation::pluck('name', $component->getOptionValueProperty());
        });
    }

    public function getOptionValueProperty(): string
    {
        return $this->optionValueProperty;
    }
}
