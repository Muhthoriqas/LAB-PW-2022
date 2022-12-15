<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\M_Crud;

class M_CrudFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = M_Crud::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(10),
            'category' =>$this->faker->randomElement(['Food', 'Beverage', 'Dessert']),
            'price' =>$this->faker->unique()->regexify('[0-9]{5}') 
        ];
    }
}
