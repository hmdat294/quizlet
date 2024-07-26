<?php

namespace Database\Seeders;

use Illuminate\Support\Arr;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Quiz;
use App\Models\Question;


class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = Category::all();
        $quizTypes = [
            0 => 'Trắc nghiệm',       // Multiple choice
            1 => 'Điền vào chỗ trống', // Fill in the blanks
            2 => 'Kết hợp',            // Combination
        ];

        $quizzes = [];

        foreach ($categories as $index => $category) {
            $categoryId = $index + 1;

            foreach ($quizTypes as $type => $typeLabel) {
                $quizzes[] = [
                    'category_id' => $categoryId,
                    'title' => "{$category['title']} Quiz - {$typeLabel} ",
                    'description' => "Đây là bài quiz {$typeLabel} về chủ đề: {$category->title}.",
                    'duration' => Arr::random([15, 20, 25, 30, 35, 40, 45]),
                    'type' => $type,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        Quiz::insert($quizzes);
    }
}
