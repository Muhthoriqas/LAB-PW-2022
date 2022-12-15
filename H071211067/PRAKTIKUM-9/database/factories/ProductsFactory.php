<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class ProductsFactory extends Factory
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
            'seller_id' => fake()->regexify('[1-9]{1}'),
            'category_id' => fake()->regexify('[1-9]{1}'),
            'price' => fake()->numberBetween($min = 5000, $max = 50000),
            'status' => fake()->randomElement(['Tidak ada', 'Ada']),
        ];
    }
}
