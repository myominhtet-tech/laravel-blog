<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Article::factory(20)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\Comment::factory(40)->create();

        \App\Models\User::factory()->create(
            [
                'name' => 'myo',
                'email' => 'myo@gmail.com',
            ]
        );
        \App\Models\User::factory()->create(
            [
                'name' => 'min',
                'email' => 'min@gmail.com',
            ]
        );
    }
}
