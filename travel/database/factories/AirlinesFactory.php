<?php

namespace Database\Factories;

use App\Models\Airlines;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Airlines>
 */
class AirlinesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'airline_id' => Airlines::all()->random()->airline_id,
            'name' => fake('hu_HU')->name(),
            'country'=> fake('hu_HU')->country()
        ];
    }
}
