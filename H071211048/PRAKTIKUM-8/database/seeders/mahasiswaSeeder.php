<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;


class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i < 1001; $i++) {
            DB::table('mahasiswas')->insert([
                'nama' => $faker->name,
                'nim' => $faker->randomNumber(),
                'alamat' => $faker->address,
                'fakultas' => $faker->randomElement(['saintek']),
            ]);
        }
    }
}
