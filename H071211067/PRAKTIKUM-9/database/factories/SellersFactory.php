<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\seller>
 */
class SellersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'Address' => fake()->address(),
            'Gender' => fake()->randomElement(['Male', 'Female']),
            'no_hp' => fake()->regexify('[0-9]{12}'),
            'status' => fake()->randomElement(['Active', 'No-Active']),
        ];
    }
}
