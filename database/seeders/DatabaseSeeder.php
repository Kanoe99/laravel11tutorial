<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Employer;
use App\Models\Job;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Comment::factory(10)->create();
        Employer::factory(10)->create();
        Post::factory(10)->create();
        Tag::factory(10)->create();
        User::factory(10)->create();

        // User::factory()->create([
        //     'name' => fake()->firstName(),
        //     'surname' => fake()->lastName(),
        //     'email' => fake()->email(),
        // ]);
    }
}
