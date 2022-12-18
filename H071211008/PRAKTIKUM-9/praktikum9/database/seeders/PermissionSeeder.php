<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PermissionSeeder extends Seeder
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
            DB::table('permissions')->insert([
                'name' => $faker->name(),
                'description' => $faker->name(),
                'status' => $faker->name()
            ]);
        }
    }
}
