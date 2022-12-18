<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SellerSeeder extends Seeder
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
            DB::table('sellers')->insert([
                'name' => $faker->name(),
                'address' => $faker->address(),
                'gender' => $faker->word(),
                'no_hp' => $faker->randomNumber(12),
                'status' => $faker->name()
            ]);
        }
    }
}
