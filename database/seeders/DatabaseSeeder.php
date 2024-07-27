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
            'name' => 'Hồ Minh Đạt',
            'email' => 'hodat2092004@gmail.com',
            'email_verified_at' => now(),
            'password' => password_hash('123456', PASSWORD_BCRYPT),
            'is_admin' => 1,
            'remember_token' => null,
        ]);

        $this->call(CategorySeeder::class);
        $this->call(QuizSeeder::class);
        $this->call(QuestionAndEssaySeeder::class);
    }
}
