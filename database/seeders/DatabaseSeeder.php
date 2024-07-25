<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use \App\Models\User;
use \App\Models\Question;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Question::factory()->count(300)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => password_hash('123456',PASSWORD_BCRYPT),
            'is_admin' => 1,
            'remember_token' => null,
        ]);

        Category::insert([
            ['title' => 'HTML', 'image' => 'html.png', 'status' => 1],
            ['title' => 'CSS', 'image' => 'css.png', 'status' => 1],
            ['title' => 'JavaScript', 'image' => 'js.png', 'status' => 1],
            ['title' => 'PHP', 'image' => 'php.png', 'status' => 1],
            ['title' => 'Angular', 'image' => 'angular.png', 'status' => 1],
            ['title' => 'Laravel', 'image' => 'laravel.png', 'status' => 1],
            ['title' => 'React', 'image' => 'react.png', 'status' => 1],
        ]);
    }
}
