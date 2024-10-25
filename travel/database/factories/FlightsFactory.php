<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Flights;
use App\Models\Airlines;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flights>
 */
class FlightsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'flight_id' => Flights::all()->random()->flight_id,
            'date' => fake()->date(),
            'airline_id' => Airlines::all()->random()->airline_id,
            'limit' => fake()->randomDigit()
        ];
    }
}
