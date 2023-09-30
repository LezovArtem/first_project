<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Category::factory(5)->create();
        $tags = \App\Models\Tag::factory(10)->create();
        $posts = \App\Models\Post::factory(500)->create();

        foreach ($posts as $post){
            $tagIds = $tags->random(2)->pluck('id');
            $post->tags()->attach($tagIds);
        }
    }
}
