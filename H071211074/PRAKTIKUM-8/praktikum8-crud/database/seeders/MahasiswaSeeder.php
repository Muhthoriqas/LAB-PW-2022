<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('mahasiswas')->insert([
        //     'nim' => 'H071211074',
        //     'nama' => 'Wd. Ananda Lesmono',
        //     'alamat' => 'Baruga',
        //     'fakultas' => 'saintek'
        // ]);

        $faker = Faker::create('id_ID');
        for ($i=1; $i <= 100; $i++) {
            DB::table('mahasiswas')->insert([
                'nim' => $faker->randomNumber(8),
                'nama' => $faker->name(),
                'alamat' => $faker->address(),
                'fakultas' => $faker->word()
            ]);
        }
    }
}
