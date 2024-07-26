<?php

namespace Database\Seeders;

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


        $quizTypes = [
            0 => 'Trắc nghiệm',       // Multiple choice
            1 => 'Điền vào chỗ trống', // Fill in the blanks
            2 => 'Kết hợp',            // Combination
        ];

        $quizLevels = [
            0 => 'Cơ bản',    // Basic
            1 => 'Trung bình', // Intermediate
            2 => 'Nâng cao',   // Advanced
        ];

        $quizDurations = [
            'Cơ bản' => 15,
            'Trung bình' => 30,
            'Nâng cao' => 45,
        ];

        // Lấy tất cả các danh mục
        $categories = Category::all();

        // Hàm tạo chủ đề quiz ngẫu nhiên cho một danh mục cụ thể
        function createRandomQuizTopics($category, $types, $levels, $durations)
        {
            $quizTopics = [];

            // Tạo khoảng 5 chủ đề quiz ngẫu nhiên cho mỗi loại và cấp độ
            foreach ($types as $typeKey => $typeName) {
                foreach ($levels as $levelKey => $levelName) {
                    $duration = $durations[$levelName];

                    // Số lượng quiz để tạo ngẫu nhiên (khoảng 5)
                    $numQuizzes = rand(4, 6); // Điều chỉnh phạm vi theo nhu cầu

                    for ($i = 0; $i < $numQuizzes; $i++) {
                        // Tạo tiêu đề và mô tả ngẫu nhiên
                        $title = "{$category->title} - {$typeName} {$levelName} Quiz " . ($i + 1);
                        $description = "Cuộc thi này kiểm tra kiến thức của bạn về {$category->title} ở cấp độ {$levelName}.";

                        $quizTopics[] = [
                            'category_id' => $category->id,
                            'title' => $title,
                            'description' => $description,
                            'duration' => $duration,
                            'type' => $typeKey,
                            'level' => $levelKey,
                            'certification' => false, // Điều chỉnh nếu cần thiết
                            'created_at' => now()->format('Y-m-d H:i:s'),
                            'updated_at' => now()->format('Y-m-d H:i:s'),
                        ];
                    }
                }
            }

            return $quizTopics;
        }

        // Thêm các chủ đề quiz ngẫu nhiên cho mỗi danh mục
        foreach ($categories as $category) {
            $randomQuizTopics = createRandomQuizTopics($category, $quizTypes, $quizLevels, $quizDurations);

            // Thêm vào cơ sở dữ liệu
            if (!empty($randomQuizTopics)) {
                Quiz::insert($randomQuizTopics);
            }
        }
    }
}
