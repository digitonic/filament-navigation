<?php

namespace Digitonic\FilamentNavigation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Digitonic\FilamentNavigation\Models\Navigation>
 */
class NavigationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => fake()->name(),
            'handle' => Str::slug(fake()->name()),
            'items' => [],
        ];
    }
}
