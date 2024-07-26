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
            ['title' => 'HTML', 'image' => 'html.png', 'status' => 1, 'created_at' => now()->format('Y-m-d H:i:s')],//1-10
            ['title' => 'CSS', 'image' => 'css.png', 'status' => 1, 'created_at' => now()->format('Y-m-d H:i:s')],//11-20
            ['title' => 'JavaScript', 'image' => 'js.png', 'status' => 1, 'created_at' => now()->format('Y-m-d H:i:s')],//21-30
            ['title' => 'PHP', 'image' => 'php.png', 'status' => 1, 'created_at' => now()->format('Y-m-d H:i:s')],//31-40
            ['title' => 'Angular', 'image' => 'angular.png', 'status' => 1, 'created_at' => now()->format('Y-m-d H:i:s')],//41-50
            ['title' => 'Laravel', 'image' => 'laravel.png', 'status' => 1, 'created_at' => now()->format('Y-m-d H:i:s')],//51-60
            ['title' => 'React', 'image' => 'react.png', 'status' => 1, 'created_at' => now()->format('Y-m-d H:i:s')],//61-70
        ]);
    }
}
