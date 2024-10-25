<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Travels;
use App\Models\Flights;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TravelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'travel_id' => Travels::all()->random()->travel_id,
            'evaluation' => fake()->word(),
            'flight_id' => Flights::all()->random()->flight_id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
