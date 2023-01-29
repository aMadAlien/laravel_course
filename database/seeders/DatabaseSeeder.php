<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        $work = Category::create([
            'name' => 'work',
            'slug' => 'work'
        ]);

        $hobbies = Category::create([
            'name' => 'hobbies',
            'slug' => 'hobbies'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'first',
            'slug' => 'my_first_post',
            'excerpt' => 'first lorem lorem',
            'body' => 'body first body first body first body first body first body first body first v body firstv ',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'second',
            'slug' => 'my_second_post',
            'excerpt' => 'second lorem lorem',
            'body' => 'body second body first body first body first body first body first body first v body firstv ',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'title' => 'third',
            'slug' => 'my_third_post',
            'excerpt' => 'third lorem lorem',
            'body' => 'body third body first body first body first body first body first body first v body firstv ',
        ]);
    }
}
