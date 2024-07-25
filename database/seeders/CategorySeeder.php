<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
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
