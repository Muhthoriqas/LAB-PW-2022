<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Post::factory(10)->create();

        Category::create ([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create ([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
    }
}
