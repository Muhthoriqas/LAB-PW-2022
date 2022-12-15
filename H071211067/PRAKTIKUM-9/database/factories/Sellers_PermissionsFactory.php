<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\seller_permission>
 */
class sellers_permissionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sellers_id' => fake()->regexify('[1-9]{1}'),
            'permissions_id' => fake()->regexify('[1-9]{1}'),
        ];
    }
}
