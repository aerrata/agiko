<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(10)->create();
        $posts = \App\Models\Post::factory(20)->create();

        foreach ($posts as $post) {
            $post->addMediaFromUrl('https://source.unsplash.com/random')->toMediaCollection();
        }

        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@domain.com',
        ]);
    }
}
