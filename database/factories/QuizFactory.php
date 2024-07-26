<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quiz>
 */
class QuizFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'category_id' => Category::inRandomOrder()->first()->id,
            // 'title' => $this->faker->sentence,
            // 'duration' => $this->faker->numberBetween(10, 120),
            // 'type' => $this->faker->randomElement(['Trắc nghiệm', 'Điền vào chỗ trống', ['Kết hợp']]),
            // 'level' => $this->faker->randomElement(['Cơ bản', 'Trung bình', 'Nâng cao']),
            // 'description' => $this->faker->paragraph,
        ];
    }
}
