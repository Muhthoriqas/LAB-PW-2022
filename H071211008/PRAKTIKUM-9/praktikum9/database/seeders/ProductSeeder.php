<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create('id_ID');
        for ($si=1; $i <= 100; $i++){
            DB::table('products')->insert([
                'name' => $faker->name(),
                'seller_id' => $faker->Number(),
                'category_id' => $faker->Number(),
                'price' => $faker->randomNumber(12),
                'status' => $faker->name()
            ]);
        }
    }
}
