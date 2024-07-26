<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Essay;
use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionAndEssaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $questions_laravel = [
            [
                'question' => 'Laravel là gì?',
                'option_1' => 'Một framework PHP',
                'option_2' => 'Một ngôn ngữ lập trình',
                'option_3' => 'Một hệ quản trị cơ sở dữ liệu',
                'option_4' => 'Một công cụ thiết kế giao diện',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để tạo một dự án Laravel mới?',
                'option_1' => 'laravel new project',
                'option_2' => 'php artisan new project',
                'option_3' => 'composer create-project --prefer-dist laravel/laravel project',
                'option_4' => 'npm create laravel project',
                'answer' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'File cấu hình chính của Laravel nằm ở đâu?',
                'option_1' => 'config/app.php',
                'option_2' => 'config/main.php',
                'option_3' => 'app/config.php',
                'option_4' => 'app/main.php',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để chạy máy chủ phát triển trong Laravel?',
                'option_1' => 'php artisan serve',
                'option_2' => 'php artisan start',
                'option_3' => 'php serve',
                'option_4' => 'php start',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Middleware trong Laravel được sử dụng để làm gì?',
                'option_1' => 'Quản lý các yêu cầu HTTP',
                'option_2' => 'Quản lý cơ sở dữ liệu',
                'option_3' => 'Quản lý các phiên làm việc',
                'option_4' => 'Quản lý các tệp tin',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để tạo một controller mới trong Laravel?',
                'option_1' => 'php artisan make:controller',
                'option_2' => 'php artisan create:controller',
                'option_3' => 'php artisan generate:controller',
                'option_4' => 'php artisan new:controller',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Blade là gì trong Laravel?',
                'option_1' => 'Một công cụ quản lý cơ sở dữ liệu',
                'option_2' => 'Một công cụ tạo giao diện',
                'option_3' => 'Một công cụ quản lý phiên làm việc',
                'option_4' => 'Một công cụ quản lý tệp tin',
                'answer' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để tạo một migration mới trong Laravel?',
                'option_1' => 'php artisan make:migration',
                'option_2' => 'php artisan create:migration',
                'option_3' => 'php artisan generate:migration',
                'option_4' => 'php artisan new:migration',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Eloquent ORM trong Laravel được sử dụng để làm gì?',
                'option_1' => 'Quản lý các yêu cầu HTTP',
                'option_2' => 'Quản lý cơ sở dữ liệu',
                'option_3' => 'Quản lý các phiên làm việc',
                'option_4' => 'Quản lý các tệp tin',
                'answer' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để chạy các migration trong Laravel?',
                'option_1' => 'php artisan migrate',
                'option_2' => 'php artisan run:migrations',
                'option_3' => 'php artisan execute:migrations',
                'option_4' => 'php artisan start:migrations',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để tạo một model mới trong Laravel?',
                'option_1' => 'php artisan make:model',
                'option_2' => 'php artisan create:model',
                'option_3' => 'php artisan generate:model',
                'option_4' => 'php artisan new:model',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để tạo một seeder mới trong Laravel?',
                'option_1' => 'php artisan make:seeder',
                'option_2' => 'php artisan create:seeder',
                'option_3' => 'php artisan generate:seeder',
                'option_4' => 'php artisan new:seeder',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để chạy các seeder trong Laravel?',
                'option_1' => 'php artisan db:seed',
                'option_2' => 'php artisan run:seeder',
                'option_3' => 'php artisan execute:seeder',
                'option_4' => 'php artisan start:seeder',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để tạo một request mới trong Laravel?',
                'option_1' => 'php artisan make:request',
                'option_2' => 'php artisan create:request',
                'option_3' => 'php artisan generate:request',
                'option_4' => 'php artisan new:request',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để tạo một policy mới trong Laravel?',
                'option_1' => 'php artisan make:policy',
                'option_2' => 'php artisan create:policy',
                'option_3' => 'php artisan generate:policy',
                'option_4' => 'php artisan new:policy',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để tạo một event mới trong Laravel?',
                'option_1' => 'php artisan make:event',
                'option_2' => 'php artisan create:event',
                'option_3' => 'php artisan generate:event',
                'option_4' => 'php artisan new:event',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một listener mới trong Laravel?',
                'option_1' => 'php artisan make:listener',
                'option_2' => 'php artisan create:listener',
                'option_3' => 'php artisan generate:listener',
                'option_4' => 'php artisan new:listener',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một job mới trong Laravel?',
                'option_1' => 'php artisan make:job',
                'option_2' => 'php artisan create:job',
                'option_3' => 'php artisan generate:job',
                'option_4' => 'php artisan new:job',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một notification mới trong Laravel?',
                'option_1' => 'php artisan make:notification',
                'option_2' => 'php artisan create:notification',
                'option_3' => 'php artisan generate:notification',
                'option_4' => 'php artisan new:notification',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một mail mới trong Laravel?',
                'option_1' => 'php artisan make:mail',
                'option_2' => 'php artisan create:mail',
                'option_3' => 'php artisan generate:mail',
                'option_4' => 'php artisan new:mail',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một middleware mới trong Laravel?',
                'option_1' => 'php artisan make:middleware',
                'option_2' => 'php artisan create:middleware',
                'option_3' => 'php artisan generate:middleware',
                'option_4' => 'php artisan new:middleware',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một command mới trong Laravel?',
                'option_1' => 'php artisan make:command',
                'option_2' => 'php artisan create:command',
                'option_3' => 'php artisan generate:command',
                'option_4' => 'php artisan new:command',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một provider mới trong Laravel?',
                'option_1' => 'php artisan make:provider',
                'option_2' => 'php artisan create:provider',
                'option_3' => 'php artisan generate:provider',
                'option_4' => 'php artisan new:provider',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một test mới trong Laravel?',
                'option_1' => 'php artisan make:test',
                'option_2' => 'php artisan create:test',
                'option_3' => 'php artisan generate:test',
                'option_4' => 'php artisan new:test',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một resource mới trong Laravel?',
                'option_1' => 'php artisan make:resource',
                'option_2' => 'php artisan create:resource',
                'option_3' => 'php artisan generate:resource',
                'option_4' => 'php artisan new:resource',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một observer mới trong Laravel?',
                'option_1' => 'php artisan make:observer',
                'option_2' => 'php artisan create:observer',
                'option_3' => 'php artisan generate:observer',
                'option_4' => 'php artisan new:observer',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một rule mới trong Laravel?',
                'option_1' => 'php artisan make:rule',
                'option_2' => 'php artisan create:rule',
                'option_3' => 'php artisan generate:rule',
                'option_4' => 'php artisan new:rule',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một exception mới trong Laravel?',
                'option_1' => 'php artisan make:exception',
                'option_2' => 'php artisan create:exception',
                'option_3' => 'php artisan generate:exception',
                'option_4' => 'php artisan new:exception',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một notification mới trong Laravel?',
                'option_1' => 'php artisan make:notification',
                'option_2' => 'php artisan create:notification',
                'option_3' => 'php artisan generate:notification',
                'option_4' => 'php artisan new:notification',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một mail mới trong Laravel?',
                'option_1' => 'php artisan make:mail',
                'option_2' => 'php artisan create:mail',
                'option_3' => 'php artisan generate:mail',
                'option_4' => 'php artisan new:mail',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một job mới trong Laravel?',
                'option_1' => 'php artisan make:job',
                'option_2' => 'php artisan create:job',
                'option_3' => 'php artisan generate:job',
                'option_4' => 'php artisan new:job',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một listener mới trong Laravel?',
                'option_1' => 'php artisan make:listener',
                'option_2' => 'php artisan create:listener',
                'option_3' => 'php artisan generate:listener',
                'option_4' => 'php artisan new:listener',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một event mới trong Laravel?',
                'option_1' => 'php artisan make:event',
                'option_2' => 'php artisan create:event',
                'option_3' => 'php artisan generate:event',
                'option_4' => 'php artisan new:event',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một policy mới trong Laravel?',
                'option_1' => 'php artisan make:policy',
                'option_2' => 'php artisan create:policy',
                'option_3' => 'php artisan generate:policy',
                'option_4' => 'php artisan new:policy',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một request mới trong Laravel?',
                'option_1' => 'php artisan make:request',
                'option_2' => 'php artisan create:request',
                'option_3' => 'php artisan generate:request',
                'option_4' => 'php artisan new:request',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một seeder mới trong Laravel?',
                'option_1' => 'php artisan make:seeder',
                'option_2' => 'php artisan create:seeder',
                'option_3' => 'php artisan generate:seeder',
                'option_4' => 'php artisan new:seeder',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một model mới trong Laravel?',
                'option_1' => 'php artisan make:model',
                'option_2' => 'php artisan create:model',
                'option_3' => 'php artisan generate:model',
                'option_4' => 'php artisan new:model',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để chạy các migration trong Laravel?',
                'option_1' => 'php artisan migrate',
                'option_2' => 'php artisan run:migrations',
                'option_3' => 'php artisan execute:migrations',
                'option_4' => 'php artisan start:migrations',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một migration mới trong Laravel?',
                'option_1' => 'php artisan make:migration',
                'option_2' => 'php artisan create:migration',
                'option_3' => 'php artisan generate:migration',
                'option_4' => 'php artisan new:migration',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một controller resource trong Laravel?',
                'option_1' => 'php artisan make:controller --resource',
                'option_2' => 'php artisan create:controller --resource',
                'option_3' => 'php artisan generate:controller --resource',
                'option_4' => 'php artisan new:controller --resource',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một observer mới trong Laravel?',
                'option_1' => 'php artisan make:observer',
                'option_2' => 'php artisan create:observer',
                'option_3' => 'php artisan generate:observer',
                'option_4' => 'php artisan new:observer',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một rule mới trong Laravel?',
                'option_1' => 'php artisan make:rule',
                'option_2' => 'php artisan create:rule',
                'option_3' => 'php artisan generate:rule',
                'option_4' => 'php artisan new:rule',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một exception mới trong Laravel?',
                'option_1' => 'php artisan make:exception',
                'option_2' => 'php artisan create:exception',
                'option_3' => 'php artisan generate:exception',
                'option_4' => 'php artisan new:exception',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một notification mới trong Laravel?',
                'option_1' => 'php artisan make:notification',
                'option_2' => 'php artisan create:notification',
                'option_3' => 'php artisan generate:notification',
                'option_4' => 'php artisan new:notification',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một mail mới trong Laravel?',
                'option_1' => 'php artisan make:mail',
                'option_2' => 'php artisan create:mail',
                'option_3' => 'php artisan generate:mail',
                'option_4' => 'php artisan new:mail',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một job mới trong Laravel?',
                'option_1' => 'php artisan make:job',
                'option_2' => 'php artisan create:job',
                'option_3' => 'php artisan generate:job',
                'option_4' => 'php artisan new:job',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một listener mới trong Laravel?',
                'option_1' => 'php artisan make:listener',
                'option_2' => 'php artisan create:listener',
                'option_3' => 'php artisan generate:listener',
                'option_4' => 'php artisan new:listener',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một event mới trong Laravel?',
                'option_1' => 'php artisan make:event',
                'option_2' => 'php artisan create:event',
                'option_3' => 'php artisan generate:event',
                'option_4' => 'php artisan new:event',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một policy mới trong Laravel?',
                'option_1' => 'php artisan make:policy',
                'option_2' => 'php artisan create:policy',
                'option_3' => 'php artisan generate:policy',
                'option_4' => 'php artisan new:policy',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một request mới trong Laravel?',
                'option_1' => 'php artisan make:request',
                'option_2' => 'php artisan create:request',
                'option_3' => 'php artisan generate:request',
                'option_4' => 'php artisan new:request',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một seeder mới trong Laravel?',
                'option_1' => 'php artisan make:seeder',
                'option_2' => 'php artisan create:seeder',
                'option_3' => 'php artisan generate:seeder',
                'option_4' => 'php artisan new:seeder',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một model mới trong Laravel?',
                'option_1' => 'php artisan make:model',
                'option_2' => 'php artisan create:model',
                'option_3' => 'php artisan generate:model',
                'option_4' => 'php artisan new:model',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để chạy các migration trong Laravel?',
                'option_1' => 'php artisan migrate',
                'option_2' => 'php artisan run:migrations',
                'option_3' => 'php artisan execute:migrations',
                'option_4' => 'php artisan start:migrations',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một migration mới trong Laravel?',
                'option_1' => 'php artisan make:migration',
                'option_2' => 'php artisan create:migration',
                'option_3' => 'php artisan generate:migration',
                'option_4' => 'php artisan new:migration',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một factory mới trong Laravel?',
                'option_1' => 'php artisan make:factory',
                'option_2' => 'php artisan create:factory',
                'option_3' => 'php artisan generate:factory',
                'option_4' => 'php artisan new:factory',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một middleware mới trong Laravel?',
                'option_1' => 'php artisan make:middleware',
                'option_2' => 'php artisan create:middleware',
                'option_3' => 'php artisan generate:middleware',
                'option_4' => 'php artisan new:middleware',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một command mới trong Laravel?',
                'option_1' => 'php artisan make:command',
                'option_2' => 'php artisan create:command',
                'option_3' => 'php artisan generate:command',
                'option_4' => 'php artisan new:command',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'question' => 'Lệnh nào được sử dụng để tạo một provider mới trong Laravel?',
                'option_1' => 'php artisan make:provider',
                'option_2' => 'php artisan create:provider',
                'option_3' => 'php artisan generate:provider',
                'option_4' => 'php artisan new:provider',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để tạo một test mới trong Laravel?',
                'option_1' => 'php artisan make:test',
                'option_2' => 'php artisan create:test',
                'option_3' => 'php artisan generate:test',
                'option_4' => 'php artisan new:test',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        $questions_react = [
            [
                'question' => 'React là gì?',
                'option_1' => 'Một framework JavaScript',
                'option_2' => 'Một thư viện JavaScript',
                'option_3' => 'Một ngôn ngữ lập trình',
                'option_4' => 'Một hệ quản trị cơ sở dữ liệu',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để tạo một dự án React mới bằng Create React App?',
                'option_1' => 'react new project',
                'option_2' => 'npm create react-app project',
                'option_3' => 'npx create-react-app project',
                'option_4' => 'npm init react project',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Component trong React là gì?',
                'option_1' => 'Một phần của cơ sở dữ liệu',
                'option_2' => 'Một phần của hệ thống quản lý phiên làm việc',
                'option_3' => 'Một phần của giao diện người dùng',
                'option_4' => 'Một phần của hệ thống quản lý tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'State trong React được sử dụng để làm gì?',
                'option_1' => 'Quản lý các yêu cầu HTTP',
                'option_2' => 'Quản lý dữ liệu động trong component',
                'option_3' => 'Quản lý các phiên làm việc',
                'option_4' => 'Quản lý các tệp tin',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Props trong React được sử dụng để làm gì?',
                'option_1' => 'Quản lý các yêu cầu HTTP',
                'option_2' => 'Quản lý cơ sở dữ liệu',
                'option_3' => 'Truyền dữ liệu giữa các component',
                'option_4' => 'Quản lý các tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để chạy máy chủ phát triển trong React?',
                'option_1' => 'react start',
                'option_2' => 'npm start react',
                'option_3' => 'npm start',
                'option_4' => 'npx start react',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'JSX là gì trong React?',
                'option_1' => 'Một ngôn ngữ lập trình',
                'option_2' => 'Một hệ quản trị cơ sở dữ liệu',
                'option_3' => 'Một cú pháp mở rộng của JavaScript',
                'option_4' => 'Một công cụ quản lý phiên làm việc',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để cài đặt React Router?',
                'option_1' => 'npm install react-router',
                'option_2' => 'npm install react-router-dom',
                'option_3' => 'npm install react-router-redux',
                'option_4' => 'npm install react-router-native',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'useState là gì trong React?',
                'option_1' => 'Một hàm để quản lý các yêu cầu HTTP',
                'option_2' => 'Một hàm để quản lý cơ sở dữ liệu',
                'option_3' => 'Một hook để quản lý state trong functional component',
                'option_4' => 'Một hook để quản lý các tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'useEffect là gì trong React?',
                'option_1' => 'Một hàm để quản lý các yêu cầu HTTP',
                'option_2' => 'Một hàm để quản lý cơ sở dữ liệu',
                'option_3' => 'Một hook để thực hiện các side effect trong functional component',
                'option_4' => 'Một hook để quản lý các tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Component nào được sử dụng để định tuyến trong React Router?',
                'option_1' => '<Route>',
                'option_2' => '<Link>',
                'option_3' => '<BrowserRouter>',
                'option_4' => '<Switch>',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Context API trong React được sử dụng để làm gì?',
                'option_1' => 'Quản lý các yêu cầu HTTP',
                'option_2' => 'Quản lý cơ sở dữ liệu',
                'option_3' => 'Quản lý state toàn cục trong ứng dụng',
                'option_4' => 'Quản lý các tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để cài đặt Redux trong React?',
                'option_1' => 'npm install redux',
                'option_2' => 'npm install @reduxjs/toolkit',
                'option_3' => 'npm install react-redux',
                'option_4' => 'npm install redux-thunk',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'useReducer là gì trong React?',
                'option_1' => 'Một hàm để quản lý các yêu cầu HTTP',
                'option_2' => 'Một hàm để quản lý cơ sở dữ liệu',
                'option_3' => 'Một hook để quản lý state phức tạp trong functional component',
                'option_4' => 'Một hook để quản lý các tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để cài đặt Material-UI trong React?',
                'option_1' => 'npm install material-ui',
                'option_2' => 'npm install @mui/material',
                'option_3' => 'npm install react-material-ui',
                'option_4' => 'npm install material-ui-react',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'useRef là gì trong React?',
                'option_1' => 'Một hàm để quản lý các yêu cầu HTTP',
                'option_2' => 'Một hàm để quản lý cơ sở dữ liệu',
                'option_3' => 'Một hook để tạo tham chiếu đến DOM element',
                'option_4' => 'Một hook để quản lý các tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'useMemo là gì trong React?',
                'option_1' => 'Một hàm để quản lý các yêu cầu HTTP',
                'option_2' => 'Một hàm để quản lý cơ sở dữ liệu',
                'option_3' => 'Một hook để ghi nhớ giá trị tính toán',
                'option_4' => 'Một hook để quản lý các tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'useCallback là gì trong React?',
                'option_1' => 'Một hàm để quản lý các yêu cầu HTTP',
                'option_2' => 'Một hàm để quản lý cơ sở dữ liệu',
                'option_3' => 'Một hook để ghi nhớ hàm callback',
                'option_4' => 'Một hook để quản lý các tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để cài đặt React Bootstrap?',
                'option_1' => 'npm install react-bootstrap',
                'option_2' => 'npm install react-bootstrap bootstrap',
                'option_3' => 'npm install bootstrap-react',
                'option_4' => 'npm install bootstrap',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để cài đặt Tailwind CSS trong React?',
                'option_1' => 'npm install tailwind',
                'option_2' => 'npm install tailwindcss',
                'option_3' => 'npm install -D tailwindcss',
                'option_4' => 'npm install tailwind-react',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để cài đặt React Testing Library?',
                'option_1' => 'npm install react-testing-library',
                'option_2' => 'npm install @testing-library/react',
                'option_3' => 'npm install react-test-library',
                'option_4' => 'npm install testing-library-react',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'useContext là gì trong React?',
                'option_1' => 'Một hàm để quản lý các yêu cầu HTTP',
                'option_2' => 'Một hàm để quản lý cơ sở dữ liệu',
                'option_3' => 'Một hook để sử dụng context trong functional component',
                'option_4' => 'Một hook để quản lý các tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để cài đặt Axios trong React?',
                'option_1' => 'npm install axios-react',
                'option_2' => 'npm install react-axios',
                'option_3' => 'npm install axios',
                'option_4' => 'npm install axios-js',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để cài đặt Styled Components trong React?',
                'option_1' => 'npm install styled-components-react',
                'option_2' => 'npm install styled-components',
                'option_3' => 'npm install react-styled-components',
                'option_4' => 'npm install styled-components-js',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'useLayoutEffect là gì trong React?',
                'option_1' => 'Một hàm để quản lý các yêu cầu HTTP',
                'option_2' => 'Một hàm để quản lý cơ sở dữ liệu',
                'option_3' => 'Một hook để thực hiện các side effect đồng bộ sau khi DOM cập nhật',
                'option_4' => 'Một hook để quản lý các tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để cài đặt React Helmet?',
                'option_1' => 'npm install react-helmet-js',
                'option_2' => 'npm install helmet-react',
                'option_3' => 'npm install react-helmet',
                'option_4' => 'npm install helmet',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'useImperativeHandle là gì trong React?',
                'option_1' => 'Một hàm để quản lý các yêu cầu HTTP',
                'option_2' => 'Một hàm để quản lý cơ sở dữ liệu',
                'option_3' => 'Một hook để tùy chỉnh giá trị ref trong functional component',
                'option_4' => 'Một hook để quản lý các tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để cài đặt React Query?',
                'option_1' => 'npm install react-query-js',
                'option_2' => 'npm install query-react',
                'option_3' => 'npm install react-query',
                'option_4' => 'npm install query',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'useTransition là gì trong React?',
                'option_1' => 'Một hàm để quản lý các yêu cầu HTTP',
                'option_2' => 'Một hàm để quản lý cơ sở dữ liệu',
                'option_3' => 'Một hook để quản lý trạng thái chuyển tiếp trong functional component',
                'option_4' => 'Một hook để quản lý các tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để cài đặt React Hook Form?',
                'option_1' => 'npm install react-hook-form-js',
                'option_2' => 'npm install form-react-hook',
                'option_3' => 'npm install react-hook-form',
                'option_4' => 'npm install hook-form',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'useDeferredValue là gì trong React?',
                'option_1' => 'Một hàm để quản lý các yêu cầu HTTP',
                'option_2' => 'Một hàm để quản lý cơ sở dữ liệu',
                'option_3' => 'Một hook để trì hoãn giá trị trong functional component',
                'option_4' => 'Một hook để quản lý các tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để cài đặt React i18next?',
                'option_1' => 'npm install react-i18next-js',
                'option_2' => 'npm install i18next-react',
                'option_3' => 'npm install react-i18next',
                'option_4' => 'npm install i18next',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'useId là gì trong React?',
                'option_1' => 'Một hàm để quản lý các yêu cầu HTTP',
                'option_2' => 'Một hàm để quản lý cơ sở dữ liệu',
                'option_3' => 'Một hook để tạo ID duy nhất trong functional component',
                'option_4' => 'Một hook để quản lý các tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để cài đặt React Spring?',
                'option_1' => 'npm install react-spring-js',
                'option_2' => 'npm install spring-react',
                'option_3' => 'npm install react-spring',
                'option_4' => 'npm install spring',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'useSyncExternalStore là gì trong React?',
                'option_1' => 'Một hàm để quản lý các yêu cầu HTTP',
                'option_2' => 'Một hàm để quản lý cơ sở dữ liệu',
                'option_3' => 'Một hook để đồng bộ hóa state với store bên ngoài trong functional component',
                'option_4' => 'Một hook để quản lý các tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để cài đặt React DnD?',
                'option_1' => 'npm install react-dnd-js',
                'option_2' => 'npm install dnd-react',
                'option_3' => 'npm install react-dnd',
                'option_4' => 'npm install dnd',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'useInsertionEffect là gì trong React?',
                'option_1' => 'Một hàm để quản lý các yêu cầu HTTP',
                'option_2' => 'Một hàm để quản lý cơ sở dữ liệu',
                'option_3' => 'Một hook để chèn các side effect vào DOM trước khi render',
                'option_4' => 'Một hook để quản lý các tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để cài đặt React Three Fiber?',
                'option_1' => 'npm install react-three-fiber-js',
                'option_2' => 'npm install three-fiber-react',
                'option_3' => 'npm install @react-three/fiber',
                'option_4' => 'npm install three-fiber',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'useDebugValue là gì trong React?',
                'option_1' => 'Một hàm để quản lý các yêu cầu HTTP',
                'option_2' => 'Một hàm để quản lý cơ sở dữ liệu',
                'option_3' => 'Một hook để hiển thị giá trị debug trong DevTools',
                'option_4' => 'Một hook để quản lý các tệp tin',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh nào được sử dụng để cài đặt React Native?',
                'option_1' => 'npm install react-native-js',
                'option_2' => 'npm install native-react',
                'option_3' => 'npx react-native init',
                'option_4' => 'npm install react-native',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        $questions_html = [
            [
                'question' => 'Từ HTML là từ viết tắt của từ nào?',
                'option_1' => 'Hyperlinks and Text Markup Language',
                'option_2' => 'Home Tool Markup Language',
                'option_3' => 'Hyper Text Markup Language',
                'option_4' => 'Tất cả đều sai',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Ai (tổ chức nào) tạo ra Web standards?',
                'option_1' => 'The World Wide Web Consortium',
                'option_2' => 'Microsoft',
                'option_3' => 'Netscape',
                'option_4' => 'Tất cả đều sai',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Đâu là tag tạo ra tiêu đề web kích cỡ lớn nhất?',
                'option_1' => '<heading>',
                'option_2' => '<h1>',
                'option_3' => '<h6>',
                'option_4' => '<head>',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Đâu là tag để xuống dòng trong web?',
                'option_1' => '<lb>',
                'option_2' => '<br>',
                'option_3' => '<break>',
                'option_4' => '<newline>',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Đâu là tag tạo ra mầu nền của web?',
                'option_1' => '<body color="yellow">',
                'option_2' => '<body bgcolor="yellow">',
                'option_3' => '<background>yellow</background>',
                'option_4' => '<body background="yellow">',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Đâu là tag tạo ra chữ in đậm?',
                'option_1' => '<b>',
                'option_2' => '<bold>',
                'option_3' => '<bld>',
                'option_4' => '<bb>',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Đâu là tag tạo ra chữ in nghiêng?',
                'option_1' => '<ii>',
                'option_2' => '<italics>',
                'option_3' => '<i>',
                'option_4' => '<italic>',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Đâu là tag tạo ra liên kết (links) trong web?',
                'option_1' => '<a url="http://www.w3schools.com">W3Schools.com</a>',
                'option_2' => '<a>http://www.w3schools.com</a>',
                'option_3' => '<a href="http://www.w3schools.com">W3Schools</a>',
                'option_4' => '<a name="http://www.w3schools.com">W3Schools.com</a>',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Đâu là tag tạo ra liên kết đến email?',
                'option_1' => '<a href="xxx@yyy">',
                'option_2' => '<a href="mailto:xxx@yyy">',
                'option_3' => '<mail>xxx@yyy</mail>',
                'option_4' => '<mail href="xxx@yyy">',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm sao để khi click chuột vào link thì tạo ra cửa sổ mới?',
                'option_1' => '<a href="url" new>',
                'option_2' => '<a href="url" target="new">',
                'option_3' => '<a href="url" target="_blank">',
                'option_4' => '<a href="url" window>',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Đâu là những tag dành cho việc tạo bảng?',
                'option_1' => '<table><tr><td>',
                'option_2' => '<thead><body><tr>',
                'option_3' => '<table><head><tfoot>',
                'option_4' => '<table><tr><tt>',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Đâu là tag căn lề trái cho nội dung 1 ô trong bảng?',
                'option_1' => '<tdleft>',
                'option_2' => '<td valign="left">',
                'option_3' => '<td align="left">',
                'option_4' => '<td leftalign>',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Đâu là tag tạo ra 1 danh sách đứng đầu bằng số?',
                'option_1' => '<ul>',
                'option_2' => '<list>',
                'option_3' => '<ol>',
                'option_4' => '<dl>',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Đâu là tag tạo ra 1 danh sách đứng đầu bởi dấu chấm?',
                'option_1' => '<list>',
                'option_2' => '<ul>',
                'option_3' => '<ol>',
                'option_4' => '<dl>',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Tag nào tạo ra 1 checkbox?',
                'option_1' => '<check>',
                'option_2' => '<input type="check">',
                'option_3' => '<checkbox>',
                'option_4' => '<input type="checkbox">',
                'answer' => 4, // Đáp án đúng là option 4
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Tag nào tạo ra 1 text input field?',
                'option_1' => '<textfield>',
                'option_2' => '<textinput type="text">',
                'option_3' => '<input type="text">',
                'option_4' => '<input type="textfield">',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Tag nào tạo ra 1 drop-down list?',
                'option_1' => '<select>',
                'option_2' => '<list>',
                'option_3' => '<input type="dropdown">',
                'option_4' => '<input type="list">',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Tag nào tạo ra 1 text area?',
                'option_1' => '<input type="textbox">',
                'option_2' => '<textarea>',
                'option_3' => '<input type="textarea">',
                'option_4' => '<text-area>',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Tag nào dùng để chèn 1 hình vào web?',
                'option_1' => '<image src="image.gif">',
                'option_2' => '<img>image.gif</img>',
                'option_3' => '<img src="image.gif">',
                'option_4' => '<img href="image.gif">',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Tag nào dùng để tạo hình nền cho web?',
                'option_1' => '<body background="background.gif">',
                'option_2' => '<background img="background.gif">',
                'option_3' => '<img src="background.gif" background>',
                'option_4' => '<body style="background-image: url(background.gif);">',
                'answer' => 4, // Đáp án đúng là option 4
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề lớn trong HTML?',
                'option_1' => '<title>',
                'option_2' => '<header>',
                'option_3' => '<h1>',
                'option_4' => '<heading>',
                'answer' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để chèn một liên kết đến một trang web khác?',
                'option_1' => '<link>',
                'option_2' => '<a>',
                'option_3' => '<url>',
                'option_4' => '<href>',
                'answer' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để chèn một hình ảnh vào trang web?',
                'option_1' => '<image>',
                'option_2' => '<img>',
                'option_3' => '<picture>',
                'option_4' => '<src>',
                'answer' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để tạo một danh sách không thứ tự?',
                'option_1' => '<ul>',
                'option_2' => '<ol>',
                'option_3' => '<list>',
                'option_4' => '<dl>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để định nghĩa một đoạn văn?',
                'option_1' => '<p>',
                'option_2' => '<paragraph>',
                'option_3' => '<text>',
                'option_4' => '<div>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để tạo một bảng trong HTML?',
                'option_1' => '<table>',
                'option_2' => '<tab>',
                'option_3' => '<grid>',
                'option_4' => '<data>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để định nghĩa một hàng trong bảng?',
                'option_1' => '<tr>',
                'option_2' => '<td>',
                'option_3' => '<th>',
                'option_4' => '<row>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một ô dữ liệu trong bảng?',
                'option_1' => '<td>',
                'option_2' => '<tr>',
                'option_3' => '<th>',
                'option_4' => '<cell>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để tạo một trường nhập liệu trong form?',
                'option_1' => '<input>',
                'option_2' => '<field>',
                'option_3' => '<textarea>',
                'option_4' => '<submit>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để nhóm các phần tử liên quan trong HTML?',
                'option_1' => '<section>',
                'option_2' => '<group>',
                'option_3' => '<container>',
                'option_4' => '<div>',
                'answer' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để tạo một liên kết đến email?',
                'option_1' => '<mail>',
                'option_2' => '<email>',
                'option_3' => '<a>',
                'option_4' => '<link>',
                'answer' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để chèn một video vào trang web?',
                'option_1' => '<movie>',
                'option_2' => '<media>',
                'option_3' => '<video>',
                'option_4' => '<source>',
                'answer' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một nhóm các mục danh sách?',
                'option_1' => '<ol>',
                'option_2' => '<ul>',
                'option_3' => '<dl>',
                'option_4' => '<li>',
                'answer' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để định nghĩa tiêu đề của một danh sách?',
                'option_1' => '<li>',
                'option_2' => '<dt>',
                'option_3' => '<dd>',
                'option_4' => '<header>',
                'answer' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một phần của danh sách?',
                'option_1' => '<li>',
                'option_2' => '<dt>',
                'option_3' => '<dd>',
                'option_4' => '<list>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để chèn một đoạn mã nguồn vào trang web?',
                'option_1' => '<code>',
                'option_2' => '<script>',
                'option_3' => '<pre>',
                'option_4' => '<source>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để định nghĩa một tiêu đề cấp hai trong HTML?',
                'option_1' => '<h1>',
                'option_2' => '<h2>',
                'option_3' => '<heading>',
                'option_4' => '<title>',
                'answer' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một khối văn bản cố định trong HTML?',
                'option_1' => '<block>',
                'option_2' => '<pre>',
                'option_3' => '<fixed>',
                'option_4' => '<code>',
                'answer' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để định nghĩa một nhóm các liên kết?',
                'option_1' => '<nav>',
                'option_2' => '<link>',
                'option_3' => '<section>',
                'option_4' => '<group>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một nhóm các mục trong danh sách không thứ tự?',
                'option_1' => '<ul>',
                'option_2' => '<ol>',
                'option_3' => '<dl>',
                'option_4' => '<li>',
                'answer' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để chèn một form vào trang web?',
                'option_1' => '<form>',
                'option_2' => '<input>',
                'option_3' => '<field>',
                'option_4' => '<submit>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp ba trong HTML?',
                'option_1' => '<h3>',
                'option_2' => '<h2>',
                'option_3' => '<h1>',
                'option_4' => '<header>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để tạo một đường kẻ ngang trong HTML?',
                'option_1' => '<line>',
                'option_2' => '<hr>',
                'option_3' => '<break>',
                'option_4' => '<separator>',
                'answer' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để thêm một chú thích vào HTML?',
                'option_1' => '<!-- Comment -->',
                'option_2' => '<comment>',
                'option_3' => '/* Comment */',
                'option_4' => '<notes>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để nhúng một biểu mẫu từ bên ngoài?',
                'option_1' => '<iframe>',
                'option_2' => '<embed>',
                'option_3' => '<form>',
                'option_4' => '<object>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một khối văn bản có định dạng cố định?',
                'option_1' => '<pre>',
                'option_2' => '<code>',
                'option_3' => '<fixed>',
                'option_4' => '<text>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp năm trong HTML?',
                'option_1' => '<h5>',
                'option_2' => '<h4>',
                'option_3' => '<h3>',
                'option_4' => '<h2>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để tạo một thẻ chọn trong form?',
                'option_1' => '<select>',
                'option_2' => '<option>',
                'option_3' => '<input>',
                'option_4' => '<dropdown>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một nhóm các biểu thức trong form?',
                'option_1' => '<fieldset>',
                'option_2' => '<form>',
                'option_3' => '<group>',
                'option_4' => '<section>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để chỉ định kiểu font cho văn bản trong HTML?',
                'option_1' => '<font>',
                'option_2' => '<style>',
                'option_3' => '<css>',
                'option_4' => '<text>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để chèn các kiểu CSS nội tuyến vào trang HTML?',
                'option_1' => '<style>',
                'option_2' => '<css>',
                'option_3' => '<script>',
                'option_4' => '<link>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để chèn một tập tin CSS từ bên ngoài vào trang HTML?',
                'option_1' => '<style>',
                'option_2' => '<link>',
                'option_3' => '<css>',
                'option_4' => '<script>',
                'answer' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để định nghĩa một tiêu đề cấp sáu trong HTML?',
                'option_1' => '<h6>',
                'option_2' => '<h5>',
                'option_3' => '<h4>',
                'option_4' => '<h3>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một đoạn văn bản mà không có định dạng?',
                'option_1' => '<p>',
                'option_2' => '<text>',
                'option_3' => '<plain>',
                'option_4' => '<unformatted>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để tạo một checkbox trong form?',
                'option_1' => '<input type="checkbox">',
                'option_2' => '<input type="radio">',
                'option_3' => '<checkbox>',
                'option_4' => '<input type="button">',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một nhóm các mục trong một danh sách có thứ tự?',
                'option_1' => '<ol>',
                'option_2' => '<ul>',
                'option_3' => '<dl>',
                'option_4' => '<li>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để tạo một biểu mẫu từ bên ngoài?',
                'option_1' => '<iframe>',
                'option_2' => '<embed>',
                'option_3' => '<form>',
                'option_4' => '<object>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp sáu trong HTML?',
                'option_1' => '<h6>',
                'option_2' => '<h5>',
                'option_3' => '<h4>',
                'option_4' => '<h3>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để tạo một thẻ chọn trong form?',
                'option_1' => '<select>',
                'option_2' => '<option>',
                'option_3' => '<input>',
                'option_4' => '<dropdown>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một nhóm các biểu thức trong form?',
                'option_1' => '<fieldset>',
                'option_2' => '<form>',
                'option_3' => '<group>',
                'option_4' => '<section>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để chỉ định kiểu font cho văn bản trong HTML?',
                'option_1' => '<font>',
                'option_2' => '<style>',
                'option_3' => '<css>',
                'option_4' => '<text>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để chèn các kiểu CSS nội tuyến vào trang HTML?',
                'option_1' => '<style>',
                'option_2' => '<css>',
                'option_3' => '<script>',
                'option_4' => '<link>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để chèn một tập tin CSS từ bên ngoài vào trang HTML?',
                'option_1' => '<style>',
                'option_2' => '<link>',
                'option_3' => '<css>',
                'option_4' => '<script>',
                'answer' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để định nghĩa một tiêu đề cấp sáu trong HTML?',
                'option_1' => '<h6>',
                'option_2' => '<h5>',
                'option_3' => '<h4>',
                'option_4' => '<h3>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một đoạn văn bản mà không có định dạng?',
                'option_1' => '<p>',
                'option_2' => '<text>',
                'option_3' => '<plain>',
                'option_4' => '<unformatted>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Th

        ẻ nào được sử dụng để tạo một checkbox trong form?',
                'option_1' => '<input type="checkbox">',
                'option_2' => '<input type="radio">',
                'option_3' => '<checkbox>',
                'option_4' => '<input type="button">',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một nhóm các mục trong danh sách có thứ tự?',
                'option_1' => '<ol>',
                'option_2' => '<ul>',
                'option_3' => '<dl>',
                'option_4' => '<li>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp ba trong HTML?',
                'option_1' => '<h3>',
                'option_2' => '<h2>',
                'option_3' => '<h1>',
                'option_4' => '<header>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để chèn một đoạn văn bản cố định vào trang web?',
                'option_1' => '<pre>',
                'option_2' => '<code>',
                'option_3' => '<fixed>',
                'option_4' => '<text>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp năm trong HTML?',
                'option_1' => '<h5>',
                'option_2' => '<h4>',
                'option_3' => '<h3>',
                'option_4' => '<h2>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để nhóm các phần tử liên quan trong HTML?',
                'option_1' => '<section>',
                'option_2' => '<group>',
                'option_3' => '<container>',
                'option_4' => '<div>',
                'answer' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để định nghĩa một nhóm các mục trong một danh sách không có thứ tự?',
                'option_1' => '<ul>',
                'option_2' => '<ol>',
                'option_3' => '<dl>',
                'option_4' => '<li>',
                'answer' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để tạo một đường kẻ ngang trong HTML?',
                'option_1' => '<line>',
                'option_2' => '<hr>',
                'option_3' => '<break>',
                'option_4' => '<separator>',
                'answer' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để chèn một tập tin CSS từ bên ngoài vào trang HTML?',
                'option_1' => '<style>',
                'option_2' => '<link>',
                'option_3' => '<css>',
                'option_4' => '<script>',
                'answer' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một phần của danh sách?',
                'option_1' => '<li>',
                'option_2' => '<dt>',
                'option_3' => '<dd>',
                'option_4' => '<list>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề lớn trong HTML?',
                'option_1' => '<title>',
                'option_2' => '<header>',
                'option_3' => '<h1>',
                'option_4' => '<heading>',
                'answer' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một nhóm các mục trong danh sách không có thứ tự?',
                'option_1' => '<ul>',
                'option_2' => '<ol>',
                'option_3' => '<dl>',
                'option_4' => '<li>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để tạo một biểu mẫu từ bên ngoài?',
                'option_1' => '<iframe>',
                'option_2' => '<embed>',
                'option_3' => '<form>',
                'option_4' => '<object>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp bốn trong HTML?',
                'option_1' => '<h4>',
                'option_2' => '<h3>',
                'option_3' => '<h2>',
                'option_4' => '<h1>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để tạo một form với các trường nhập liệu?',
                'option_1' => '<form>',
                'option_2' => '<input>',
                'option_3' => '<submit>',
                'option_4' => '<field>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để tạo một mục trong danh sách có thứ tự?',
                'option_1' => '<ol>',
                'option_2' => '<ul>',
                'option_3' => '<li>',
                'option_4' => '<dl>',
                'answer' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một nhóm các mục trong danh sách có thứ tự?',
                'option_1' => '<ol>',
                'option_2' => '<ul>',
                'option_3' => '<dl>',
                'option_4' => '<li>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một đoạn văn bản có định dạng cố định?',
                'option_1' => '<pre>',
                'option_2' => '<code>',
                'option_3' => '<fixed>',
                'option_4' => '<text>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp sáu trong HTML?',
                'option_1' => '<h6>',
                'option_2' => '<h5>',
                'option_3' => '<h4>',
                'option_4' => '<h3>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để nhóm các phần tử liên quan trong HTML?',
                'option_1' => '<section>',
                'option_2' => '<group>',
                'option_3' => '<container>',
                'option_4' => '<div>',
                'answer' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một khối văn bản có định dạng cố định?',
                'option_1' => '<pre>',
                'option_2' => '<code>',
                'option_3' => '<fixed>',
                'option_4' => '<text>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp năm trong HTML?',
                'option_1' => '<h5>',
                'option_2' => '<h4>',
                'option_3' => '<h3>',
                'option_4' => '<h2>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp bốn trong HTML?',
                'option_1' => '<h4>',
                'option_2' => '<h3>',
                'option_

        3' => '<h2>',
                'option_4' => '<h1>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để chèn một đoạn văn bản cố định vào trang web?',
                'option_1' => '<pre>',
                'option_2' => '<code>',
                'option_3' => '<fixed>',
                'option_4' => '<text>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp ba trong HTML?',
                'option_1' => '<h3>',
                'option_2' => '<h2>',
                'option_3' => '<h1>',
                'option_4' => '<header>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một đoạn văn bản mà không có định dạng?',
                'option_1' => '<p>',
                'option_2' => '<text>',
                'option_3' => '<plain>',
                'option_4' => '<unformatted>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để tạo một checkbox trong form?',
                'option_1' => '<input type="checkbox">',
                'option_2' => '<input type="radio">',
                'option_3' => '<checkbox>',
                'option_4' => '<input type="button">',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để tạo một mục trong danh sách có thứ tự?',
                'option_1' => '<ol>',
                'option_2' => '<ul>',
                'option_3' => '<li>',
                'option_4' => '<dl>',
                'answer' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để tạo một biểu mẫu từ bên ngoài?',
                'option_1' => '<iframe>',
                'option_2' => '<embed>',
                'option_3' => '<form>',
                'option_4' => '<object>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp bốn trong HTML?',
                'option_1' => '<h4>',
                'option_2' => '<h3>',
                'option_3' => '<h2>',
                'option_4' => '<h1>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để chèn một đoạn văn bản cố định vào trang web?',
                'option_1' => '<pre>',
                'option_2' => '<code>',
                'option_3' => '<fixed>',
                'option_4' => '<text>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp ba trong HTML?',
                'option_1' => '<h3>',
                'option_2' => '<h2>',
                'option_3' => '<h1>',
                'option_4' => '<header>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một đoạn văn bản mà không có định dạng?',
                'option_1' => '<p>',
                'option_2' => '<text>',
                'option_3' => '<plain>',
                'option_4' => '<unformatted>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để tạo một checkbox trong form?',
                'option_1' => '<input type="checkbox">',
                'option_2' => '<input type="radio">',
                'option_3' => '<checkbox>',
                'option_4' => '<input type="button">',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một nhóm các mục trong danh sách có thứ tự?',
                'option_1' => '<ol>',
                'option_2' => '<ul>',
                'option_3' => '<dl>',
                'option_4' => '<li>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp bốn trong HTML?',
                'option_1' => '<h4>',
                'option_2' => '<h3>',
                'option_3' => '<h2>',
                'option_4' => '<h1>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một đoạn văn bản có định dạng cố định?',
                'option_1' => '<pre>',
                'option_2' => '<code>',
                'option_3' => '<fixed>',
                'option_4' => '<text>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để nhóm các phần tử liên quan trong HTML?',
                'option_1' => '<section>',
                'option_2' => '<group>',
                'option_3' => '<container>',
                'option_4' => '<div>',
                'answer' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để tạo một mục trong danh sách có thứ tự?',
                'option_1' => '<ol>',
                'option_2' => '<ul>',
                'option_3' => '<li>',
                'option_4' => '<dl>',
                'answer' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp ba trong HTML?',
                'option_1' => '<h3>',
                'option_2' => '<h2>',
                'option_3' => '<h1>',
                'option_4' => '<header>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một đoạn văn bản mà không có định dạng?',
                'option_1' => '<p>',
                'option_2' => '<text>',
                'option_3' => '<plain>',
                'option_4' => '<unformatted>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để tạo một checkbox trong form?',
                'option_1' => '<input type="checkbox">',
                'option_2' => '<input type="radio">',
                'option_3' => '<checkbox>',
                'option_4' => '<input type="button">',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một nhóm các mục trong danh sách có thứ tự?',
                'option_1' => '<ol>',
                'option_2' => '<ul>',
                'option_3' => '<dl>',
                'option_4' => '<li>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp bốn trong HTML?',
                'option_1' => '<h4>',
                'option_2' => '<h3>',
                'option_3' => '<h2>',
                'option_4' => '<h1>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một đoạn văn bản có định dạng cố định?',
                'option_1' => '<pre>',
                'option_2' => '<code>',
                'option_3' => '<fixed>',
                'option_4' => '<text>',
                'answer' =>

                1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để nhóm các phần tử liên quan trong HTML?',
                'option_1' => '<section>',
                'option_2' => '<group>',
                'option_3' => '<container>',
                'option_4' => '<div>',
                'answer' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để tạo một mục trong danh sách có thứ tự?',
                'option_1' => '<ol>',
                'option_2' => '<ul>',
                'option_3' => '<li>',
                'option_4' => '<dl>',
                'answer' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp ba trong HTML?',
                'option_1' => '<h3>',
                'option_2' => '<h2>',
                'option_3' => '<h1>',
                'option_4' => '<header>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một đoạn văn bản mà không có định dạng?',
                'option_1' => '<p>',
                'option_2' => '<text>',
                'option_3' => '<plain>',
                'option_4' => '<unformatted>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để tạo một checkbox trong form?',
                'option_1' => '<input type="checkbox">',
                'option_2' => '<input type="radio">',
                'option_3' => '<checkbox>',
                'option_4' => '<input type="button">',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một nhóm các mục trong danh sách có thứ tự?',
                'option_1' => '<ol>',
                'option_2' => '<ul>',
                'option_3' => '<dl>',
                'option_4' => '<li>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp bốn trong HTML?',
                'option_1' => '<h4>',
                'option_2' => '<h3>',
                'option_3' => '<h2>',
                'option_4' => '<h1>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một đoạn văn bản có định dạng cố định?',
                'option_1' => '<pre>',
                'option_2' => '<code>',
                'option_3' => '<fixed>',
                'option_4' => '<text>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để nhóm các phần tử liên quan trong HTML?',
                'option_1' => '<section>',
                'option_2' => '<group>',
                'option_3' => '<container>',
                'option_4' => '<div>',
                'answer' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để tạo một mục trong danh sách có thứ tự?',
                'option_1' => '<ol>',
                'option_2' => '<ul>',
                'option_3' => '<li>',
                'option_4' => '<dl>',
                'answer' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp ba trong HTML?',
                'option_1' => '<h3>',
                'option_2' => '<h2>',
                'option_3' => '<h1>',
                'option_4' => '<header>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một đoạn văn bản mà không có định dạng?',
                'option_1' => '<p>',
                'option_2' => '<text>',
                'option_3' => '<plain>',
                'option_4' => '<unformatted>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để tạo một checkbox trong form?',
                'option_1' => '<input type="checkbox">',
                'option_2' => '<input type="radio">',
                'option_3' => '<checkbox>',
                'option_4' => '<input type="button">',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một nhóm các mục trong danh sách có thứ tự?',
                'option_1' => '<ol>',
                'option_2' => '<ul>',
                'option_3' => '<dl>',
                'option_4' => '<li>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp bốn trong HTML?',
                'option_1' => '<h4>',
                'option_2' => '<h3>',
                'option_3' => '<h2>',
                'option_4' => '<h1>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một đoạn văn bản có định dạng cố định?',
                'option_1' => '<pre>',
                'option_2' => '<code>',
                'option_3' => '<fixed>',
                'option_4' => '<text>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để nhóm các phần tử liên quan trong HTML?',
                'option_1' => '<section>',
                'option_2' => '<group>',
                'option_3' => '<container>',
                'option_4' => '<div>',
                'answer' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào được sử dụng để tạo một mục trong danh sách có thứ tự?',
                'option_1' => '<ol>',
                'option_2' => '<ul>',
                'option_3' => '<li>',
                'option_4' => '<dl>',
                'answer' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một tiêu đề cấp ba trong HTML?',
                'option_1' => '<h3>',
                'option_2' => '<h2>',
                'option_3' => '<h1>',
                'option_4' => '<header>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ nào dùng để định nghĩa một đoạn văn bản mà không có định dạng?',
                'option_1' => '<p>',
                'option_2' => '<text>',
                'option_3' => '<plain>',
                'option_4' => '<unformatted>',
                'answer' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        $questions_css = [
            [
                'question' => 'CSS là viết tắt của?',
                'option_1' => 'Creative Style Sheets',
                'option_2' => 'Computer Style Sheets',
                'option_3' => 'Cascading Style Sheets',
                'option_4' => 'Colorful Style Sheets',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Muốn liên kết xHTML với 1 file định nghĩa CSS ta dùng dòng nào sau đây?',
                'option_1' => '<style src=”mystyle.css”>',
                'option_2' => '<stylesheet>mystyle.css</stylesheet>',
                'option_3' => '<link rel=”stylesheet” type=”text/css” href=”mystyle.css”>',
                'option_4' => 'Tất cả các câu trên đều sai.',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Đặt dòng liên kết với file CSS ở vùng nào trong file xHTML?',
                'option_1' => 'In the <body> section',
                'option_2' => 'In the <head> section',
                'option_3' => 'At the top of the document',
                'option_4' => 'At the end of the document',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Tag nào định nghĩa CSS ở ngay trong file xHTML?',
                'option_1' => '<css>',
                'option_2' => '<script>',
                'option_3' => '<style>',
                'option_4' => 'Tất cả các câu trên đều sai.',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thuộc tính nào định nghĩa CSS ngay trong 1 tag?',
                'option_1' => 'Font',
                'option_2' => 'Class',
                'option_3' => 'Style',
                'option_4' => 'Styles',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Dòng nào tuân theo đúng cú pháp của CSS?',
                'option_1' => 'body {color: black}',
                'option_2' => '{body;color:black}',
                'option_3' => 'body:color=black',
                'option_4' => '{body:color=black(body}',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Dòng nào thể hiện đúng một comment (lời chú thích) trong CSS?',
                'option_1' => '/* this is a comment */',
                'option_2' => '// this is a comment //',
                'option_3' => '‘ this is a comment',
                'option_4' => '// this is a comment',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Dòng nào dùng để thay đổi màu nền?',
                'option_1' => 'color:',
                'option_2' => 'bgcolor:',
                'option_3' => 'background-color:',
                'option_4' => 'Tất cả các câu trên đều sai.',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào thêm màu nền cho tất cả các phần tử <h1>?',
                'option_1' => 'h1.all {background-color:#FFFFFF}',
                'option_2' => 'h1 {background-color:#FFFFFF}',
                'option_3' => 'all.h1 {background-color:#FFFFFF}',
                'option_4' => 'Tất cả các câu trên đều sai.',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào thay màu nền của chữ (text)?',
                'option_1' => 'text-color=',
                'option_2' => 'fgcolor:',
                'option_3' => 'color:',
                'option_4' => 'text-color:',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thuộc tính nào thay đổi kích cỡ chữ?',
                'option_1' => 'font-style',
                'option_2' => 'font-size',
                'option_3' => 'text-style',
                'option_4' => 'text-size',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thuộc tính nào làm chữ trong tag p trở thành chữ đậm?',
                'option_1' => '{text-size:bold}',
                'option_2' => '<p style=”font-size:bold”>',
                'option_3' => '<p style=”text-size:bold”>',
                'option_4' => 'p {font-weight:bold}',
                'answer' => 4, // Đáp án đúng là option 4
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm sao để hiển thị liên kết mà ko có gạch chân bên dưới?',
                'option_1' => 'a {decoration:no underline}',
                'option_2' => 'a {text-decoration:no underline}',
                'option_3' => 'a {underline:none}',
                'option_4' => 'a {text-decoration:none}',
                'answer' => 4, // Đáp án đúng là option 4
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm sao để mỗi từ trong 1 dòng đều viết hoa ở đầu từ?',
                'option_1' => 'text-transform:capitalize',
                'option_2' => 'text-transform:uppercase',
                'option_3' => 'You can’t do that with CSS',
                'option_4' => 'text-transform:initial',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm sao để thay đổi font của mỗi phần tử?',
                'option_1' => 'font=',
                'option_2' => 'f:',
                'option_3' => 'font-family:',
                'option_4' => 'Tất cả các câu trên đều sai.',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm sao để tạo chữ đậm?',
                'option_1' => 'font-weight:bold',
                'option_2' => 'style:bold',
                'option_3' => 'font:b',
                'option_4' => 'Tất cả các câu trên đều đúng',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để hiển thị viền 1 phần tử với kích thước đường viền như sau: The top border = 10 pixels, The bottom border = 5 pixels, The left border = 20 pixels, The right border = 1 pixel?',
                'option_1' => 'border-width:5px 20px 10px 1px',
                'option_2' => 'border-width:10px 5px 20px 1px',
                'option_3' => 'border-width:10px 1px 5px 20px',
                'option_4' => 'border-width:10px 20px 5px 1px',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm sao để thay đổi lề trái của một phần tử?',
                'option_1' => 'margin-left:',
                'option_2' => 'text-indent:',
                'option_3' => 'margin:',
                'option_4' => 'indent:',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Để định nghĩa khoảng trống giữa các cạnh (viền) của phần tử và nội dung, bạn sử dụng thuộc tính padding, có thể gán giá trị âm cho thuộc tính này không?',
                'option_1' => 'Yes',
                'option_2' => 'No',
                'option_3' => 'Không biết',
                'option_4' => 'Tất cả các câu trên đều sai.',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để hình ở đầu mỗi dòng của 1 list (danh sách) có hình vuông?',
                'option_1' => 'type: 2',
                'option_2' => 'type: square',
                'option_3' => 'list-type: square',
                'option_4' => 'list-style-type: square',
                'answer' => 4, // Đáp án đúng là option 4
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        $questions_javascript = [
            [
                'question' => 'JavaScript là ngôn ngữ xử lý ở:',
                'option_1' => 'Client',
                'option_2' => 'Server',
                'option_3' => 'Server/client',
                'option_4' => 'Không có dạng nào.',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Javascript là ngôn ngữ thông dịch hay biên dịch',
                'option_1' => 'Thông dịch',
                'option_2' => 'Biên dịch',
                'option_3' => 'Cả hai dạng',
                'option_4' => 'Không có dạng nào ở trên',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Phương thức viết chương trình của Javascript như thế nào?',
                'option_1' => 'Viết riêng một trang',
                'option_2' => 'Viết chung với HTML',
                'option_3' => 'Cả hai dạng',
                'option_4' => 'Không có dạng nào.',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Javascript là ngôn ngữ kịch bản có dấu được mã nguồn không?',
                'option_1' => 'Không dấu được vì các kịch bản chạy ở client.',
                'option_2' => 'Dấu được vì chương trình hoạt động độc lập với trình duyệt',
                'option_3' => 'Hai phát biểu đều sai.',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'JavaScript được bắt đầu bằng?',
                'option_1' => '<script> …</script>',
                'option_2' => '<Javascript> …<Javascript>',
                'option_3' => '<java>  </java>',
                'option_4' => 'Tất cả các dạng trên.',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Javascript có các dạng biến?',
                'option_1' => 'Number, String, Boolean',
                'option_2' => 'Number, Integer, char',
                'option_3' => 'Number, String, Boolean, Null',
                'option_4' => 'Tất cả các loại trên.',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Trong Javascript hàm parseInt() dùng để làm gì?',
                'option_1' => 'Chuyển một chuỗi thành số',
                'option_2' => 'Chuyển một chuỗi thành số nguyên',
                'option_3' => 'Chuyển một chuỗi thành số thực',
                'option_4' => 'Chuyển một số nguyên thành một chuỗi',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Trong Javascript hàm parseFloat() dùng để làm gì?',
                'option_1' => 'Chuyển một chuỗi thành số',
                'option_2' => 'Chuyển một chuỗi thành số thực',
                'option_3' => 'Chuyển một chuỗi thành số nguyên',
                'option_4' => 'Chuyển một số nguyên thành một chuỗi',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh prompt trong Javascript để làm gì?',
                'option_1' => 'Hiện một thông báo nhập thông tin',
                'option_2' => 'Hiện một thông báo dạng yes, No',
                'option_3' => 'Cả hai dạng trên',
                'option_4' => 'Không có lệnh nào đúng',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Trong Javascript sự kiện Onload thực hiện khi:',
                'option_1' => 'Khi bắt đầu chương trình chạy',
                'option_2' => 'Khi click chuột',
                'option_3' => 'Khi kết thúc một chương trình',
                'option_4' => 'Khi di chuyển chuột qua.',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Trong Javascript sự kiện OnUnload thực hiện khi nào?',
                'option_1' => 'Khi bắt đầu chương trình chạy',
                'option_2' => 'Khi click chuột',
                'option_3' => 'Khi kết thúc một chương trình',
                'option_4' => 'Khi di chuyển chuột qua.',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Trong Javascript sự kiện Onblur thực hiện khi nào?',
                'option_1' => 'Khi một đối tượng trong form mất focus.',
                'option_2' => 'Khi một đối tượng trong form có focus',
                'option_3' => 'Khi di chuyển con chuột qua form.',
                'option_4' => 'Khi click chuột vào nút lệnh',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Trong Javascript sự kiện OnMouseOver thực hiện khi nào?',
                'option_1' => 'Khi một đối tượng trong form mất focus.',
                'option_2' => 'Khi một đối tượng trong form có focus',
                'option_3' => 'Khi di chuyển con chuột qua một đối tượng trong form.',
                'option_4' => 'Khi click chuột vào nút lệnh',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Trong Javascript sự kiện Onclick thực hiện khi nào?',
                'option_1' => 'Khi một đối tượng trong form mất focus.',
                'option_2' => 'Khi một đối tượng trong form có focus',
                'option_3' => 'Khi click chuột vào một đối tượng trong form.',
                'option_4' => 'Khi click chuột vào nút lệnh',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Trong Javascript sự kiện Onchange thực hiện khi nào?',
                'option_1' => 'Khi một đối tượng trong form mất focus.',
                'option_2' => 'Khi một đối tượng trong form có focus',
                'option_3' => 'Xảy ra khi giá trị của một trường trong form được người dùng thay đổi',
                'option_4' => 'Khi click chuột vào nút lệnh',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Trong Javascript đoạn mã sau cho ra kết quả gì? <script> function kiemtra(){ window.open("http://www.vnn.vn","Chao"); }</script> </head> <body onload ="kiemtra()"></body>',
                'option_1' => 'Khi chạy thì một trang khác (VNN) được hiện ra.',
                'option_2' => 'Không chạy được vì sai',
                'option_3' => 'Khi kết thúc thì một site khác hiện ra',
                'option_4' => 'Hiện một trang vnn duy nhất.',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ <input type=”text” …> dùng để làm gì?',
                'option_1' => 'Tạo một ô text để nhập dữ liệu',
                'option_2' => 'Tạo một ô password',
                'option_3' => 'Tạo một cùng có nhiều cột nhiều dòng',
                'option_4' => 'Tất cả các ý trên',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ <input type=”Password” …> dùng để làm gì?',
                'option_1' => 'Tạo một ô text để nhập dữ liệu',
                'option_2' => 'Tạo một ô password',
                'option_3' => 'Tạo một cùng có nhiều cột nhiều dòng',
                'option_4' => 'Tất cả các ý trên',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ <textarea rows= cols = …></textarea> dùng để làm gì?',
                'option_1' => 'Tạo một ô text để nhập dữ liệu',
                'option_2' => 'Tạo một ô password',
                'option_3' => 'Tạo một cùng có nhiều cột nhiều dòng',
                'option_4' => 'Tất cả các ý trên',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ <input type=”Submit” …> dùng để làm gì?',
                'option_1' => 'Tạo một ô text để nhập dữ liệu',
                'option_2' => 'Tạo một nút lệnh dùng để gửi tin trong form đi',
                'option_3' => 'Tạo một cùng có nhiều cột nhiều dòng',
                'option_4' => 'Tất cả các ý trên',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ <input type=”Radio” …> dùng để làm gì?',
                'option_1' => 'Tạo một ô text để nhập dữ liệu',
                'option_2' => 'Tạo một nhóm đối tượng chọn nhưng chọn duy nhất',
                'option_3' => 'Tạo một cùng có nhiều cột nhiều dòng',
                'option_4' => 'Tất cả các ý trên',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ <input type=”checkbox” …> dùng để làm gì?',
                'option_1' => 'Tạo một ô text để nhập dữ liệu',
                'option_2' => 'Tạo một nhóm đối tượng chọn được nhiều đối tượng',
                'option_3' => 'Tạo một cùng có nhiều cột nhiều dòng',
                'option_4' => 'Tất cả các ý trên',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ <input type=”button” …> dùng để làm gì?',
                'option_1' => 'Tạo một ô text để nhập dữ liệu',
                'option_2' => 'Tạo một nút lệnh lên trên form',
                'option_3' => 'Tạo một cùng có nhiều cột nhiều dòng',
                'option_4' => 'Tất cả các ý trên',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh lặp for có dạng như thế nào?',
                'option_1' => 'For ( biến = Giá trị đầu, Điều kiện, Giá trị tăng)',
                'option_2' => 'For ( biến = Giá trị đầu, Giá trị tăng, điều kiện)',
                'option_3' => 'For ( biến = Điều kiện, Giá trị tăng, Giá trị cuối)',
                'option_4' => 'Tất cả các dạng trên.',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Vòng lặp While là dạng vòng lặp?',
                'option_1' => 'Không xác định và xét điều kiện rồi mới lặp',
                'option_2' => 'Không xác định và lặp rồi mới xét điều kiện',
                'option_3' => 'Cả hai dạng trên',
                'option_4' => 'Không tồn tại dạng nào ở trên.',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Vòng lặp (Do.. while) là dạng vòng lặp?',
                'option_1' => 'Không xác định và xét điều kiện rồi mới lặp',
                'option_2' => 'Không xác định và lặp rồi mới xét điều kiện',
                'option_3' => 'Cả hai dạng trên',
                'option_4' => 'Không có dạng nào.',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Lệnh break kết hợp với vòng for dùng để?',
                'option_1' => 'Ngưng vòng for nếu gặp lệnh này',
                'option_2' => 'Không có ý nghĩa trong vòng lặp',
                'option_3' => 'Nhảy đến một tập lệnh khác',
                'option_4' => 'Không thể kết hợp được.',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm alert() dùng để làm gì?',
                'option_1' => 'Dùng để hiện một thông.',
                'option_2' => 'Dùng để hiện một thông báo nhập',
                'option_3' => 'Dùng để chuyển đổi số sang chữ',
                'option_4' => 'Tất cả các dạng trên.',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ <Frameset cols> </frameset>',
                'option_1' => 'Dùng để chia trang web ra nhiều phần theo cột',
                'option_2' => 'Dùng để chia trang web ra nhiều phần theo dòng',
                'option_3' => 'Tất cả dạng trên',
                'option_4' => 'Không có ý nào ở trên.',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ <Frameset rows > </frameset>',
                'option_1' => 'Dùng để chia trang web ra nhiều phần theo cột',
                'option_2' => 'Dùng để chia trang web ra nhiều phần theo dòng',
                'option_3' => 'Tất cả dạng trên',
                'option_4' => 'Không có ý nào ở trên.',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Thẻ <Frame src=” duong dan ”>',
                'option_1' => 'Dùng để chèn ảnh',
                'option_2' => 'Dùng để lấy dữ liệu từ một trang khác',
                'option_3' => 'Tất cả dạng trên',
                'option_4' => 'Không có ý nào ở trên.',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        $questions_php = [
            [
                'question' => 'PHP là viết tắt của từ gì?',
                'option_1' => 'Personal Home Page',
                'option_2' => 'Private Home Page',
                'option_3' => 'Personal Hypertext Processor',
                'option_4' => 'Private Hypertext Processor',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để bắt đầu mã PHP?',
                'option_1' => '<php>',
                'option_2' => '<php*',
                'option_3' => '<?php',
                'option_4' => '<script>',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để kết thúc mã PHP?',
                'option_1' => '</php>',
                'option_2' => '<?php>',
                'option_3' => '<?php end>',
                'option_4' => '?>',
                'answer' => 4, // Đáp án đúng là option 4
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Để khai báo một biến trong PHP, sử dụng dấu hiệu nào?',
                'option_1' => '!',
                'option_2' => '$',
                'option_3' => '#',
                'option_4' => '@',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để in nội dung ra màn hình trong PHP?',
                'option_1' => 'print',
                'option_2' => 'echo',
                'option_3' => 'display',
                'option_4' => 'write',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để khai báo một mảng trong PHP?',
                'option_1' => 'array()',
                'option_2' => 'list()',
                'option_3' => 'set()',
                'option_4' => 'dict()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Khi nào PHP sử dụng kiểu dữ liệu mặc định?',
                'option_1' => 'Khi không khai báo kiểu dữ liệu cho biến.',
                'option_2' => 'Khi khai báo kiểu dữ liệu cho biến.',
                'option_3' => 'Khi sử dụng hàm',
                'option_4' => 'Tất cả các trường hợp trên.',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để kiểm tra một biến có tồn tại hay không?',
                'option_1' => 'isset()',
                'option_2' => 'exists()',
                'option_3' => 'empty()',
                'option_4' => 'defined()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để đọc dữ liệu từ một file trong PHP?',
                'option_1' => 'read()',
                'option_2' => 'file_get_contents()',
                'option_3' => 'get_file()',
                'option_4' => 'open()',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để kết nối với cơ sở dữ liệu MySQL trong PHP?',
                'option_1' => 'mysql_connect()',
                'option_2' => 'mysqli_connect()',
                'option_3' => 'connect()',
                'option_4' => 'db_connect()',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để chuyển đổi chuỗi thành số nguyên trong PHP?',
                'option_1' => 'int()',
                'option_2' => 'intval()',
                'option_3' => 'integer()',
                'option_4' => 'floatval()',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để tạo một chuỗi từ mảng trong PHP?',
                'option_1' => 'implode()',
                'option_2' => 'explode()',
                'option_3' => 'merge()',
                'option_4' => 'combine()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để phân tách một chuỗi thành mảng trong PHP?',
                'option_1' => 'implode()',
                'option_2' => 'explode()',
                'option_3' => 'split()',
                'option_4' => 'divide()',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để khai báo một hàm trong PHP?',
                'option_1' => 'function()',
                'option_2' => 'define()',
                'option_3' => 'method()',
                'option_4' => 'declare()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để trả về giá trị từ hàm trong PHP?',
                'option_1' => 'return',
                'option_2' => 'output',
                'option_3' => 'send',
                'option_4' => 'echo',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để kiểm tra xem một biến có rỗng không?',
                'option_1' => 'isset()',
                'option_2' => 'empty()',
                'option_3' => 'is_null()',
                'option_4' => 'is_empty()',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Ký tự nào được sử dụng để viết chú thích đơn dòng trong PHP?',
                'option_1' => '//',
                'option_2' => '#',
                'option_3' => '/*',
                'option_4' => ';',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Ký tự nào được sử dụng để viết chú thích nhiều dòng trong PHP?',
                'option_1' => '/*...*/',
                'option_2' => '//...//',
                'option_3' => '#...#',
                'option_4' => '---',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để loại bỏ khoảng trắng ở đầu và cuối chuỗi trong PHP?',
                'option_1' => 'trim()',
                'option_2' => 'strip()',
                'option_3' => 'clear()',
                'option_4' => 'remove()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để nối chuỗi trong PHP?',
                'option_1' => 'concat()',
                'option_2' => 'join()',
                'option_3' => 'combine()',
                'option_4' => '.',
                'answer' => 4, // Đáp án đúng là option 4
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để kiểm tra sự tồn tại của một lớp trong PHP?',
                'option_1' => 'class_exists()',
                'option_2' => 'object_exists()',
                'option_3' => 'exists()',
                'option_4' => 'is_class()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để lấy tất cả các thuộc tính của một đối tượng trong PHP?',
                'option_1' => 'get_class_vars()',
                'option_2' => 'get_object_vars()',
                'option_3' => 'get_vars()',
                'option_4' => 'object_vars()',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để kiểm tra kiểu dữ liệu của một biến trong PHP?',
                'option_1' => 'gettype()',
                'option_2' => 'typeof()',
                'option_3' => 'type()',
                'option_4' => 'datatype()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để kết thúc vòng lặp trong PHP?',
                'option_1' => 'continue',
                'option_2' => 'break',
                'option_3' => 'exit',
                'option_4' => 'stop',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để kiểm tra xem một biến có phải là một đối tượng hay không?',
                'option_1' => 'is_object()',
                'option_2' => 'is_instance()',
                'option_3' => 'is_class()',
                'option_4' => 'object_check()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để lấy tất cả các phương thức của một lớp trong PHP?',
                'option_1' => 'get_class_methods()',
                'option_2' => 'class_methods()',
                'option_3' => 'get_methods()',
                'option_4' => 'methods()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để xử lý lỗi trong PHP?',
                'option_1' => 'try...catch',
                'option_2' => 'throw...catch',
                'option_3' => 'handle...error',
                'option_4' => 'error...catch',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để tạo một chuỗi ngẫu nhiên trong PHP?',
                'option_1' => 'random_string()',
                'option_2' => 'str_random()',
                'option_3' => 'uniqid()',
                'option_4' => 'generate_string()',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để lấy số lượng phần tử của một mảng trong PHP?',
                'option_1' => 'count()',
                'option_2' => 'size()',
                'option_3' => 'length()',
                'option_4' => 'num()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để chuyển hướng trang trong PHP?',
                'option_1' => 'redirect()',
                'option_2' => 'header()',
                'option_3' => 'move()',
                'option_4' => 'location()',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để nối các chuỗi trong PHP?',
                'option_1' => 'concat()',
                'option_2' => 'append()',
                'option_3' => 'join()',
                'option_4' => 'strcat()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để xóa phần tử cuối cùng của một mảng trong PHP?',
                'option_1' => 'pop()',
                'option_2' => 'remove()',
                'option_3' => 'shift()',
                'option_4' => 'discard()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để khởi tạo một đối tượng trong PHP?',
                'option_1' => 'new',
                'option_2' => 'create',
                'option_3' => 'instantiate',
                'option_4' => 'make',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để lấy tất cả các tệp trong một thư mục trong PHP?',
                'option_1' => 'get_files()',
                'option_2' => 'scandir()',
                'option_3' => 'file_list()',
                'option_4' => 'list_files()',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để phân tích cú pháp một chuỗi JSON trong PHP?',
                'option_1' => 'json_encode()',
                'option_2' => 'json_decode()',
                'option_3' => 'parse_json()',
                'option_4' => 'decode_json()',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để tạo một session trong PHP?',
                'option_1' => 'start_session()',
                'option_2' => 'create_session()',
                'option_3' => 'session_start()',
                'option_4' => 'init_session()',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để xóa một session trong PHP?',
                'option_1' => 'session_unset()',
                'option_2' => 'session_destroy()',
                'option_3' => 'session_delete()',
                'option_4' => 'session_remove()',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để kiểm tra xem một chuỗi có chứa một chuỗi con trong PHP?',
                'option_1' => 'contains()',
                'option_2' => 'str_contains()',
                'option_3' => 'strpos()',
                'option_4' => 'find()',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để định dạng số tiền trong PHP?',
                'option_1' => 'number_format()',
                'option_2' => 'format_money()',
                'option_3' => 'money_format()',
                'option_4' => 'currency_format()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để xử lý các lỗi trong PHP?',
                'option_1' => 'try...catch',
                'option_2' => 'throw...catch',
                'option_3' => 'handle...error',
                'option_4' => 'error...catch',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để xác định kiểu dữ liệu của một biến trong PHP?',
                'option_1' => 'gettype()',
                'option_2' => 'is_type()',
                'option_3' => 'type_of()',
                'option_4' => 'typeof()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để xóa phần tử đầu tiên của một mảng trong PHP?',
                'option_1' => 'shift()',
                'option_2' => 'pop()',
                'option_3' => 'remove()',
                'option_4' => 'delete()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để nối các phần tử mảng thành chuỗi trong PHP?',
                'option_1' => 'implode()',
                'option_2' => 'join()',
                'option_3' => 'combine()',
                'option_4' => 'concatenate()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để kiểm tra xem một biến có phải là một số nguyên trong PHP?',
                'option_1' => 'is_int()',
                'option_2' => 'is_integer()',
                'option_3' => 'is_numeric()',
                'option_4' => 'is_float()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để kiểm tra xem một biến có phải là một số thực trong PHP?',
                'option_1' => 'is_float()',
                'option_2' => 'is_double()',
                'option_3' => 'is_numeric()',
                'option_4' => 'is_real()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để trả về số nguyên từ một chuỗi trong PHP?',
                'option_1' => 'intval()',
                'option_2' => 'int()',
                'option_3' => 'parseInt()',
                'option_4' => 'convertToInt()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để kiểm tra xem một biến có phải là một mảng trong PHP?',
                'option_1' => 'is_array()',
                'option_2' => 'is_list()',
                'option_3' => 'is_collection()',
                'option_4' => 'check_array()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để xóa phần tử cuối cùng của một mảng trong PHP?',
                'option_1' => 'array_pop()',
                'option_2' => 'pop()',
                'option_3' => 'remove_last()',
                'option_4' => 'discard()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để kiểm tra xem một chuỗi có được định dạng đúng không trong PHP?',
                'option_1' => 'is_valid()',
                'option_2' => 'check_format()',
                'option_3' => 'filter_var()',
                'option_4' => 'validate()',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để tính tổng của tất cả các phần tử trong một mảng trong PHP?',
                'option_1' => 'array_sum()',
                'option_2' => 'sum_array()',
                'option_3' => 'total()',
                'option_4' => 'aggregate()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để kết nối đến một cơ sở dữ liệu trong PHP?',
                'option_1' => 'connect()',
                'option_2' => 'db_connect()',
                'option_3' => 'mysqli_connect()',
                'option_4' => 'pdo_connect()',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để lấy đường dẫn của thư mục chứa tệp hiện tại trong PHP?',
                'option_1' => '__DIR__',
                'option_2' => 'current_dir()',
                'option_3' => 'get_dir()',
                'option_4' => 'file_dir()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để đọc dữ liệu từ một tệp trong PHP?',
                'option_1' => 'file_get_contents()',
                'option_2' => 'read_file()',
                'option_3' => 'get_file()',
                'option_4' => 'file_read()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để kiểm tra xem một giá trị có phải là số không trong PHP?',
                'option_1' => 'is_numeric()',
                'option_2' => 'is_number()',
                'option_3' => 'check_number()',
                'option_4' => 'is_digit()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để xác định xem một lớp có kế thừa từ lớp khác trong PHP?',
                'option_1' => 'is_subclass_of()',
                'option_2' => 'class_extends()',
                'option_3' => 'is_inherited()',
                'option_4' => 'extends_class()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để gọi một phương thức của lớp cha từ lớp con trong PHP?',
                'option_1' => 'parent::method()',
                'option_2' => 'super::method()',
                'option_3' => 'call_parent()',
                'option_4' => 'base::method()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để tạo một hằng số trong PHP?',
                'option_1' => 'define()',
                'option_2' => 'const()',
                'option_3' => 'create_constant()',
                'option_4' => 'set_constant()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để xác định xem một biến có phải là một callable trong PHP?',
                'option_1' => 'is_callable()',
                'option_2' => 'is_function()',
                'option_3' => 'callable()',
                'option_4' => 'is_invokable()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để lấy thông tin về các thuộc tính và phương thức của một đối tượng trong PHP?',
                'option_1' => 'get_class_vars()',
                'option_2' => 'get_class_methods()',
                'option_3' => 'get_object_vars()',
                'option_4' => 'get_class_info()',
                'answer' => 4, // Đáp án đúng là option 4
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để xóa tất cả các phần tử của một mảng trong PHP?',
                'option_1' => 'unset()',
                'option_2' => 'array_clear()',
                'option_3' => 'array_reset()',
                'option_4' => 'empty_array()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để lấy số lượng phần tử của một đối tượng Iterator trong PHP?',
                'option_1' => 'count()',
                'option_2' => 'iterator_count()',
                'option_3' => 'length()',
                'option_4' => 'size()',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để tải một lớp từ một tệp trong PHP?',
                'option_1' => 'require_once()',
                'option_2' => 'include_once()',
                'option_3' => 'autoload()',
                'option_4' => 'class_load()',
                'answer' => 3, // Đáp án đúng là option 3
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để tạo một đối tượng Closure trong PHP?',
                'option_1' => 'new Closure()',
                'option_2' => 'create_closure()',
                'option_3' => 'function()',
                'option_4' => 'anonymous_function()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để lấy số nguyên từ chuỗi số trong PHP?',
                'option_1' => 'intval()',
                'option_2' => 'floatval()',
                'option_3' => 'str_to_int()',
                'option_4' => 'parse_int()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để kiểm tra xem một tệp có tồn tại hay không trong PHP?',
                'option_1' => 'file_exists()',
                'option_2' => 'is_file()',
                'option_3' => 'check_file()',
                'option_4' => 'file_check()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để lấy giá trị của một biến môi trường trong PHP?',
                'option_1' => 'getenv()',
                'option_2' => 'env()',
                'option_3' => 'fetch_env()',
                'option_4' => 'environment()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để lấy tất cả các khóa của một mảng trong PHP?',
                'option_1' => 'array_keys()',
                'option_2' => 'keys()',
                'option_3' => 'get_keys()',
                'option_4' => 'array_values()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để kiểm tra xem một biến có phải là một đối tượng của một lớp nhất định trong PHP?',
                'option_1' => 'instanceof',
                'option_2' => 'is_instance_of()',
                'option_3' => 'check_instance()',
                'option_4' => 'instance_check()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để phân tích cú pháp một chuỗi XML trong PHP?',
                'option_1' => 'simplexml_load_string()',
                'option_2' => 'xml_parse()',
                'option_3' => 'parse_xml()',
                'option_4' => 'load_xml()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để xóa tất cả các phần tử của một mảng trong PHP mà giữ lại khóa?',
                'option_1' => 'array_splice()',
                'option_2' => 'array_reset()',
                'option_3' => 'array_clear()',
                'option_4' => 'array_empty()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để lấy giá trị của một biến tĩnh trong một lớp trong PHP?',
                'option_1' => 'ClassName::$variable',
                'option_2' => 'ClassName::getStaticVariable()',
                'option_3' => 'static::variable',
                'option_4' => 'get_static()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để khôi phục các lỗi không được xử lý trong PHP?',
                'option_1' => 'set_exception_handler()',
                'option_2' => 'set_error_handler()',
                'option_3' => 'handle_exceptions()',
                'option_4' => 'exception_handler()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để tạo một đối tượng PDO trong PHP?',
                'option_1' => 'new PDO()',
                'option_2' => 'pdo_connect()',
                'option_3' => 'create_pdo()',
                'option_4' => 'connect_pdo()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để trích xuất giá trị của một chuỗi JSON trong PHP?',
                'option_1' => 'json_decode()',
                'option_2' => 'json_parse()',
                'option_3' => 'decode_json()',
                'option_4' => 'parse_json()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để định dạng ngày và giờ trong PHP?',
                'option_1' => 'date()',
                'option_2' => 'format_date()',
                'option_3' => 'get_date()',
                'option_4' => 'strftime()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để chuyển đổi một đối tượng thành một mảng trong PHP?',
                'option_1' => 'get_object_vars()',
                'option_2' => 'object_to_array()',
                'option_3' => 'convert_to_array()',
                'option_4' => 'array_from_object()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để tạo một khóa trong mảng với giá trị mặc định trong PHP?',
                'option_1' => 'array_fill()',
                'option_2' => 'array_default()',
                'option_3' => 'array_set()',
                'option_4' => 'fill_array()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để lấy số lượng phần tử của một đối tượng Countable trong PHP?',
                'option_1' => 'count()',
                'option_2' => 'size()',
                'option_3' => 'length()',
                'option_4' => 'total()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để tạo một namespace trong PHP?',
                'option_1' => 'namespace',
                'option_2' => 'use',
                'option_3' => 'import',
                'option_4' => 'package',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để loại bỏ các khoảng trắng xung quanh một chuỗi trong PHP?',
                'option_1' => 'trim()',
                'option_2' => 'strip()',
                'option_3' => 'remove_whitespace()',
                'option_4' => 'clean()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để kiểm tra xem một tệp có phải là một thư mục trong PHP?',
                'option_1' => 'is_dir()',
                'option_2' => 'check_directory()',
                'option_3' => 'is_folder()',
                'option_4' => 'directory_exists()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để tạo một đối tượng Session trong PHP?',
                'option_1' => 'session_start()',
                'option_2' => 'create_session()',
                'option_3' => 'start_session()',
                'option_4' => 'initialize_session()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để gửi dữ liệu JSON đến trình duyệt trong PHP?',
                'option_1' => 'json_encode()',
                'option_2' => 'json_send()',
                'option_3' => 'send_json()',
                'option_4' => 'encode_json()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để lấy số dòng của kết quả truy vấn trong PHP với MySQLi?',
                'option_1' => 'num_rows()',
                'option_2' => 'row_count()',
                'option_3' => 'count_rows()',
                'option_4' => 'total_rows()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để tạo một đối tượng PDOStatement từ một câu lệnh SQL trong PHP?',
                'option_1' => 'prepare()',
                'option_2' => 'execute()',
                'option_3' => 'query()',
                'option_4' => 'stmt()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để thay đổi các thuộc tính của đối tượng trong PHP?',
                'option_1' => '__set()',
                'option_2' => '__modify()',
                'option_3' => '__change()',
                'option_4' => '__update()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được gọi khi một đối tượng được tạo ra từ một lớp trong PHP?',
                'option_1' => '__construct()',
                'option_2' => '__init()',
                'option_3' => '__create()',
                'option_4' => '__build()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào được sử dụng để thực thi một hàm có thể gọi lại (callback) trong PHP?',
                'option_1' => 'call_user_func()',
                'option_2' => 'invoke()',
                'option_3' => 'callback()',
                'option_4' => 'execute()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để xử lý các lỗi trong các phương thức trong PHP?',
                'option_1' => '__invoke()',
                'option_2' => '__error()',
                'option_3' => '__exception()',
                'option_4' => '__handle()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào được sử dụng để thực hiện ánh xạ (mapping) các thuộc tính của lớp vào các cột trong cơ sở dữ liệu trong Laravel?',
                'option_1' => 'protected $fillable',
                'option_2' => 'protected $attributes',
                'option_3' => 'protected $casts',
                'option_4' => 'protected $guarded',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để lấy thông tin chi tiết về một đối tượng ReflectionClass trong PHP?',
                'option_1' => 'getMethods()',
                'option_2' => 'getDetails()',
                'option_3' => 'getProperties()',
                'option_4' => 'getInfo()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để khôi phục các lỗi không được xử lý trong PHP?',
                'option_1' => 'set_exception_handler()',
                'option_2' => 'set_error_handler()',
                'option_3' => 'handle_exception()',
                'option_4' => 'error_handler()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào được sử dụng để tạo một phương thức gọi lại (callback) trong PHP?',
                'option_1' => 'Closure',
                'option_2' => 'callback()',
                'option_3' => 'invoke()',
                'option_4' => 'function()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để lấy thông tin về một lớp trong PHP?',
                'option_1' => 'get_class()',
                'option_2' => 'class_info()',
                'option_3' => 'reflect_class()',
                'option_4' => 'class_details()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để tạo một đối tượng từ một lớp trừu tượng trong PHP?',
                'option_1' => 'Không thể',
                'option_2' => 'abstract new',
                'option_3' => 'new abstract',
                'option_4' => 'instantiate abstract',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để tự động tải các lớp trong PHP?',
                'option_1' => 'spl_autoload_register()',
                'option_2' => 'autoload()',
                'option_3' => 'register_autoload()',
                'option_4' => 'load_class()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để tạo một lớp kiểu singleton trong PHP?',
                'option_1' => 'static $instance',
                'option_2' => 'private $instance',
                'option_3' => 'protected $instance',
                'option_4' => 'final $instance',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để tạo một giao diện (interface) trong PHP?',
                'option_1' => 'interface',
                'option_2' => 'create_interface()',
                'option_3' => 'new_interface()',
                'option_4' => 'define_interface()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào được sử dụng để kiểm tra xem một lớp có phương thức cụ thể trong PHP?',
                'option_1' => 'method_exists()',
                'option_2' => 'has_method()',
                'option_3' => 'check_method()',
                'option_4' => 'exists_method()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để lấy số dòng bị ảnh hưởng bởi truy vấn SQL trong PHP với PDO?',
                'option_1' => 'rowCount()',
                'option_2' => 'affectedRows()',
                'option_3' => 'countRows()',
                'option_4' => 'numRows()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để gọi một phương thức của lớp cha từ lớp con trong PHP?',
                'option_1' => 'parent::method()',
                'option_2' => 'super::method()',
                'option_3' => 'call_parent()',
                'option_4' => 'base::method()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để lấy thông tin chi tiết về một phương thức trong PHP?',
                'option_1' => 'getMethod()',
                'option_2' => 'reflectMethod()',
                'option_3' => 'methodDetails()',
                'option_4' => 'methodInfo()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để lấy giá trị của các thuộc tính của lớp trong PHP?',
                'option_1' => 'get_class_vars()',
                'option_2' => 'class_properties()',
                'option_3' => 'class_vars()',
                'option_4' => 'fetch_properties()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để khôi phục các phương thức của một lớp từ một tệp tin trong PHP?',
                'option_1' => 'require_once()',
                'option_2' => 'include_once()',
                'option_3' => 'import()',
                'option_4' => 'load()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để lấy thông tin chi tiết về các lớp và phương thức trong PHP?',
                'option_1' => 'ReflectionClass',
                'option_2' => 'ClassDetails',
                'option_3' => 'ClassInfo',
                'option_4' => 'Reflector',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để thay đổi quyền truy cập của phương thức trong PHP?',
                'option_1' => 'public, private, protected',
                'option_2' => 'accessible, restricted, hidden',
                'option_3' => 'open, close, secure',
                'option_4' => 'allow, deny, restrict',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để tạo một đối tượng PDO từ một kết nối cơ sở dữ liệu MySQL trong PHP?',
                'option_1' => 'new PDO()',
                'option_2' => 'createPDO()',
                'option_3' => 'initPDO()',
                'option_4' => 'makePDO()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để thực hiện một truy vấn SQL chuẩn bị và thực thi trong PHP với PDO?',
                'option_1' => 'prepare() và execute()',
                'option_2' => 'query() và run()',
                'option_3' => 'execute() và fetch()',
                'option_4' => 'query() và prepare()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để lấy danh sách tất cả các lớp hiện tại trong PHP?',
                'option_1' => 'get_declared_classes()',
                'option_2' => 'list_classes()',
                'option_3' => 'get_classes()',
                'option_4' => 'declared_classes()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để tự động tải các lớp của PHP từ một không gian tên?',
                'option_1' => 'spl_autoload_register()',
                'option_2' => 'register_autoload()',
                'option_3' => 'autoload()',
                'option_4' => 'namespace_autoload()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để lấy giá trị của một thuộc tính tĩnh trong PHP?',
                'option_1' => 'self::property',
                'option_2' => 'static::property',
                'option_3' => 'get_static()',
                'option_4' => 'static_property()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Câu lệnh nào dùng để xử lý các lỗi trong lớp đối tượng trong PHP?',
                'option_1' => 'set_error_handler()',
                'option_2' => 'handle_errors()',
                'option_3' => 'error_manage()',
                'option_4' => 'manage_errors()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để tạo một đối tượng truy vấn SQL từ một câu lệnh SQL trong PHP với PDO?',
                'option_1' => 'query()',
                'option_2' => 'execute()',
                'option_3' => 'prepare()',
                'option_4' => 'select()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        $questions_angular = [
            [
                'question' => 'Angular là gì?',
                'option_1' => 'Một framework JavaScript',
                'option_2' => 'Một thư viện CSS',
                'option_3' => 'Một công cụ kiểm thử',
                'option_4' => 'Một trình biên dịch',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào dùng để tạo một component mới trong Angular?',
                'option_1' => 'ng generate component',
                'option_2' => 'ng create component',
                'option_3' => 'ng add component',
                'option_4' => 'ng build component',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Ký hiệu nào được sử dụng để liên kết dữ liệu trong Angular?',
                'option_1' => '{{}}',
                'option_2' => '[]',
                'option_3' => '()',
                'option_4' => '##',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Angular CLI là gì?',
                'option_1' => 'Công cụ dòng lệnh để quản lý ứng dụng Angular',
                'option_2' => 'Trình biên dịch CSS',
                'option_3' => 'Thư viện UI',
                'option_4' => 'Một công cụ kiểm thử',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để xử lý các điều kiện trong Angular?',
                'option_1' => '*ngIf',
                'option_2' => '*ngSwitch',
                'option_3' => '*ngFor',
                'option_4' => '*ngModel',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để kiểm tra và cài đặt phụ thuộc trong Angular?',
                'option_1' => 'ngOnInit',
                'option_2' => 'ngOnChanges',
                'option_3' => 'ngDoCheck',
                'option_4' => 'ngAfterViewInit',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Đâu là lifecycle hook đầu tiên được gọi trong Angular?',
                'option_1' => 'ngOnInit',
                'option_2' => 'ngOnChanges',
                'option_3' => 'ngDoCheck',
                'option_4' => 'ngAfterContentInit',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để cấu hình các route trong Angular?',
                'option_1' => 'RouterModule.forRoot()',
                'option_2' => 'RouterModule.config()',
                'option_3' => 'RouterModule.setup()',
                'option_4' => 'RouterModule.initialize()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được gọi khi Angular thay đổi giá trị của thuộc tính ngModel?',
                'option_1' => 'ngModelChange',
                'option_2' => 'ngChange',
                'option_3' => 'onModelChange',
                'option_4' => 'modelUpdate',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để tạo một dịch vụ mới trong Angular?',
                'option_1' => 'ng generate service',
                'option_2' => 'ng create service',
                'option_3' => 'ng add service',
                'option_4' => 'ng build service',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Từ khóa nào được sử dụng để định nghĩa một class component trong Angular?',
                'option_1' => '@Component',
                'option_2' => '@Directive',
                'option_3' => '@Module',
                'option_4' => '@Service',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Từ khóa nào được sử dụng để nhập khẩu một module trong Angular?',
                'option_1' => 'import',
                'option_2' => 'require',
                'option_3' => 'include',
                'option_4' => 'use',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để định nghĩa các route phụ trong Angular?',
                'option_1' => 'RouterModule.forChild()',
                'option_2' => 'RouterModule.forSubRoutes()',
                'option_3' => 'RouterModule.addRoutes()',
                'option_4' => 'RouterModule.configRoutes()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để lặp qua một danh sách trong Angular?',
                'option_1' => '*ngFor',
                'option_2' => '*ngIf',
                'option_3' => '*ngSwitch',
                'option_4' => '*ngModel',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để định nghĩa các thuộc tính dữ liệu của component trong Angular?',
                'option_1' => '@Input',
                'option_2' => '@Output',
                'option_3' => '@ViewChild',
                'option_4' => '@ContentChild',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để xác định các thuộc tính sự kiện trong Angular?',
                'option_1' => '@Output',
                'option_2' => '@Input',
                'option_3' => '@Event',
                'option_4' => '@Attribute',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để áp dụng các kiểu CSS vào một element trong Angular?',
                'option_1' => '[ngStyle]',
                'option_2' => '[ngClass]',
                'option_3' => '[ngColor]',
                'option_4' => '[ngTheme]',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để xác định các service trong Angular?',
                'option_1' => '@Injectable',
                'option_2' => '@Service',
                'option_3' => '@Factory',
                'option_4' => '@Provider',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để khởi tạo các giá trị trong component của Angular?',
                'option_1' => 'ngOnInit',
                'option_2' => 'ngAfterViewInit',
                'option_3' => 'ngOnChanges',
                'option_4' => 'ngDoCheck',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để điều chỉnh cấu trúc DOM trong Angular?',
                'option_1' => '*ngIf',
                'option_2' => '*ngFor',
                'option_3' => '*ngSwitch',
                'option_4' => '*ngModel',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để xử lý các sự kiện trong Angular?',
                'option_1' => '(event)',
                'option_2' => '@Event',
                'option_3' => 'onEvent',
                'option_4' => 'bindEvent',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Từ khóa nào được sử dụng để khai báo các module trong Angular?',
                'option_1' => '@NgModule',
                'option_2' => '@Module',
                'option_3' => '@Component',
                'option_4' => '@Service',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Từ khóa nào được sử dụng để xác định đường dẫn trong Angular?',
                'option_1' => 'path',
                'option_2' => 'route',
                'option_3' => 'url',
                'option_4' => 'navigate',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để thực hiện các thao tác HTTP trong Angular?',
                'option_1' => 'HttpClient',
                'option_2' => 'HttpRequest',
                'option_3' => 'HttpService',
                'option_4' => 'HttpModule',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để áp dụng các tham số vào URL trong Angular?',
                'option_1' => 'HttpParams',
                'option_2' => 'QueryParams',
                'option_3' => 'UrlParams',
                'option_4' => 'HttpQuery',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để thêm lớp CSS vào element trong Angular?',
                'option_1' => '[ngClass]',
                'option_2' => '[ngStyle]',
                'option_3' => '[ngTheme]',
                'option_4' => '[ngColor]',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để cập nhật giá trị của một thuộc tính trong Angular?',
                'option_1' => 'setValue()',
                'option_2' => 'updateValue()',
                'option_3' => 'changeValue()',
                'option_4' => 'setProperty()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để xác định các mẫu dữ liệu trong Angular?',
                'option_1' => '[ngModel]',
                'option_2' => '[ngTemplate]',
                'option_3' => '[ngData]',
                'option_4' => '[ngForm]',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để tạo một form mới trong Angular?',
                'option_1' => 'FormBuilder',
                'option_2' => 'FormCreator',
                'option_3' => 'FormGenerator',
                'option_4' => 'FormService',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để thêm một lớp CSS khi một điều kiện là đúng trong Angular?',
                'option_1' => '[ngClass]',
                'option_2' => '[ngStyle]',
                'option_3' => '[ngShow]',
                'option_4' => '[ngVisible]',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để đăng ký một dịch vụ trong Angular?',
                'option_1' => 'providers',
                'option_2' => 'services',
                'option_3' => 'inject',
                'option_4' => 'register',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để lấy giá trị của một thuộc tính trong component của Angular?',
                'option_1' => 'get()',
                'option_2' => 'fetch()',
                'option_3' => 'retrieve()',
                'option_4' => 'read()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để chặn một sự kiện trong Angular?',
                'option_1' => 'stopPropagation()',
                'option_2' => 'preventDefault()',
                'option_3' => 'cancelEvent()',
                'option_4' => 'blockEvent()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để xử lý các sự kiện của DOM trong Angular?',
                'option_1' => '(event)',
                'option_2' => '[event]',
                'option_3' => '{event}',
                'option_4' => 'event()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để lấy dữ liệu từ một API trong Angular?',
                'option_1' => 'HttpClient.get()',
                'option_2' => 'HttpService.fetch()',
                'option_3' => 'HttpModule.request()',
                'option_4' => 'HttpRequest.get()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để cập nhật một thuộc tính trong Angular?',
                'option_1' => 'set()',
                'option_2' => 'update()',
                'option_3' => 'modify()',
                'option_4' => 'change()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để xử lý sự kiện click trong Angular?',
                'option_1' => '(click)',
                'option_2' => '[click]',
                'option_3' => 'click()',
                'option_4' => 'onClick()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để liên kết một thuộc tính trong Angular?',
                'option_1' => '[property]',
                'option_2' => '{{property}}',
                'option_3' => '(property)',
                'option_4' => '{property}',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để điều khiển sự hiển thị của một phần tử trong Angular?',
                'option_1' => '*ngIf',
                'option_2' => '*ngFor',
                'option_3' => '*ngSwitch',
                'option_4' => '*ngShow',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để lấy tham số trong URL trong Angular?',
                'option_1' => 'ActivatedRoute.snapshot.params',
                'option_2' => 'Router.getParams()',
                'option_3' => 'Route.params()',
                'option_4' => 'ActivatedRoute.getParams()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để định nghĩa một pipeline trong Angular?',
                'option_1' => '@Pipe',
                'option_2' => '@Transform',
                'option_3' => '@Filter',
                'option_4' => '@Directive',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để thực hiện các thao tác điều kiện trong Angular?',
                'option_1' => 'ngIf',
                'option_2' => 'ngFor',
                'option_3' => 'ngSwitch',
                'option_4' => 'ngShow',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để điều khiển các thuộc tính của một element trong Angular?',
                'option_1' => '[ngStyle]',
                'option_2' => '[ngModel]',
                'option_3' => '[ngClass]',
                'option_4' => '[ngForm]',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để xác định các dịch vụ trong module của Angular?',
                'option_1' => 'providers',
                'option_2' => 'services',
                'option_3' => 'modules',
                'option_4' => 'components',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để tạo một module mới trong Angular?',
                'option_1' => 'ng generate module',
                'option_2' => 'ng create module',
                'option_3' => 'ng add module',
                'option_4' => 'ng build module',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để áp dụng các kiểu CSS động trong Angular?',
                'option_1' => '[ngStyle]',
                'option_2' => '[ngClass]',
                'option_3' => '[ngColor]',
                'option_4' => '[ngTheme]',
                'answer' => 2, // Đáp án đúng là option 2
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để định nghĩa các đường dẫn phụ trong Angular?',
                'option_1' => 'RouterModule.forChild()',
                'option_2' => 'RouterModule.forRoot()',
                'option_3' => 'RouterModule.forFeature()',
                'option_4' => 'RouterModule.forModule()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để quản lý các thuộc tính trong Angular?',
                'option_1' => '[ngModel]',
                'option_2' => '[ngClass]',
                'option_3' => '[ngStyle]',
                'option_4' => '[ngForm]',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để nhận giá trị từ một component trong Angular?',
                'option_1' => '@Input',
                'option_2' => '@Output',
                'option_3' => '@ViewChild',
                'option_4' => '@ContentChild',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để quản lý các thuộc tính trong Angular?',
                'option_1' => '[ngClass]',
                'option_2' => '[ngStyle]',
                'option_3' => '[ngModel]',
                'option_4' => '[ngForm]',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để xử lý các sự kiện của DOM trong Angular?',
                'option_1' => '(event)',
                'option_2' => '[event]',
                'option_3' => 'event()',
                'option_4' => 'onEvent()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để tạo một pipe mới trong Angular?',
                'option_1' => 'ng generate pipe',
                'option_2' => 'ng create pipe',
                'option_3' => 'ng add pipe',
                'option_4' => 'ng build pipe',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để điều chỉnh cấu trúc DOM trong Angular?',
                'option_1' => '*ngIf',
                'option_2' => '*ngFor',
                'option_3' => '*ngSwitch',
                'option_4' => '*ngModel',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để lấy giá trị từ một control trong form của Angular?',
                'option_1' => 'get()',
                'option_2' => 'fetch()',
                'option_3' => 'retrieve()',
                'option_4' => 'read()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để điều chỉnh cấu trúc của một component trong Angular?',
                'option_1' => '[ngStyle]',
                'option_2' => '[ngClass]',
                'option_3' => '[ngForm]',
                'option_4' => '[ngModel]',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để khởi tạo một đối tượng form trong Angular?',
                'option_1' => 'FormBuilder',
                'option_2' => 'FormCreator',
                'option_3' => 'FormGenerator',
                'option_4' => 'FormService',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để lấy các tham số trong URL trong Angular?',
                'option_1' => 'ActivatedRoute.snapshot.params',
                'option_2' => 'Router.getParams()',
                'option_3' => 'Route.params()',
                'option_4' => 'ActivatedRoute.getParams()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để thêm một dịch vụ vào một component trong Angular?',
                'option_1' => 'providers',
                'option_2' => 'services',
                'option_3' => 'inject',
                'option_4' => 'register',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để kiểm soát sự hiển thị của một phần tử trong Angular?',
                'option_1' => '*ngIf',
                'option_2' => '*ngFor',
                'option_3' => '*ngSwitch',
                'option_4' => '*ngShow',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Component trong Angular là gì?',
                'option_1' => 'Một lớp có thể tái sử dụng để quản lý giao diện',
                'option_2' => 'Một dịch vụ để xử lý dữ liệu',
                'option_3' => 'Một loại pipe để chuyển đổi dữ liệu',
                'option_4' => 'Một chỉ thị để thay đổi thuộc tính DOM',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Sự khác biệt giữa RouterModule.forRoot() và RouterModule.forChild() là gì?',
                'option_1' => 'forRoot() dùng cho định nghĩa các route chính, forChild() dùng cho các route phụ',
                'option_2' => 'forRoot() dùng để tạo các route phụ, forChild() dùng cho các route chính',
                'option_3' => 'forRoot() chỉ có trong Angular phiên bản cũ',
                'option_4' => 'forChild() là phương thức để thêm các route vào module chính',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để tạo một service trong Angular?',
                'option_1' => 'ng generate service',
                'option_2' => 'ng create service',
                'option_3' => 'ng add service',
                'option_4' => 'ng build service',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Khi nào bạn nên sử dụng @Injectable() trong Angular?',
                'option_1' => 'Khi bạn cần inject service vào component hoặc service khác',
                'option_2' => 'Khi bạn cần tạo một directive',
                'option_3' => 'Khi bạn cần tạo một pipe',
                'option_4' => 'Khi bạn cần định nghĩa một module',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để tạo một pipe mới trong Angular CLI?',
                'option_1' => 'ng generate pipe',
                'option_2' => 'ng create pipe',
                'option_3' => 'ng add pipe',
                'option_4' => 'ng build pipe',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Sự khác biệt giữa ngOnInit() và ngAfterViewInit() là gì?',
                'option_1' => 'ngOnInit() gọi sau khi Angular khởi tạo component, ngAfterViewInit() gọi sau khi view được khởi tạo',
                'option_2' => 'ngOnInit() gọi trước khi Angular khởi tạo component, ngAfterViewInit() gọi trước khi view được khởi tạo',
                'option_3' => 'ngOnInit() và ngAfterViewInit() gọi trong cùng một thời điểm',
                'option_4' => 'ngOnInit() chỉ dùng cho service, ngAfterViewInit() chỉ dùng cho component',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để xác định các dữ liệu đầu vào cho một component?',
                'option_1' => '@Input',
                'option_2' => '@Output',
                'option_3' => '@ViewChild',
                'option_4' => '@ContentChild',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để lặp qua một danh sách trong Angular?',
                'option_1' => '*ngFor',
                'option_2' => '*ngIf',
                'option_3' => '*ngSwitch',
                'option_4' => '*ngModel',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để thay đổi thuộc tính của phần tử trong Angular?',
                'option_1' => '[ngStyle]',
                'option_2' => '*ngFor',
                'option_3' => '[ngClass]',
                'option_4' => '*ngIf',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để định nghĩa một route trong Angular?',
                'option_1' => 'RouterModule.forRoot()',
                'option_2' => 'RouterModule.forChild()',
                'option_3' => 'RouterModule.createRoute()',
                'option_4' => 'RouterModule.addRoute()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Sự khác biệt giữa @ViewChild và @ContentChild là gì?',
                'option_1' => '@ViewChild lấy tham chiếu tới một phần tử con trong view, @ContentChild lấy tham chiếu tới một phần tử được truyền từ bên ngoài',
                'option_2' => '@ViewChild lấy tham chiếu tới một phần tử được truyền từ bên ngoài, @ContentChild lấy tham chiếu tới một phần tử con trong view',
                'option_3' => '@ViewChild và @ContentChild là tương đương nhau',
                'option_4' => '@ViewChild chỉ dùng cho component, @ContentChild chỉ dùng cho directive',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để xác định các service trong module của Angular?',
                'option_1' => 'providers',
                'option_2' => 'services',
                'option_3' => 'modules',
                'option_4' => 'components',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để lấy dữ liệu từ một API trong Angular?',
                'option_1' => 'HttpClient.get()',
                'option_2' => 'Http.get()',
                'option_3' => 'HttpService.get()',
                'option_4' => 'Http.fetch()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để thay đổi kiểu dữ liệu của một giá trị trong Angular?',
                'option_1' => 'pipe',
                'option_2' => 'transform',
                'option_3' => 'convert',
                'option_4' => 'format',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để kiểm tra tính hợp lệ của một control trong form của Angular?',
                'option_1' => 'valid',
                'option_2' => 'invalid',
                'option_3' => 'isValid',
                'option_4' => 'checkValidity',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để lấy giá trị từ một control trong form của Angular?',
                'option_1' => 'value',
                'option_2' => 'getValue',
                'option_3' => 'retrieveValue',
                'option_4' => 'fetchValue',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để tạo một phần tử tùy chỉnh trong Angular?',
                'option_1' => '@Directive',
                'option_2' => '@Component',
                'option_3' => '@Injectable',
                'option_4' => '@Pipe',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để tạo một module mới trong Angular CLI?',
                'option_1' => 'ng generate module',
                'option_2' => 'ng create module',
                'option_3' => 'ng add module',
                'option_4' => 'ng build module',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để thêm một route vào module trong Angular?',
                'option_1' => 'RouterModule.forChild()',
                'option_2' => 'RouterModule.forRoot()',
                'option_3' => 'RouterModule.addRoute()',
                'option_4' => 'RouterModule.createRoute()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để khởi tạo một ứng dụng Angular?',
                'option_1' => 'ng serve',
                'option_2' => 'ng start',
                'option_3' => 'ng build',
                'option_4' => 'ng run',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để kiểm tra xem một control trong form đã bị thay đổi hay chưa?',
                'option_1' => 'dirty',
                'option_2' => 'pristine',
                'option_3' => 'touched',
                'option_4' => 'valid',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để kiểm tra xem một control trong form đã được người dùng chạm vào chưa?',
                'option_1' => 'touched',
                'option_2' => 'untouched',
                'option_3' => 'pristine',
                'option_4' => 'dirty',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để thay đổi cấu trúc của DOM trong Angular?',
                'option_1' => '*ngIf',
                'option_2' => '*ngFor',
                'option_3' => '*ngSwitch',
                'option_4' => '*ngModel',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để lặp qua một danh sách trong Angular?',
                'option_1' => '*ngFor',
                'option_2' => '*ngIf',
                'option_3' => '*ngSwitch',
                'option_4' => '*ngModel',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để tạo một pipe mới trong Angular CLI?',
                'option_1' => 'ng generate pipe',
                'option_2' => 'ng create pipe',
                'option_3' => 'ng add pipe',
                'option_4' => 'ng build pipe',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để tạo một directive mới trong Angular CLI?',
                'option_1' => 'ng generate directive',
                'option_2' => 'ng create directive',
                'option_3' => 'ng add directive',
                'option_4' => 'ng build directive',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để tạo một component mới trong Angular CLI?',
                'option_1' => 'ng generate component',
                'option_2' => 'ng create component',
                'option_3' => 'ng add component',
                'option_4' => 'ng build component',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để cập nhật một module trong Angular CLI?',
                'option_1' => 'ng update',
                'option_2' => 'ng upgrade',
                'option_3' => 'ng refresh',
                'option_4' => 'ng modify',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Sự khác biệt giữa Reactive Forms và Template-Driven Forms là gì?',
                'option_1' => 'Reactive Forms được định nghĩa trong TypeScript, Template-Driven Forms được định nghĩa trong template HTML',
                'option_2' => 'Reactive Forms được định nghĩa trong template HTML, Template-Driven Forms được định nghĩa trong TypeScript',
                'option_3' => 'Reactive Forms không hỗ trợ validation, Template-Driven Forms hỗ trợ validation',
                'option_4' => 'Không có sự khác biệt',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Sự khác biệt giữa ngOnInit() và constructor trong Angular là gì?',
                'option_1' => 'ngOnInit() gọi sau khi Angular khởi tạo component, constructor gọi khi khởi tạo đối tượng',
                'option_2' => 'ngOnInit() gọi khi khởi tạo đối tượng, constructor gọi khi Angular khởi tạo component',
                'option_3' => 'ngOnInit() và constructor có cùng chức năng',
                'option_4' => 'ngOnInit() chỉ dùng cho service, constructor chỉ dùng cho component',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Sự khác biệt giữa *ngIf và [hidden] là gì?',
                'option_1' => '*ngIf loại bỏ hoàn toàn phần tử khỏi DOM, [hidden] chỉ ẩn phần tử nhưng vẫn giữ nó trong DOM',
                'option_2' => '*ngIf chỉ ẩn phần tử nhưng vẫn giữ nó trong DOM, [hidden] loại bỏ hoàn toàn phần tử khỏi DOM',
                'option_3' => '*ngIf và [hidden] đều loại bỏ hoàn toàn phần tử khỏi DOM',
                'option_4' => '*ngIf và [hidden] đều chỉ ẩn phần tử nhưng vẫn giữ nó trong DOM',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để tạo một module mới trong Angular?',
                'option_1' => 'NgModule',
                'option_2' => 'Component',
                'option_3' => 'Directive',
                'option_4' => 'Service',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để đăng ký một route trong Angular?',
                'option_1' => 'RouterModule.forRoot()',
                'option_2' => 'RouterModule.forChild()',
                'option_3' => 'RouterModule.register()',
                'option_4' => 'RouterModule.addRoute()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để chuyển hướng đến một route khác trong Angular?',
                'option_1' => 'Router.navigate()',
                'option_2' => 'Router.redirect()',
                'option_3' => 'Router.goTo()',
                'option_4' => 'Router.link()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để lấy giá trị từ form control trong Angular?',
                'option_1' => 'control.value',
                'option_2' => 'control.getValue()',
                'option_3' => 'control.retrieveValue()',
                'option_4' => 'control.fetchValue()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để kiểm tra trạng thái hợp lệ của một form trong Angular?',
                'option_1' => 'form.valid',
                'option_2' => 'form.isValid()',
                'option_3' => 'form.checkValidity()',
                'option_4' => 'form.validate()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để cập nhật một thuộc tính của phần tử trong Angular?',
                'option_1' => 'ngStyle',
                'option_2' => 'ngClass',
                'option_3' => 'ngModel',
                'option_4' => 'ngIf',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để tạo một biểu thức điều kiện trong Angular?',
                'option_1' => '*ngIf',
                'option_2' => '*ngFor',
                'option_3' => '*ngSwitch',
                'option_4' => '*ngModel',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để lấy các tham số từ route trong Angular?',
                'option_1' => 'ActivatedRoute.snapshot.paramMap',
                'option_2' => 'Router.paramMap',
                'option_3' => 'ActivatedRoute.params',
                'option_4' => 'Router.params',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để thay đổi giá trị của một thuộc tính trong Angular?',
                'option_1' => '[property]',
                'option_2' => '[ngModel]',
                'option_3' => '[ngStyle]',
                'option_4' => '[ngClass]',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để lấy một service trong Angular?',
                'option_1' => 'constructor',
                'option_2' => 'ngOnInit',
                'option_3' => 'ngAfterViewInit',
                'option_4' => 'ngOnChanges',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Sự khác biệt giữa @Injectable() và @Component() là gì?',
                'option_1' => '@Injectable() dùng để khai báo dịch vụ, @Component() dùng để khai báo component',
                'option_2' => '@Injectable() dùng để khai báo component, @Component() dùng để khai báo dịch vụ',
                'option_3' => '@Injectable() dùng cho directive, @Component() dùng cho pipe',
                'option_4' => 'Không có sự khác biệt',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Directive nào được sử dụng để thay đổi lớp CSS của phần tử trong Angular?',
                'option_1' => '[ngClass]',
                'option_2' => '[ngStyle]',
                'option_3' => '[ngModel]',
                'option_4' => '*ngIf',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để lấy dữ liệu từ một form control trong Angular?',
                'option_1' => 'control.value',
                'option_2' => 'control.getValue()',
                'option_3' => 'control.retrieveValue()',
                'option_4' => 'control.fetchValue()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Hàm nào được sử dụng để kiểm tra trạng thái hợp lệ của một form trong Angular?',
                'option_1' => 'form.valid',
                'option_2' => 'form.isValid()',
                'option_3' => 'form.checkValidity()',
                'option_4' => 'form.validate()',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để tối ưu hóa hiệu suất khi sử dụng `ngFor` trong Angular?',
                'option_1' => 'Sử dụng `trackBy` để theo dõi các thay đổi trong danh sách',
                'option_2' => 'Sử dụng `ngIf` để ẩn các phần tử không cần thiết',
                'option_3' => 'Sử dụng `ngSwitch` để giảm số lượng phần tử',
                'option_4' => 'Tạo một component mới cho mỗi phần tử trong danh sách',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Sự khác biệt giữa `@Inject()` và `@Optional()` trong Angular Dependency Injection là gì?',
                'option_1' => '@Inject() chỉ định dịch vụ cụ thể, @Optional() cho phép bỏ qua dịch vụ nếu không có',
                'option_2' => '@Inject() cho phép bỏ qua dịch vụ nếu không có, @Optional() chỉ định dịch vụ cụ thể',
                'option_3' => '@Inject() được sử dụng cho các component, @Optional() cho các service',
                'option_4' => 'Không có sự khác biệt',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để sử dụng `ngZone` để thay đổi cách Angular theo dõi các thay đổi trong ứng dụng?',
                'option_1' => 'Sử dụng `runOutsideAngular()` để thực hiện các thao tác bên ngoài Angular zone',
                'option_2' => 'Sử dụng `run()` để thực hiện các thao tác bên trong Angular zone',
                'option_3' => 'Sử dụng `onStable()` để chờ đợi các thay đổi',
                'option_4' => 'Sử dụng `detectChanges()` để kiểm tra các thay đổi',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để tạo một module lazy-loaded trong Angular?',
                'option_1' => 'Sử dụng `loadChildren` trong định nghĩa route',
                'option_2' => 'Sử dụng `ngModule` để khai báo module',
                'option_3' => 'Sử dụng `import` trong constructor của component',
                'option_4' => 'Sử dụng `async` để tải module',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Sự khác biệt giữa `ChangeDetectionStrategy.OnPush` và `ChangeDetectionStrategy.Default` là gì?',
                'option_1' => 'OnPush chỉ kiểm tra các thay đổi khi input hoặc event xảy ra, Default kiểm tra tất cả các thay đổi',
                'option_2' => 'OnPush kiểm tra tất cả các thay đổi, Default chỉ kiểm tra khi input hoặc event xảy ra',
                'option_3' => 'OnPush và Default đều kiểm tra tất cả các thay đổi',
                'option_4' => 'OnPush và Default đều không kiểm tra các thay đổi',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để cấu hình các provider trong Angular module?',
                'option_1' => 'Sử dụng `providers` array trong `@NgModule` decorator',
                'option_2' => 'Sử dụng `injectable` array trong `@NgModule` decorator',
                'option_3' => 'Sử dụng `services` array trong `@NgModule` decorator',
                'option_4' => 'Sử dụng `factories` array trong `@NgModule` decorator',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Sự khác biệt giữa `RxJS` và `EventEmitter` trong Angular là gì?',
                'option_1' => 'RxJS là thư viện cho quản lý dữ liệu bất đồng bộ, EventEmitter là một cơ chế sự kiện trong Angular',
                'option_2' => 'RxJS là một cơ chế sự kiện trong Angular, EventEmitter là thư viện cho quản lý dữ liệu bất đồng bộ',
                'option_3' => 'RxJS và EventEmitter đều là thư viện cho quản lý dữ liệu bất đồng bộ',
                'option_4' => 'RxJS và EventEmitter đều là cơ chế sự kiện trong Angular',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để sử dụng `ng-content` trong Angular để nhúng nội dung vào component?',
                'option_1' => 'Sử dụng `<ng-content>` trong template của component',
                'option_2' => 'Sử dụng `@ContentChild()` trong component',
                'option_3' => 'Sử dụng `@ViewChild()` trong component',
                'option_4' => 'Sử dụng `ng-container` trong template của component',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để tạo một pipe tùy chỉnh trong Angular?',
                'option_1' => 'Tạo class với `@Pipe()` decorator và implement `transform()` method',
                'option_2' => 'Tạo class với `@Component()` decorator và implement `transform()` method',
                'option_3' => 'Tạo class với `@Directive()` decorator và implement `transform()` method',
                'option_4' => 'Tạo service với `@Injectable()` decorator và implement `transform()` method',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để sử dụng `@ViewChild()` để truy cập một phần tử trong Angular?',
                'option_1' => 'Sử dụng `@ViewChild()` decorator trong component class để truy cập phần tử trong template',
                'option_2' => 'Sử dụng `@ContentChild()` decorator trong component class để truy cập phần tử trong template',
                'option_3' => 'Sử dụng `@HostListener()` decorator trong component class để truy cập phần tử trong template',
                'option_4' => 'Sử dụng `@Inject()` decorator trong component class để truy cập phần tử trong template',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Sự khác biệt giữa `@Input()` và `@Output()` trong Angular là gì?',
                'option_1' => '@Input() dùng để truyền dữ liệu từ parent component vào child component, @Output() dùng để truyền dữ liệu từ child component ra parent component',
                'option_2' => '@Input() dùng để truyền dữ liệu từ child component ra parent component, @Output() dùng để truyền dữ liệu từ parent component vào child component',
                'option_3' => '@Input() và @Output() đều dùng để truyền dữ liệu từ parent component vào child component',
                'option_4' => '@Input() và @Output() đều dùng để truyền dữ liệu từ child component ra parent component',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để sử dụng `ngRx` để quản lý trạng thái trong Angular?',
                'option_1' => 'Sử dụng Store để lưu trữ trạng thái và Actions để thay đổi trạng thái',
                'option_2' => 'Sử dụng Services để lưu trữ trạng thái và Observables để thay đổi trạng thái',
                'option_3' => 'Sử dụng Component để lưu trữ trạng thái và Directives để thay đổi trạng thái',
                'option_4' => 'Sử dụng Pipes để lưu trữ trạng thái và Modules để thay đổi trạng thái',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để sử dụng `HttpInterceptor` để xử lý các request và response trong Angular?',
                'option_1' => 'Tạo một class với `HttpInterceptor` interface và override các phương thức của nó',
                'option_2' => 'Tạo một service với `HttpInterceptor` interface và override các phương thức của nó',
                'option_3' => 'Tạo một component với `HttpInterceptor` interface và override các phương thức của nó',
                'option_4' => 'Tạo một pipe với `HttpInterceptor` interface và override các phương thức của nó',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để kiểm tra các thay đổi của một form group trong Angular?',
                'option_1' => 'Sử dụng `formGroup.valueChanges` để đăng ký lắng nghe các thay đổi',
                'option_2' => 'Sử dụng `formGroup.statusChanges` để đăng ký lắng nghe các thay đổi',
                'option_3' => 'Sử dụng `formGroup.updateValue()` để kiểm tra các thay đổi',
                'option_4' => 'Sử dụng `formGroup.patchValue()` để kiểm tra các thay đổi',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Sự khác biệt giữa `mergeMap` và `switchMap` trong RxJS là gì?',
                'option_1' => 'mergeMap xử lý tất cả các observables đồng thời, switchMap chỉ xử lý observable gần nhất',
                'option_2' => 'mergeMap xử lý observable gần nhất, switchMap xử lý tất cả các observables đồng thời',
                'option_3' => 'mergeMap và switchMap đều xử lý tất cả các observables đồng thời',
                'option_4' => 'mergeMap và switchMap đều xử lý observable gần nhất',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để tạo một dynamic form trong Angular?',
                'option_1' => 'Sử dụng FormBuilder để tạo các control động và add vào FormGroup',
                'option_2' => 'Sử dụng ngForm để tạo các control động và add vào ngForm',
                'option_3' => 'Sử dụng ngModel để tạo các control động và add vào ngModel',
                'option_4' => 'Sử dụng FormArray để tạo các control động và add vào FormArray',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để sử dụng `@NgModule` để cấu hình các lazy-loaded modules trong Angular?',
                'option_1' => 'Sử dụng `RouterModule.forRoot()` với `loadChildren` trong các route',
                'option_2' => 'Sử dụng `RouterModule.forChild()` với `loadChildren` trong các route',
                'option_3' => 'Sử dụng `RouterModule.forRoot()` với `import` trong các route',
                'option_4' => 'Sử dụng `RouterModule.forChild()` với `import` trong các route',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để sử dụng `HttpClient` để thực hiện các request HTTP trong Angular?',
                'option_1' => 'Sử dụng các phương thức như `get()`, `post()`, `put()`, `delete()` từ `HttpClient`',
                'option_2' => 'Sử dụng các phương thức như `request()`, `send()`, `fetch()` từ `HttpClient`',
                'option_3' => 'Sử dụng các phương thức như `query()`, `insert()`, `remove()` từ `HttpClient`',
                'option_4' => 'Sử dụng các phương thức như `load()`, `update()`, `fetch()` từ `HttpClient`',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Sự khác biệt giữa `@HostBinding()` và `@HostListener()` trong Angular là gì?',
                'option_1' => '@HostBinding() dùng để bind thuộc tính của host element, @HostListener() dùng để lắng nghe các sự kiện của host element',
                'option_2' => '@HostBinding() dùng để lắng nghe các sự kiện của host element, @HostListener() dùng để bind thuộc tính của host element',
                'option_3' => '@HostBinding() và @HostListener() đều dùng để bind thuộc tính của host element',
                'option_4' => '@HostBinding() và @HostListener() đều dùng để lắng nghe các sự kiện của host element',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để sử dụng `async` pipe trong Angular?',
                'option_1' => 'Sử dụng `async` pipe trong template để tự động subscribe và unsubscribe Observable',
                'option_2' => 'Sử dụng `async` pipe trong component để tự động subscribe và unsubscribe Observable',
                'option_3' => 'Sử dụng `async` pipe trong service để tự động subscribe và unsubscribe Observable',
                'option_4' => 'Sử dụng `async` pipe trong module để tự động subscribe và unsubscribe Observable',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để xử lý các lỗi trong Angular khi sử dụng HttpClient?',
                'option_1' => 'Sử dụng `catchError` operator để xử lý các lỗi và trả về fallback value',
                'option_2' => 'Sử dụng `try-catch` block để xử lý các lỗi và trả về fallback value',
                'option_3' => 'Sử dụng `finally` block để xử lý các lỗi và trả về fallback value',
                'option_4' => 'Sử dụng `retry` operator để xử lý các lỗi và thử lại request',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để sử dụng `FormArray` để quản lý một danh sách các form controls trong Angular?',
                'option_1' => 'Tạo một `FormArray` trong `FormGroup` và thêm các `FormControl` vào `FormArray`',
                'option_2' => 'Tạo một `FormGroup` trong `FormArray` và thêm các `FormControl` vào `FormGroup`',
                'option_3' => 'Tạo một `FormControl` trong `FormArray` và thêm các `FormGroup` vào `FormControl`',
                'option_4' => 'Tạo một `FormArray` trong `FormControl` và thêm các `FormGroup` vào `FormArray`',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để tối ưu hóa việc xử lý các sự kiện trong Angular?',
                'option_1' => 'Sử dụng `debounceTime` và `throttleTime` để giảm số lần xử lý sự kiện',
                'option_2' => 'Sử dụng `tap` và `map` để xử lý sự kiện hiệu quả',
                'option_3' => 'Sử dụng `combineLatest` và `merge` để xử lý sự kiện đồng thời',
                'option_4' => 'Sử dụng `filter` và `concat` để xử lý sự kiện tuần tự',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để cấu hình `Router` để hỗ trợ lazy loading trong Angular?',
                'option_1' => 'Sử dụng `loadChildren` trong định nghĩa route của `RouterModule.forRoot()`',
                'option_2' => 'Sử dụng `children` trong định nghĩa route của `RouterModule.forRoot()`',
                'option_3' => 'Sử dụng `imports` trong định nghĩa route của `RouterModule.forRoot()`',
                'option_4' => 'Sử dụng `providers` trong định nghĩa route của `RouterModule.forRoot()`',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để sử dụng `@ContentChild()` để truy cập một phần tử nội dung trong Angular?',
                'option_1' => 'Sử dụng `@ContentChild()` decorator để truy cập phần tử nội dung được nhúng vào component',
                'option_2' => 'Sử dụng `@ViewChild()` decorator để truy cập phần tử nội dung được nhúng vào component',
                'option_3' => 'Sử dụng `@HostListener()` decorator để truy cập phần tử nội dung được nhúng vào component',
                'option_4' => 'Sử dụng `@Inject()` decorator để truy cập phần tử nội dung được nhúng vào component',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Sự khác biệt giữa `ActivatedRoute` và `Router` trong Angular là gì?',
                'option_1' => 'ActivatedRoute cung cấp thông tin về route hiện tại, Router quản lý điều hướng giữa các routes',
                'option_2' => 'ActivatedRoute quản lý điều hướng giữa các routes, Router cung cấp thông tin về route hiện tại',
                'option_3' => 'ActivatedRoute và Router đều cung cấp thông tin về route hiện tại',
                'option_4' => 'ActivatedRoute và Router đều quản lý điều hướng giữa các routes',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để sử dụng `FormBuilder` để tạo một form group trong Angular?',
                'option_1' => 'Sử dụng `FormBuilder.group()` để tạo một form group với các form controls',
                'option_2' => 'Sử dụng `FormBuilder.array()` để tạo một form group với các form controls',
                'option_3' => 'Sử dụng `FormBuilder.control()` để tạo một form group với các form controls',
                'option_4' => 'Sử dụng `FormBuilder.form()` để tạo một form group với các form controls',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để xử lý các vấn đề liên quan đến CORS trong Angular?',
                'option_1' => 'Cấu hình các headers CORS trong server-side, Angular chỉ cần gửi request',
                'option_2' => 'Cấu hình các headers CORS trong Angular service',
                'option_3' => 'Sử dụng `@CrossOrigin()` decorator trong Angular component',
                'option_4' => 'Sử dụng `cors()` middleware trong Angular module',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để quản lý các trạng thái của các form controls trong Angular?',
                'option_1' => 'Sử dụng các thuộc tính như `touched`, `untouched`, `dirty`, `pristine` của form controls',
                'option_2' => 'Sử dụng các thuộc tính như `enabled`, `disabled`, `valid`, `invalid` của form controls',
                'option_3' => 'Sử dụng các thuộc tính như `error`, `success`, `pending`, `submitted` của form controls',
                'option_4' => 'Sử dụng các thuộc tính như `required`, `optional`, `default`, `custom` của form controls',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để tối ưu hóa việc sử dụng `ngIf` và `ngFor` trong Angular?',
                'option_1' => 'Sử dụng `ng-container` để nhóm các điều kiện và vòng lặp mà không làm thay đổi DOM',
                'option_2' => 'Sử dụng `ng-template` để nhóm các điều kiện và vòng lặp mà không làm thay đổi DOM',
                'option_3' => 'Sử dụng `ng-switch` để nhóm các điều kiện và vòng lặp mà không làm thay đổi DOM',
                'option_4' => 'Sử dụng `ng-directive` để nhóm các điều kiện và vòng lặp mà không làm thay đổi DOM',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để tạo một Angular Service có thể tái sử dụng trên nhiều module?',
                'option_1' => 'Khai báo service với `providedIn: root` trong `@Injectable()` decorator',
                'option_2' => 'Khai báo service trong `providers` array của từng module',
                'option_3' => 'Khai báo service trong `imports` array của từng module',
                'option_4' => 'Khai báo service trong `declarations` array của từng module',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để tối ưu hóa việc tải các component trong Angular?',
                'option_1' => 'Sử dụng lazy loading cho các module và component để tải chúng khi cần thiết',
                'option_2' => 'Sử dụng `ngIf` để ẩn các component không cần thiết',
                'option_3' => 'Sử dụng `trackBy` trong `ngFor` để giảm số lần render',
                'option_4' => 'Sử dụng `ChangeDetectionStrategy.OnPush` để tối ưu hóa kiểm tra thay đổi',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để tạo một custom directive trong Angular?',
                'option_1' => 'Tạo một class với `@Directive()` decorator và implement các phương thức tùy chỉnh',
                'option_2' => 'Tạo một class với `@Component()` decorator và implement các phương thức tùy chỉnh',
                'option_3' => 'Tạo một class với `@Pipe()` decorator và implement các phương thức tùy chỉnh',
                'option_4' => 'Tạo một class với `@Service()` decorator và implement các phương thức tùy chỉnh',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Sự khác biệt giữa `@Injectable()` và `@Component()` trong Angular là gì?',
                'option_1' => '@Injectable() được sử dụng để đánh dấu dịch vụ, @Component() để đánh dấu component',
                'option_2' => '@Injectable() được sử dụng để đánh dấu component, @Component() để đánh dấu dịch vụ',
                'option_3' => '@Injectable() và @Component() đều được sử dụng để đánh dấu dịch vụ',
                'option_4' => '@Injectable() và @Component() đều được sử dụng để đánh dấu component',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để sử dụng `Angular CLI` để tạo một project mới và thêm một component vào đó?',
                'option_1' => 'Sử dụng `ng new` để tạo project và `ng generate component` để thêm component',
                'option_2' => 'Sử dụng `ng create` để tạo project và `ng add component` để thêm component',
                'option_3' => 'Sử dụng `ng init` để tạo project và `ng build component` để thêm component',
                'option_4' => 'Sử dụng `ng start` để tạo project và `ng make component` để thêm component',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để xử lý các lỗi khi sử dụng `Reactive Forms` trong Angular?',
                'option_1' => 'Sử dụng `FormGroup` và `FormControl` để xác thực và xử lý lỗi',
                'option_2' => 'Sử dụng `NgForm` và `NgModel` để xác thực và xử lý lỗi',
                'option_3' => 'Sử dụng `FormArray` và `FormBuilder` để xác thực và xử lý lỗi',
                'option_4' => 'Sử dụng `NgModelGroup` và `FormControl` để xác thực và xử lý lỗi',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Làm thế nào để xử lý các vấn đề về route trong Angular khi có nhiều route con?',
                'option_1' => 'Sử dụng `children` property trong định nghĩa route để khai báo các route con',
                'option_2' => 'Sử dụng `path` property trong định nghĩa route để khai báo các route con',
                'option_3' => 'Sử dụng `redirectTo` property trong định nghĩa route để khai báo các route con',
                'option_4' => 'Sử dụng `loadChildren` property trong định nghĩa route để khai báo các route con',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Sự khác biệt giữa `Reactive Forms` và `Template-Driven Forms` trong Angular là gì?',
                'option_1' => 'Reactive Forms cung cấp khả năng kiểm soát cao hơn và dễ dàng mở rộng hơn, Template-Driven Forms phụ thuộc vào template',
                'option_2' => 'Reactive Forms phụ thuộc vào template, Template-Driven Forms cung cấp khả năng kiểm soát cao hơn và dễ dàng mở rộng hơn',
                'option_3' => 'Reactive Forms và Template-Driven Forms đều cung cấp khả năng kiểm soát cao và dễ dàng mở rộng',
                'option_4' => 'Reactive Forms và Template-Driven Forms đều phụ thuộc vào template',
                'answer' => 1, // Đáp án đúng là option 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];


        $essays_html =
            [
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa một tài liệu HTML.',
                    'blanks' => ['<html>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa phần đầu của tài liệu.',
                    'blanks' => ['<head>'],
                ],
                [
                    'question' => 'Thẻ blank_1 chứa tiêu đề của tài liệu.',
                    'blanks' => ['<title>'],
                ],
                [
                    'question' => 'Thẻ blank_1 chứa nội dung chính của tài liệu.',
                    'blanks' => ['<body>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để chèn một hình ảnh vào tài liệu.',
                    'blanks' => ['<img>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để chèn một liên kết.',
                    'blanks' => ['<a>'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một đoạn văn.',
                    'blanks' => ['<p>'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một danh sách không có thứ tự.',
                    'blanks' => ['<ul>'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một danh sách có thứ tự.',
                    'blanks' => ['<ol>'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một mục trong danh sách.',
                    'blanks' => ['<li>'],
                ],
                [
                    'question' => 'Thuộc tính blank_1 của thẻ <a> xác định URL của liên kết.',
                    'blanks' => ['href'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một bảng.',
                    'blanks' => ['<table>'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một hàng trong bảng.',
                    'blanks' => ['<tr>'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một ô trong bảng.',
                    'blanks' => ['<td>'],
                ],
                [
                    'question' => 'Thuộc tính blank_1 của thẻ <img> xác định URL của hình ảnh.',
                    'blanks' => ['src'],
                ],
                [
                    'question' => 'Thuộc tính blank_1 của thẻ <input> xác định loại của phần tử đầu vào.',
                    'blanks' => ['type'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa một tiêu đề lớn nhất.',
                    'blanks' => ['<h1>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa một đoạn mã HTML5.',
                    'blanks' => ['<code>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa một khu vực có thể kéo và thả.',
                    'blanks' => ['<div>'],
                ],
                [
                    'question' => 'Thuộc tính blank_1 của thẻ <form> xác định phương thức gửi dữ liệu.',
                    'blanks' => ['method'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa một khu vực điều hướng.',
                    'blanks' => ['<nav>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa nội dung không có liên quan đến tài liệu chính.',
                    'blanks' => ['<aside>'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một phần trong tài liệu.',
                    'blanks' => ['<section>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để nhúng nội dung âm thanh.',
                    'blanks' => ['<audio>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để nhúng nội dung video.',
                    'blanks' => ['<video>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để nhúng một tài liệu HTML vào trong tài liệu khác.',
                    'blanks' => ['<iframe>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để chèn một tập tin JavaScript.',
                    'blanks' => ['<script>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để chèn một tập tin CSS.',
                    'blanks' => ['<link>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để tạo một vùng chứa có thể định dạng bằng CSS.',
                    'blanks' => ['<div>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để tạo một vùng chứa nội dung riêng biệt và độc lập.',
                    'blanks' => ['<article>'],
                ],
                [
                    'question' => 'Thẻ blank_1 dùng để định nghĩa một phần tử nhúng chứa dữ liệu video trong HTML5 và có thể có thuộc tính blank_2 để điều khiển việc phát lại.',
                    'blanks' => ['<video>', 'controls'],
                ],
                [
                    'question' => 'Thẻ blank_1 cung cấp một cách để nhúng nội dung nhạc hoặc âm thanh vào trang web và có thuộc tính blank_2 để chỉ định nguồn âm thanh.',
                    'blanks' => ['<audio>', 'src'],
                ],
                [
                    'question' => 'Thuộc tính blank_1 của thẻ <input> có thể được sử dụng để tạo một trường văn bản có thể nhập nhiều dòng.',
                    'blanks' => ['rows'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để nhóm các thành phần liên quan nhau lại với nhau trong một tài liệu HTML và thường được sử dụng để áp dụng CSS.',
                    'blanks' => ['<div>'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một tiêu đề nhỏ hơn trong HTML, với các tiêu đề từ blank_2 đến blank_3.',
                    'blanks' => ['<h2>', '<h6>'],
                ],
                [
                    'question' => 'Thuộc tính blank_1 của thẻ <form> xác định điểm đến của dữ liệu khi gửi form.',
                    'blanks' => ['action'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để tạo một bảng dữ liệu và bao gồm các thẻ con blank_2 và blank_3.',
                    'blanks' => ['<table>', '<tr>', '<td>'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một khu vực nội dung có thể kéo và thả, thường được sử dụng để tạo bố cục phân chia.',
                    'blanks' => ['<section>'],
                ],
                [
                    'question' => 'Thuộc tính blank_1 của thẻ <link> chỉ định loại tài nguyên được liên kết và có thể được sử dụng để áp dụng CSS.',
                    'blanks' => ['rel'],
                ],
                [
                    'question' => 'Thẻ blank_1 cung cấp cấu trúc cho các phần tử liên quan đến ngữ nghĩa trong HTML5, bao gồm các thẻ con như blank_2 và blank_3.',
                    'blanks' => ['<nav>', '<ul>', '<li>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa một phần tử điều hướng và thường chứa các liên kết đến các phần khác của trang.',
                    'blanks' => ['<nav>'],
                ],
                [
                    'question' => 'Thuộc tính blank_1 của thẻ <img> cho phép bạn chỉ định một văn bản thay thế cho hình ảnh nếu hình ảnh không thể tải.',
                    'blanks' => ['alt'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để nhóm các phần tử HTML vào một nhóm chung và có thể áp dụng các kiểu dáng CSS cho toàn bộ nhóm.',
                    'blanks' => ['<div>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa một vùng chứa cho nội dung có thể có định dạng CSS đặc biệt và thường được sử dụng để nhóm các phần tử liên quan.',
                    'blanks' => ['<article>'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một phần tử trong một tài liệu HTML mà có thể được áp dụng các kiểu CSS và thường được sử dụng để chứa các thành phần liên quan.',
                    'blanks' => ['<section>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa một tiêu đề lớn hơn trong HTML và có thể có các tiêu đề phụ từ blank_2 đến blank_3.',
                    'blanks' => ['<h1>', '<h6>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để chèn một tập tin JavaScript vào trang web, có thể nằm trong phần blank_2 hoặc blank_3.',
                    'blanks' => ['<script>', 'head', 'body'],
                ],
                [
                    'question' => 'Thẻ blank_1 cho phép người dùng tạo các liên kết đến các trang khác hoặc các phần trong cùng một trang và có thể chứa các thuộc tính blank_2.',
                    'blanks' => ['<a>', 'href'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để chèn một tập tin CSS vào trang HTML và có thuộc tính blank_2 để chỉ định liên kết đến tập tin.',
                    'blanks' => ['<link>', 'href'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa một phần tử có thể kéo và thả với thuộc tính blank_2 để xác định các hành động kéo và thả.',
                    'blanks' => ['<div>', 'draggable'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một phần tử nội dung không có liên quan trực tiếp đến tài liệu chính và có thể chứa các phần tử như blank_2.',
                    'blanks' => ['<aside>', '<p>'],
                ],
                [
                    'question' => 'Thuộc tính blank_1 của thẻ <input> có thể được sử dụng để xác định loại của trường dữ liệu, chẳng hạn như văn bản, số, hay mật khẩu.',
                    'blanks' => ['type'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một phần tử có thể được sử dụng để nhúng các tài liệu HTML khác vào trang hiện tại và có thể bao gồm thuộc tính blank_2 để chỉ định nguồn tài liệu.',
                    'blanks' => ['<iframe>', 'src'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để tạo một nhóm các phần tử trong một bảng và thường kết hợp với blank_2 và blank_3 để định nghĩa cấu trúc bảng.',
                    'blanks' => ['<thead>', '<tr>', '<th>'],
                ],
                [
                    'question' => 'Thuộc tính blank_1 của thẻ <form> chỉ định cách dữ liệu của biểu mẫu sẽ được gửi đến máy chủ và có thể có giá trị là blank_2 hoặc blank_3.',
                    'blanks' => ['method', 'GET', 'POST'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa một phần tử cho phép người dùng nhập nhiều dòng văn bản và có thể có thuộc tính blank_2 để chỉ định số dòng mặc định.',
                    'blanks' => ['<textarea>', 'rows'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một liên kết đến một tài liệu hoặc phần tử bên ngoài và có thể bao gồm thuộc tính blank_2 để chỉ định thuộc tính mục tiêu của liên kết.',
                    'blanks' => ['<a>', 'target'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa một danh sách các mục trong một phần tử danh sách không có thứ tự và thường được kết hợp với blank_2.',
                    'blanks' => ['<ul>', '<li>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để nhóm các phần tử liên quan trong một nhóm và có thể có thuộc tính blank_2 để chỉ định lớp CSS.',
                    'blanks' => ['<div>', 'class'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một danh sách các mục có thứ tự và có thể bao gồm các thẻ con như blank_2 và blank_3.',
                    'blanks' => ['<ol>', '<li>', '<strong>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để nhúng một đoạn mã JavaScript vào trang và có thể có thuộc tính blank_2 để chỉ định loại tập tin.',
                    'blanks' => ['<script>', 'type'],
                ],
                [
                    'question' => 'Thuộc tính blank_1 của thẻ <img> cho phép bạn chỉ định kích thước hình ảnh và có thể bao gồm thuộc tính blank_2 để xác định chiều rộng của hình ảnh.',
                    'blanks' => ['width', 'height'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một phần tử điều hướng và thường chứa các liên kết đến các phần khác của trang hoặc trang web và có thể bao gồm thuộc tính blank_2.',
                    'blanks' => ['<nav>', 'aria-label'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để chèn nội dung âm thanh vào trang web và có thể có thuộc tính blank_2 để chỉ định cách âm thanh sẽ được phát.',
                    'blanks' => ['<audio>', 'controls'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một phần tử chứa nội dung mà có thể được định dạng CSS và thường được sử dụng để chia nội dung thành các phần.',
                    'blanks' => ['<section>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa một tiêu đề nhỏ hơn và thường đi kèm với các tiêu đề từ blank_2 đến blank_3.',
                    'blanks' => ['<h6>', '<h1>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa một ô trong bảng và có thể bao gồm thuộc tính blank_2 để chỉ định số lượng cột mà ô sẽ chiếm.',
                    'blanks' => ['<td>', 'colspan'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một phần tử điều khiển người dùng và có thể bao gồm các thuộc tính blank_2 và blank_3 để chỉ định kiểu đầu vào và giá trị mặc định.',
                    'blanks' => ['<input>', 'type', 'value'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa một nhóm liên kết hoặc nút điều hướng và có thể bao gồm các thuộc tính blank_2 để chỉ định kiểu điều hướng.',
                    'blanks' => ['<nav>', 'aria-labelledby'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một đoạn văn bản nhúng và có thể bao gồm các thuộc tính blank_2 để chỉ định định dạng văn bản.',
                    'blanks' => ['<span>', 'style'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa một phần tử nội dung mà không có liên quan trực tiếp đến tài liệu chính và có thể bao gồm các thuộc tính blank_2 để định nghĩa vị trí của nội dung.',
                    'blanks' => ['<aside>', 'position'],
                ],
                [
                    'question' => 'Thẻ blank_1 định nghĩa một mục trong danh sách có thứ tự và thường được sử dụng kết hợp với thẻ blank_2 để định nghĩa cấu trúc của danh sách.',
                    'blanks' => ['<li>', '<ol>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để định nghĩa một bảng dữ liệu và có thể bao gồm các thẻ con như blank_2 và blank_3 để cấu trúc các hàng và ô của bảng.',
                    'blanks' => ['<table>', '<tbody>', '<tr>'],
                ],
                [
                    'question' => 'Thẻ blank_1 được sử dụng để nhúng một tài liệu HTML vào trang hiện tại và có thể có thuộc tính blank_2 để chỉ định kích thước của khung.',
                    'blanks' => ['<iframe>', 'width'],
                ],
            ];
        $essays_css =
        [
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thay đổi màu chữ.',
                'blanks' => ['color'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thay đổi kích thước chữ.',
                'blanks' => ['font-size'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thay đổi màu nền của một phần tử.',
                'blanks' => ['background-color'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thay đổi chiều rộng của phần tử.',
                'blanks' => ['width'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thay đổi chiều cao của phần tử.',
                'blanks' => ['height'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập khoảng cách bên trong của phần tử.',
                'blanks' => ['padding'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập khoảng cách bên ngoài của phần tử.',
                'blanks' => ['margin'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thay đổi font chữ.',
                'blanks' => ['font-family'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập đường viền cho phần tử.',
                'blanks' => ['border'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập kiểu đường viền cho phần tử.',
                'blanks' => ['border-style'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập độ dày của đường viền.',
                'blanks' => ['border-width'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để căn chỉnh văn bản.',
                'blanks' => ['text-align'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để làm cho văn bản in đậm.',
                'blanks' => ['font-weight'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để làm cho văn bản in nghiêng.',
                'blanks' => ['font-style'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để trang trí văn bản.',
                'blanks' => ['text-decoration'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để tạo bóng cho văn bản.',
                'blanks' => ['text-shadow'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thay đổi cách một phần tử hiển thị.',
                'blanks' => ['display'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập độ mờ của phần tử.',
                'blanks' => ['opacity'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập khoảng cách giữa các chữ cái.',
                'blanks' => ['letter-spacing'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập khoảng cách giữa các dòng.',
                'blanks' => ['line-height'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập hình nền cho phần tử.',
                'blanks' => ['background-image'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập vị trí của hình nền.',
                'blanks' => ['background-position'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập kích thước của hình nền.',
                'blanks' => ['background-size'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập hiệu ứng chuyển tiếp.',
                'blanks' => ['transition'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập các phép biến đổi 2D.',
                'blanks' => ['transform'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập các phép biến đổi 3D.',
                'blanks' => ['transform'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập animation cho phần tử.',
                'blanks' => ['animation'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập khung hiển thị của phần tử.',
                'blanks' => ['overflow'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập thứ tự z-index của phần tử.',
                'blanks' => ['z-index'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập căn chỉnh của phần tử trong flexbox.',
                'blanks' => ['align-items'],
            ],
            [
                'question' => 'Thuộc tính blank_1 của thẻ <box> được sử dụng để thay đổi kích thước của phần tử trong hướng ngang và có thể kết hợp với blank_2 để thay đổi kích thước theo chiều dọc.',
                'blanks' => ['width', 'height'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập độ bo tròn của góc của một phần tử, và có thể kết hợp với blank_2 để chỉ định độ bo tròn cho từng góc.',
                'blanks' => ['border-radius', 'border-top-left-radius'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập cách phần tử nội dung sẽ được cắt nếu nó vượt quá kích thước của phần tử chứa và có thể bao gồm giá trị blank_2 để chỉ định kiểu cắt.',
                'blanks' => ['overflow', 'hidden'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để định nghĩa kích thước của phần tử động dựa trên kích thước của phần tử chứa và có thể kết hợp với blank_2 để chỉ định đơn vị.',
                'blanks' => ['flex', 'flex-grow'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập chiều cao của phần tử và có thể kết hợp với thuộc tính blank_2 để xác định kích thước dựa trên tỷ lệ phần trăm của phần tử chứa.',
                'blanks' => ['height', 'min-height'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập kiểu hiển thị của phần tử và có thể kết hợp với thuộc tính blank_2 để tạo các phần tử định dạng linh hoạt.',
                'blanks' => ['display', 'flex'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập hiệu ứng chuyển tiếp mượt mà giữa các trạng thái khác nhau và có thể bao gồm thuộc tính blank_2 để chỉ định thời gian chuyển tiếp.',
                'blanks' => ['transition', 'duration'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập độ trong suốt của phần tử và có thể kết hợp với thuộc tính blank_2 để chỉ định độ mờ của phần tử.',
                'blanks' => ['opacity', 'rgba'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập các phần tử con sắp xếp theo hàng hoặc cột và có thể kết hợp với thuộc tính blank_2 để chỉ định căn chỉnh nội dung.',
                'blanks' => ['flex-direction', 'justify-content'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập các phép biến đổi 2D cho phần tử và có thể kết hợp với thuộc tính blank_2 để chỉ định góc xoay.',
                'blanks' => ['transform', 'rotate'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để tạo hiệu ứng chuyển động hoặc hoạt ảnh cho phần tử và có thể kết hợp với thuộc tính blank_2 để chỉ định thời gian hoạt ảnh.',
                'blanks' => ['animation', 'duration'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập chiều cao tự động của phần tử và có thể kết hợp với thuộc tính blank_2 để chỉ định chiều cao tối đa hoặc tối thiểu.',
                'blanks' => ['height', 'max-height'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập khoảng cách giữa các phần tử nội dung và có thể kết hợp với thuộc tính blank_2 để chỉ định khoảng cách giữa các dòng văn bản.',
                'blanks' => ['line-height', 'margin'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập kiểu đường viền và có thể kết hợp với thuộc tính blank_2 để chỉ định màu và độ dày của đường viền.',
                'blanks' => ['border-style', 'border-color'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để tạo hiệu ứng bóng đổ cho phần tử và có thể kết hợp với thuộc tính blank_2 để chỉ định kích thước và màu sắc của bóng đổ.',
                'blanks' => ['box-shadow', 'blur-radius'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập vị trí của phần tử trên trục x và y và có thể kết hợp với thuộc tính blank_2 để chỉ định điểm gốc.',
                'blanks' => ['position', 'top'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập kích thước hình nền và có thể kết hợp với thuộc tính blank_2 để chỉ định vị trí hình nền.',
                'blanks' => ['background-size', 'background-position'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập cách phần tử sẽ hiển thị khi được in và có thể kết hợp với thuộc tính blank_2 để chỉ định các thuộc tính in.',
                'blanks' => ['print', 'display'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập kiểu hiển thị cho phần tử và có thể kết hợp với thuộc tính blank_2 để chỉ định các chế độ hiển thị khác nhau.',
                'blanks' => ['display', 'grid'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn chỉ định các thuộc tính của phần tử và có thể kết hợp với thuộc tính blank_2 để thiết lập các thuộc tính cụ thể.',
                'blanks' => ['custom-properties', 'var'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập kiểu căn chỉnh của phần tử con trong một phần tử bố và có thể kết hợp với thuộc tính blank_2 để chỉ định căn chỉnh theo chiều ngang hoặc dọc.',
                'blanks' => ['align-items', 'align-content'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập cách các phần tử nội dung sẽ tràn ra ngoài phần tử chứa và có thể kết hợp với thuộc tính blank_2 để chỉ định kiểu tràn.',
                'blanks' => ['overflow', 'clip'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập kiểu hiển thị của các phần tử con trong một vùng chứa và có thể kết hợp với thuộc tính blank_2 để chỉ định các kiểu bố trí khác nhau.',
                'blanks' => ['flex', 'grid'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn chỉ định các giá trị mặc định cho các thuộc tính CSS tùy chỉnh và có thể kết hợp với blank_2 để tạo ra các biến CSS.',
                'blanks' => ['var', 'custom-properties'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để chỉ định các lớp z-index cho các phần tử trong bố cục nhiều lớp và có thể kết hợp với blank_2 để kiểm soát thứ tự hiển thị.',
                'blanks' => ['z-index', 'position'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập hiệu ứng chuyển tiếp khi trạng thái của phần tử thay đổi, và có thể kết hợp với blank_2 để thiết lập độ dài của hiệu ứng.',
                'blanks' => ['transition', 'transition-duration'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập chiều rộng của các cột trong bảng và có thể kết hợp với thuộc tính blank_2 để chỉ định chiều rộng tối thiểu hoặc tối đa.',
                'blanks' => ['table-layout', 'width'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập độ bo tròn cho các góc của phần tử và có thể kết hợp với blank_2 để chỉ định từng góc cụ thể.',
                'blanks' => ['border-radius', 'border-top-right-radius'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn chỉ định các hiệu ứng hoạt ảnh với độ trễ và thời gian, và có thể kết hợp với thuộc tính blank_2 để chỉ định loại hoạt ảnh.',
                'blanks' => ['animation', 'animation-timing-function'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập khoảng cách giữa các phần tử trong một lưới và có thể kết hợp với thuộc tính blank_2 để chỉ định cách căn chỉnh nội dung trong lưới.',
                'blanks' => ['grid-gap', 'justify-items'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập hiệu ứng đổ bóng cho văn bản và có thể kết hợp với thuộc tính blank_2 để chỉ định độ mờ của bóng.',
                'blanks' => ['text-shadow', 'blur-radius'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập cách phần tử hiển thị khi in và có thể kết hợp với thuộc tính blank_2 để chỉ định kiểu in cho phần tử.',
                'blanks' => ['print', 'display'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập khoảng cách giữa các phần tử trong một khu vực flexbox và có thể kết hợp với thuộc tính blank_2 để chỉ định căn chỉnh nội dung.',
                'blanks' => ['justify-content', 'align-items'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để chỉ định cách phần tử sẽ được trình bày khi bố trí theo lưới, và có thể kết hợp với thuộc tính blank_2 để chỉ định số cột và hàng.',
                'blanks' => ['grid-template-columns', 'grid-template-rows'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn chỉ định khoảng cách giữa các phần tử trong một lưới và có thể kết hợp với thuộc tính blank_2 để chỉ định khoảng cách giữa các hàng.',
                'blanks' => ['grid-gap', 'grid-row-gap'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn chỉ định các biến CSS để tái sử dụng các giá trị và có thể kết hợp với thuộc tính blank_2 để chỉ định giá trị mặc định.',
                'blanks' => ['--variable-name', 'var'],
            ],
            [
                'question' => 'Thuộc tính blank_1 được sử dụng để thiết lập chiều rộng tối đa và tối thiểu của phần tử và có thể kết hợp với thuộc tính blank_2 để chỉ định chiều rộng cố định.',
                'blanks' => ['max-width', 'min-width'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập hiệu ứng chuyển động và hoạt ảnh với các bước cụ thể và có thể kết hợp với thuộc tính blank_2 để chỉ định khoảng thời gian hoạt ảnh.',
                'blanks' => ['steps', 'animation-duration'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn chỉ định hiệu ứng biến đổi 3D cho phần tử và có thể kết hợp với thuộc tính blank_2 để chỉ định các phép biến đổi khác.',
                'blanks' => ['transform', 'perspective'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập cách phần tử sẽ được căn chỉnh trong một khu vực lưới và có thể kết hợp với thuộc tính blank_2 để chỉ định căn chỉnh nội dung.',
                'blanks' => ['align-content', 'justify-items'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn chỉ định kiểu hiển thị của các phần tử con trong một phần tử flexbox và có thể kết hợp với thuộc tính blank_2 để chỉ định độ co giãn của phần tử.',
                'blanks' => ['flex-direction', 'flex-grow'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập cách các phần tử sẽ hiển thị khi phần tử chứa được thay đổi kích thước và có thể kết hợp với thuộc tính blank_2 để chỉ định kích thước tối thiểu.',
                'blanks' => ['flex-wrap', 'flex-basis'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập hiệu ứng cuộn mượt mà cho phần tử và có thể kết hợp với thuộc tính blank_2 để chỉ định thời gian hiệu ứng.',
                'blanks' => ['scroll-behavior', 'scroll-duration'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập các hiệu ứng âm thanh và có thể kết hợp với thuộc tính blank_2 để chỉ định các thuộc tính liên quan đến âm thanh.',
                'blanks' => ['sound', 'volume'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập kiểu căn chỉnh của phần tử trong một khu vực flexbox và có thể kết hợp với thuộc tính blank_2 để chỉ định căn chỉnh theo trục chính.',
                'blanks' => ['align-items', 'align-self'],
            ],
            [
                'question' => 'Thuộc tính blank_1 cho phép bạn thiết lập kiểu hiển thị của phần tử và có thể kết hợp với thuộc tính blank_2 để chỉ định các thuộc tính bố trí cho phần tử.',
                'blanks' => ['display', 'grid'],
            ],
        ];
        $essays_react =
        [
            [
                'question' => 'Trong React, để tạo một component, bạn cần phải sử dụng hàm blank_1 hoặc lớp blank_2.',
                'blanks' => ['function', 'class'],
            ],
            [
                'question' => 'Thuộc tính blank_1 của component được sử dụng để truyền dữ liệu từ component cha xuống component con.',
                'blanks' => ['props'],
            ],
            [
                'question' => 'Khi sử dụng hàm blank_1 trong React, bạn cần phải trả về JSX từ hàm đó.',
                'blanks' => ['render'],
            ],
            [
                'question' => 'Để tạo một hook trạng thái trong React, bạn sử dụng hàm blank_1.',
                'blanks' => ['useState'],
            ],
            [
                'question' => 'Hàm blank_1 được gọi mỗi khi component được render lại.',
                'blanks' => ['render'],
            ],
            [
                'question' => 'Để thực hiện các hiệu ứng phụ trong React, bạn sử dụng hàm blank_1.',
                'blanks' => ['useEffect'],
            ],
            [
                'question' => 'Hàm blank_1 được gọi chỉ một lần khi component được mount lần đầu tiên.',
                'blanks' => ['useEffect'],
            ],
            [
                'question' => 'Thuộc tính blank_1 trong thẻ <input> dùng để thiết lập giá trị của input.',
                'blanks' => ['value'],
            ],
            [
                'question' => 'Để cập nhật giá trị của trạng thái trong một component, bạn sử dụng hàm blank_1.',
                'blanks' => ['setState'],
            ],
            [
                'question' => 'Trong React, để làm việc với danh sách các phần tử, bạn thường sử dụng hàm blank_1.',
                'blanks' => ['map'],
            ],
            [
                'question' => 'Để gán một thuộc tính cho một thẻ HTML trong JSX, bạn sử dụng thuộc tính blank_1.',
                'blanks' => ['className'],
            ],
            [
                'question' => 'Để ngăn chặn hành vi mặc định của sự kiện trong React, bạn sử dụng phương thức blank_1 của sự kiện.',
                'blanks' => ['preventDefault'],
            ],
            [
                'question' => 'Khi bạn muốn xử lý sự kiện trong React, bạn gán hàm xử lý vào thuộc tính blank_1 của phần tử.',
                'blanks' => ['onClick'],
            ],
            [
                'question' => 'Để quản lý các input trong một form, bạn có thể sử dụng thuộc tính blank_1 để xác định giá trị của input.',
                'blanks' => ['value'],
            ],
            [
                'question' => 'Trong React, bạn có thể sử dụng thuộc tính blank_1 để thực hiện điều kiện render một phần của giao diện.',
                'blanks' => ['condition'],
            ],
            [
                'question' => 'Để chuyển đổi component từ class component sang function component, bạn cần xóa thuộc tính blank_1 và thay thế bằng hàm blank_2.',
                'blanks' => ['render', 'return'],
            ],
            [
                'question' => 'Hàm blank_1 được sử dụng để quản lý các hiệu ứng phụ trong React function components.',
                'blanks' => ['useEffect'],
            ],
            [
                'question' => 'Để chỉ định kiểu hiển thị của một component con trong React, bạn có thể sử dụng thuộc tính blank_1.',
                'blanks' => ['children'],
            ],
            [
                'question' => 'Trong React, để tạo một React element từ một component, bạn sử dụng hàm blank_1.',
                'blanks' => ['React.createElement'],
            ],
            [
                'question' => 'Khi sử dụng JSX, bạn cần phải đảm bảo rằng tất cả các thẻ mở đều được đóng đúng cách bằng cách sử dụng blank_1.',
                'blanks' => ['closing tags'],
            ],
            [
                'question' => 'Để gán giá trị cho một thuộc tính của phần tử trong JSX, bạn sử dụng dấu blank_1.',
                'blanks' => ['{}'],
            ],
            [
                'question' => 'Hàm blank_1 được sử dụng để xác định các phương thức và thuộc tính trong class component.',
                'blanks' => ['constructor'],
            ],
            [
                'question' => 'Để truyền các tham số cho hàm xử lý sự kiện trong React, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['bind'],
            ],
            [
                'question' => 'Để sử dụng một component trong JSX, bạn cần phải chắc chắn rằng tên component bắt đầu bằng chữ blank_1.',
                'blanks' => ['capital'],
            ],
            [
                'question' => 'Khi một component nhận props, bạn có thể truy cập vào chúng qua thuộc tính blank_1 của component.',
                'blanks' => ['props'],
            ],
            [
                'question' => 'Hàm blank_1 được gọi khi một component được mount và có thể được sử dụng để thiết lập trạng thái ban đầu.',
                'blanks' => ['constructor'],
            ],
            [
                'question' => 'Trong React, bạn có thể sử dụng thuộc tính blank_1 để truyền các giá trị vào component con.',
                'blanks' => ['props'],
            ],
            [
                'question' => 'Để gán giá trị cho một input trong React, bạn sử dụng thuộc tính blank_1.',
                'blanks' => ['value'],
            ],
            [
                'question' => 'Hàm blank_1 được sử dụng để thiết lập trạng thái ban đầu trong một component.',
                'blanks' => ['constructor'],
            ],
            [
                'question' => 'Để quản lý trạng thái của các phần tử trong React, bạn sử dụng hook blank_1.',
                'blanks' => ['useState'],
            ],
            [
                'question' => 'Trong React, để làm cho một component có thể nhận dữ liệu từ bên ngoài, bạn cần sử dụng thuộc tính blank_1.',
                'blanks' => ['props'],
            ],
            [
                'question' => 'Để cập nhật trạng thái trong một function component, bạn sử dụng hook blank_1.',
                'blanks' => ['useState'],
            ],
            [
                'question' => 'Để xử lý các sự kiện trong React, bạn thường sử dụng thuộc tính blank_1 của phần tử.',
                'blanks' => ['onClick'],
            ],
            [
                'question' => 'Khi một component có trạng thái, bạn có thể cập nhật trạng thái đó bằng cách sử dụng hàm blank_1.',
                'blanks' => ['setState'],
            ],
            [
                'question' => 'Trong React, để thiết lập thuộc tính CSS cho phần tử, bạn cần sử dụng thuộc tính blank_1 của phần tử.',
                'blanks' => ['style'],
            ],
            [
                'question' => 'Để render một component trong React, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['ReactDOM.render'],
            ],
            [
                'question' => 'Khi bạn muốn truyền một hàm xử lý sự kiện vào component, bạn có thể sử dụng thuộc tính blank_1.',
                'blanks' => ['onClick'],
            ],
            [
                'question' => 'Để render một danh sách các phần tử trong React, bạn thường sử dụng hàm blank_1.',
                'blanks' => ['map'],
            ],
            [
                'question' => 'Để cấu hình một component để có thể nhận dữ liệu từ component cha, bạn sử dụng thuộc tính blank_1.',
                'blanks' => ['props'],
            ],
            [
                'question' => 'Trong React, để truyền giá trị từ một component cha đến một component con, bạn sử dụng thuộc tính blank_1.',
                'blanks' => ['props'],
            ],
            [
                'question' => 'Để cập nhật trạng thái trong một class component, bạn sử dụng phương thức blank_1.',
                'blanks' => ['setState'],
            ],
            [
                'question' => 'Trong JSX, để hiển thị biến JavaScript, bạn cần bao bọc biến đó bằng dấu blank_1.',
                'blanks' => ['{}'],
            ],
            [
                'question' => 'Để tạo ra một component có thể tái sử dụng, bạn có thể định nghĩa nó bằng cách sử dụng hàm blank_1.',
                'blanks' => ['function'],
            ],
            [
                'question' => 'Trong React, để tối ưu hóa hiệu suất khi render danh sách lớn, bạn có thể sử dụng component blank_1.',
                'blanks' => ['React.memo'],
            ],
            [
                'question' => 'Để sử dụng các hooks tùy chỉnh trong React, bạn cần phải đảm bảo rằng tên của chúng bắt đầu bằng chữ blank_1.',
                'blanks' => ['use'],
            ],
            [
                'question' => 'Để tạo một context trong React, bạn sử dụng hàm blank_1 từ thư viện React.',
                'blanks' => ['createContext'],
            ],
            [
                'question' => 'Để tiêu diệt một component khi không còn cần thiết, bạn có thể sử dụng hàm blank_1 trong hook useEffect.',
                'blanks' => ['cleanup'],
            ],
            [
                'question' => 'Để làm việc với các side effects trong một function component, bạn sử dụng hook blank_1.',
                'blanks' => ['useEffect'],
            ],
            [
                'question' => 'Khi bạn cần phải quản lý nhiều trạng thái phức tạp trong một component, bạn có thể sử dụng hook blank_1.',
                'blanks' => ['useReducer'],
            ],
            [
                'question' => 'Để thực hiện các thay đổi đối với một giá trị state mà không làm render lại toàn bộ component, bạn có thể sử dụng blank_1.',
                'blanks' => ['useCallback'],
            ],
            [
                'question' => 'Để truyền dữ liệu từ một component cha đến nhiều component con, bạn có thể sử dụng context và hook blank_1.',
                'blanks' => ['useContext'],
            ],
            [
                'question' => 'Khi bạn cần để tái sử dụng logic giữa các component mà không cần tạo ra nhiều props, bạn có thể sử dụng blank_1.',
                'blanks' => ['custom hooks'],
            ],
            [
                'question' => 'Để tránh việc render lại các component không cần thiết khi một phần của state thay đổi, bạn có thể sử dụng blank_1 để chỉ định các giá trị cần so sánh.',
                'blanks' => ['React.memo'],
            ],
            [
                'question' => 'Khi bạn cần sử dụng một giá trị từ context, bạn có thể gọi hàm blank_1 từ context.',
                'blanks' => ['useContext'],
            ],
            [
                'question' => 'Để tối ưu hóa hiệu suất khi xử lý các sự kiện trong React, bạn nên sử dụng hook blank_1.',
                'blanks' => ['useCallback'],
            ],
            [
                'question' => 'Để làm cho một component có thể trả về nhiều phần tử cùng lúc, bạn có thể sử dụng một blank_1.',
                'blanks' => ['Fragment'],
            ],
            [
                'question' => 'Để thực hiện các phép toán phức tạp và lưu trữ giá trị tính toán, bạn có thể sử dụng hook blank_1.',
                'blanks' => ['useMemo'],
            ],
            [
                'question' => 'Để theo dõi và quản lý các form input phức tạp, bạn có thể sử dụng thư viện blank_1.',
                'blanks' => ['Formik'],
            ],
            [
                'question' => 'Khi bạn cần thực hiện các thay đổi trong DOM sau khi component đã render, bạn có thể sử dụng blank_1 trong hook useEffect.',
                'blanks' => ['cleanup function'],
            ],
            [
                'question' => 'Để tích hợp Redux vào ứng dụng React, bạn cần phải sử dụng blank_1 để kết nối các component với store.',
                'blanks' => ['connect'],
            ],
            [
                'question' => 'Để xác định các điều kiện render cho các phần của giao diện, bạn có thể sử dụng toán tử blank_1.',
                'blanks' => ['&&'],
            ],
            [
                'question' => 'Khi bạn cần triển khai một component với khả năng điều chỉnh và giao tiếp phức tạp, bạn có thể tạo một blank_1.',
                'blanks' => ['HOC (Higher Order Component)'],
            ],
            [
                'question' => 'Để bảo đảm các thành phần của state được đồng bộ và chính xác trong React, bạn nên sử dụng blank_1.',
                'blanks' => ['useReducer'],
            ],
            [
                'question' => 'Khi bạn cần làm việc với routing trong React, bạn có thể sử dụng thư viện blank_1.',
                'blanks' => ['React Router'],
            ],
            [
                'question' => 'Để thực hiện các phép biến đổi phức tạp trên các phần tử trong DOM, bạn có thể sử dụng thư viện blank_1 cùng với React.',
                'blanks' => ['D3.js'],
            ],
            [
                'question' => 'Khi bạn cần quản lý các phần tử không thể render trực tiếp, bạn có thể sử dụng blank_1 để điều chỉnh việc render các phần tử đó.',
                'blanks' => ['React Portals'],
            ],
            [
                'question' => 'Để áp dụng một số kiểu CSS chỉ cho một component nhất định, bạn có thể sử dụng thư viện blank_1.',
                'blanks' => ['styled-components'],
            ],
            [
                'question' => 'Khi bạn cần tích hợp các thành phần giao diện của bên thứ ba vào ứng dụng React, bạn có thể sử dụng thư viện blank_1.',
                'blanks' => ['React-Bootstrap'],
            ],
            [
                'question' => 'Để tối ưu hóa thời gian load của các component lớn, bạn có thể sử dụng kỹ thuật blank_1 trong React.',
                'blanks' => ['code splitting'],
            ],
            [
                'question' => 'Để làm việc với dữ liệu bất đồng bộ trong React, bạn có thể kết hợp các hook blank_1 và blank_2.',
                'blanks' => ['useEffect', 'fetch'],
            ],
            [
                'question' => 'Để sử dụng các giá trị state phụ thuộc vào nhau trong React, bạn có thể sử dụng hook blank_1.',
                'blanks' => ['useMemo'],
            ],
            [
                'question' => 'Khi bạn cần lưu trữ trạng thái của ứng dụng trên nhiều component, bạn có thể sử dụng blank_1 để chia sẻ state toàn cục.',
                'blanks' => ['Redux'],
            ],
            [
                'question' => 'Khi bạn cần xác thực các form input phức tạp trong React, bạn có thể sử dụng thư viện blank_1 để quản lý form.',
                'blanks' => ['React Hook Form'],
            ],
            [
                'question' => 'Để xây dựng các ứng dụng với React và server-side rendering, bạn có thể sử dụng thư viện blank_1.',
                'blanks' => ['Next.js'],
            ],
            [
                'question' => 'Khi bạn cần phải tối ưu hóa việc render các phần tử có điều kiện, bạn nên sử dụng blank_1 để làm cho component chỉ render khi cần thiết.',
                'blanks' => ['React.memo'],
            ],
            [
                'question' => 'Khi bạn cần xử lý các lỗi xảy ra trong ứng dụng React, bạn có thể sử dụng blank_1 để bắt và xử lý lỗi.',
                'blanks' => ['Error Boundaries'],
            ],
            [
                'question' => 'Để theo dõi các thay đổi trạng thái trong React khi sử dụng các hook, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['useEffect'],
            ],
            [
                'question' => 'Khi bạn cần chia sẻ dữ liệu giữa các component sâu trong cây component, bạn có thể sử dụng blank_1 để quản lý dữ liệu.',
                'blanks' => ['context API'],
            ],
            [
                'question' => 'Để xử lý các phép toán phức tạp và không đồng bộ trong ứng dụng React, bạn có thể sử dụng hàm blank_1 kết hợp với blank_2.',
                'blanks' => ['useEffect', 'async'],
            ],
            [
                'question' => 'Khi bạn cần làm việc với nhiều loại action trong Redux, bạn có thể sử dụng blank_1 để quản lý các action đó.',
                'blanks' => ['reducers'],
            ],
            [
                'question' => 'Để tích hợp dữ liệu từ một API vào React component, bạn có thể sử dụng hook blank_1 để thực hiện các yêu cầu HTTP.',
                'blanks' => ['useEffect'],
            ],
            [
                'question' => 'Để phân tách các phần của ứng dụng thành các module nhỏ hơn, bạn có thể sử dụng blank_1 trong React.',
                'blanks' => ['code splitting'],
            ],
            [
                'question' => 'Khi bạn cần quản lý các giá trị của form trong React, bạn có thể sử dụng hook blank_1 để quản lý form state.',
                'blanks' => ['useForm'],
            ],
            [
                'question' => 'Khi bạn cần thực hiện cập nhật trạng thái đồng thời với các yêu cầu bất đồng bộ trong React, bạn có thể sử dụng blank_1 kết hợp với blank_2.',
                'blanks' => ['useReducer', 'useEffect'],
            ],
            [
                'question' => 'Để tối ưu hóa việc rendering cho các danh sách dài trong React, bạn có thể sử dụng kỹ thuật blank_1 kết hợp với blank_2.',
                'blanks' => ['virtualization', 'react-window'],
            ],
            [
                'question' => 'Để triển khai hiệu ứng chuyển tiếp phức tạp cho các phần tử, bạn có thể sử dụng thư viện blank_1 với React.',
                'blanks' => ['Framer Motion'],
            ],
            [
                'question' => 'Để tối ưu hóa việc tải tài nguyên khi điều hướng giữa các trang trong ứng dụng React, bạn có thể sử dụng blank_1.',
                'blanks' => ['React.lazy'],
            ],
            [
                'question' => 'Khi bạn cần thực hiện các phép toán đồng bộ với các phép toán bất đồng bộ trong một ứng dụng React, bạn nên sử dụng blank_1 kết hợp với blank_2.',
                'blanks' => ['useEffect', 'useCallback'],
            ],
            [
                'question' => 'Để xây dựng một hệ thống quản lý trạng thái toàn cục với khả năng dự đoán cao trong React, bạn có thể sử dụng blank_1 cùng với blank_2.',
                'blanks' => ['Redux', 'Redux-Saga'],
            ],
            [
                'question' => 'Khi bạn cần thiết lập một hệ thống quản lý trạng thái cho ứng dụng với cấu trúc phức tạp, bạn có thể sử dụng blank_1 kết hợp với blank_2 để phân loại các tác vụ.',
                'blanks' => ['Redux', 'Redux-Toolkit'],
            ],
            [
                'question' => 'Để xử lý việc chia sẻ dữ liệu giữa các component không có mối quan hệ trực tiếp, bạn có thể sử dụng blank_1 cùng với blank_2.',
                'blanks' => ['context API', 'useReducer'],
            ],
            [
                'question' => 'Để kiểm soát sự cập nhật của một component khi một số điều kiện nhất định thay đổi, bạn có thể sử dụng hook blank_1 để tối ưu hóa việc render.',
                'blanks' => ['useMemo'],
            ],
            [
                'question' => 'Để xử lý các vấn đề đồng bộ và không đồng bộ phức tạp trong ứng dụng React, bạn có thể sử dụng blank_1 cùng với blank_2 để đồng bộ hóa trạng thái.',
                'blanks' => ['useEffect', 'useReducer'],
            ],
            [
                'question' => 'Để đảm bảo rằng các giá trị trạng thái không bị thay đổi ngoài ý muốn trong Redux, bạn có thể sử dụng blank_1 để kiểm soát các cập nhật.',
                'blanks' => ['reducer'],
            ],
            [
                'question' => 'Khi bạn cần thực hiện server-side rendering trong ứng dụng React, bạn có thể sử dụng thư viện blank_1 để cải thiện hiệu suất.',
                'blanks' => ['Next.js'],
            ],
            [
                'question' => 'Để quản lý trạng thái của một ứng dụng React trong môi trường lớn, bạn có thể sử dụng blank_1 cùng với blank_2 để tổ chức và quản lý trạng thái.',
                'blanks' => ['Redux', 'Redux-Toolkit'],
            ],
            [
                'question' => 'Để kiểm soát và xử lý các tình huống lỗi trong ứng dụng React, bạn có thể sử dụng blank_1 để quản lý và hiển thị các lỗi.',
                'blanks' => ['Error Boundaries'],
            ],
            [
                'question' => 'Khi bạn cần tối ưu hóa các phép toán DOM trong ứng dụng React, bạn có thể sử dụng blank_1 để hạn chế việc render lại không cần thiết.',
                'blanks' => ['React.memo'],
            ],
            [
                'question' => 'Để thực hiện việc kiểm tra các loại props được truyền vào component, bạn có thể sử dụng blank_1 để xác thực loại dữ liệu của props.',
                'blanks' => ['PropTypes'],
            ],
            [
                'question' => 'Khi bạn cần tích hợp các dữ liệu từ nhiều nguồn khác nhau trong một ứng dụng React, bạn có thể sử dụng thư viện blank_1 để quản lý và đồng bộ hóa dữ liệu.',
                'blanks' => ['Apollo Client'],
            ],
            [
                'question' => 'Để xây dựng các component có thể tái sử dụng với các tính năng phức tạp, bạn có thể sử dụng blank_1 để truyền các props cho component.',
                'blanks' => ['Higher Order Components'],
            ],
            [
                'question' => 'Khi bạn cần quản lý các state phức tạp với nhiều thuộc tính và hành vi, bạn có thể sử dụng blank_1 để tổ chức và quản lý các state.',
                'blanks' => ['useReducer'],
            ],
            [
                'question' => 'Để thực hiện việc tối ưu hóa thời gian tải và hiệu suất cho các component lớn, bạn có thể sử dụng blank_1 kết hợp với blank_2 để chia nhỏ các phần của ứng dụng.',
                'blanks' => ['code splitting', 'React.lazy'],
            ],
            [
                'question' => 'Để tối ưu hóa việc truyền dữ liệu và props cho các component, bạn có thể sử dụng blank_1 cùng với blank_2 để hạn chế việc truyền props không cần thiết.',
                'blanks' => ['React.memo', 'useCallback'],
            ],
            [
                'question' => 'Khi bạn cần xử lý các yêu cầu API phức tạp trong React, bạn có thể kết hợp hook blank_1 với blank_2 để thực hiện các phép toán bất đồng bộ.',
                'blanks' => ['useEffect', 'async'],
            ],
            [
                'question' => 'Để đảm bảo rằng các component trong ứng dụng React luôn cập nhật chính xác và nhất quán, bạn có thể sử dụng blank_1 để theo dõi và xử lý các thay đổi.',
                'blanks' => ['useEffect'],
            ],
            [
                'question' => 'Khi bạn cần để đồng bộ hóa các trạng thái và các hành vi phức tạp trong Redux, bạn có thể sử dụng blank_1 để quản lý các side effects.',
                'blanks' => ['Redux-Saga'],
            ],
            [
                'question' => 'Để kiểm soát việc rendering và cập nhật component một cách tối ưu, bạn có thể sử dụng blank_1 cùng với blank_2 để tối ưu hóa các phần của ứng dụng.',
                'blanks' => ['React.memo', 'useMemo'],
            ],
            [
                'question' => 'Khi bạn cần sử dụng các component có thể tái sử dụng và mở rộng dễ dàng, bạn có thể áp dụng kỹ thuật blank_1 trong ứng dụng React.',
                'blanks' => ['Composition'],
            ],
            [
                'question' => 'Để cải thiện việc kiểm soát các lỗi trong ứng dụng React, bạn có thể sử dụng blank_1 để bẫy và xử lý các lỗi xảy ra trong lifecycle của component.',
                'blanks' => ['Error Boundaries'],
            ],
            [
                'question' => 'Khi bạn cần để thực hiện việc cập nhật trạng thái một cách đồng bộ, bạn có thể sử dụng blank_1 cùng với blank_2 để quản lý các trạng thái phức tạp.',
                'blanks' => ['useReducer', 'useCallback'],
            ],
            [
                'question' => 'Để quản lý các sự kiện và trạng thái trong các component lớn, bạn có thể sử dụng thư viện blank_1 để tổ chức và đồng bộ hóa các sự kiện.',
                'blanks' => ['Redux'],
            ],
            [
                'question' => 'Khi bạn cần triển khai các hệ thống form phức tạp trong ứng dụng React, bạn có thể sử dụng thư viện blank_1 để quản lý và xác thực các form.',
                'blanks' => ['React Hook Form'],
            ],
            [
                'question' => 'Để tăng cường hiệu suất và khả năng mở rộng của ứng dụng React, bạn có thể sử dụng thư viện blank_1 để quản lý các dữ liệu phức tạp và bất đồng bộ.',
                'blanks' => ['Apollo Client'],
            ],
            [
                'question' => 'Khi bạn cần tối ưu hóa việc render các phần tử phức tạp với điều kiện cụ thể, bạn có thể sử dụng blank_1 để tránh việc render lại không cần thiết.',
                'blanks' => ['React.memo'],
            ],
            [
                'question' => 'Để quản lý các phần tử có thể kéo và thả trong ứng dụng React, bạn có thể sử dụng thư viện blank_1 để thực hiện các tính năng kéo và thả.',
                'blanks' => ['react-beautiful-dnd'],
            ],
            [
                'question' => 'Để tích hợp các công nghệ mới vào ứng dụng React, bạn có thể sử dụng thư viện blank_1 để làm việc với WebAssembly.',
                'blanks' => ['React-WASM'],
            ],
            [
                'question' => 'Khi bạn cần xử lý các phép toán phức tạp trong trạng thái của ứng dụng, bạn có thể sử dụng blank_1 cùng với blank_2 để quản lý trạng thái.',
                'blanks' => ['useReducer', 'useMemo'],
            ],
            [
                'question' => 'Để đảm bảo việc tối ưu hóa các giá trị trạng thái và các props, bạn có thể sử dụng blank_1 kết hợp với blank_2 để quản lý và tối ưu hóa.',
                'blanks' => ['useMemo', 'useCallback'],
            ],
            [
                'question' => 'Để xây dựng các component động và có thể mở rộng trong ứng dụng React, bạn có thể áp dụng kỹ thuật blank_1 cùng với blank_2.',
                'blanks' => ['HOC', 'render props'],
            ],
            [
                'question' => 'Khi bạn cần xử lý các tình huống cập nhật dữ liệu từ nhiều nguồn khác nhau, bạn có thể sử dụng thư viện blank_1 để quản lý các dữ liệu phức tạp.',
                'blanks' => ['Apollo Client'],
            ],
            [
                'question' => 'Để tối ưu hóa việc cập nhật và quản lý các component có mối quan hệ phức tạp, bạn có thể sử dụng blank_1 để quản lý các thay đổi trạng thái.',
                'blanks' => ['React.memo'],
            ],
            [
                'question' => 'Khi bạn cần thực hiện server-side rendering cho các component lớn, bạn có thể sử dụng blank_1 để cải thiện hiệu suất của ứng dụng React.',
                'blanks' => ['Next.js'],
            ],
            [
                'question' => 'Để xử lý các lỗi phức tạp trong ứng dụng React, bạn có thể sử dụng blank_1 kết hợp với blank_2 để bẫy và xử lý các lỗi.',
                'blanks' => ['Error Boundaries', 'logging libraries'],
            ],
            [
                'question' => 'Khi bạn cần xây dựng các ứng dụng với cấu trúc phức tạp, bạn có thể sử dụng blank_1 để chia nhỏ và quản lý các thành phần của ứng dụng.',
                'blanks' => ['React.lazy'],
            ],
            [
                'question' => 'Để quản lý các trạng thái đồng bộ và không đồng bộ trong ứng dụng React, bạn có thể sử dụng blank_1 để tổ chức và quản lý các cập nhật.',
                'blanks' => ['useEffect'],
            ],
            [
                'question' => 'Khi bạn cần tối ưu hóa việc truyền dữ liệu và props giữa các component, bạn có thể sử dụng blank_1 để tránh việc render lại không cần thiết.',
                'blanks' => ['React.memo'],
            ],
            [
                'question' => 'Để cải thiện hiệu suất của ứng dụng React khi xử lý các thành phần phức tạp, bạn có thể sử dụng blank_1 để quản lý các props và trạng thái.',
                'blanks' => ['React.memo'],
            ],
            [
                'question' => 'Khi bạn cần để thực hiện các phép toán phức tạp và tối ưu hóa việc cập nhật, bạn có thể sử dụng blank_1 để quản lý các giá trị state.',
                'blanks' => ['useReducer'],
            ],
            [
                'question' => 'Để tổ chức và quản lý các state và các hành vi trong ứng dụng React, bạn có thể sử dụng thư viện blank_1 để điều phối và quản lý các tác vụ.',
                'blanks' => ['Redux'],
            ],
        ];

        $essays_javascript =
        [
            [
                'question' => 'Để khai báo một biến trong JavaScript, bạn có thể sử dụng từ khóa blank_1.',
                'blanks' => ['var'],
            ],
            [
                'question' => 'Để khai báo một biến không thể thay đổi giá trị, bạn sử dụng từ khóa blank_1.',
                'blanks' => ['const'],
            ],
            [
                'question' => 'Để khai báo một biến có thể thay đổi giá trị, bạn sử dụng từ khóa blank_1.',
                'blanks' => ['let'],
            ],
            [
                'question' => 'Trong JavaScript, để định nghĩa một hàm, bạn sử dụng từ khóa blank_1.',
                'blanks' => ['function'],
            ],
            [
                'question' => 'Để gọi một hàm trong JavaScript, bạn sử dụng cú pháp blank_1.',
                'blanks' => ['functionName()'],
            ],
            [
                'question' => 'Để kiểm tra điều kiện trong JavaScript, bạn có thể sử dụng cấu trúc blank_1.',
                'blanks' => ['if-else'],
            ],
            [
                'question' => 'Để lặp qua một mảng trong JavaScript, bạn có thể sử dụng vòng lặp blank_1.',
                'blanks' => ['for'],
            ],
            [
                'question' => 'Trong JavaScript, để tạo một mảng mới từ một mảng hiện có, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['map'],
            ],
            [
                'question' => 'Để gán giá trị cho một thuộc tính của đối tượng, bạn có thể sử dụng cú pháp blank_1.',
                'blanks' => ['object.property = value'],
            ],
            [
                'question' => 'Để lấy giá trị của một thuộc tính từ một đối tượng, bạn sử dụng cú pháp blank_1.',
                'blanks' => ['object.property'],
            ],
            [
                'question' => 'Trong JavaScript, để kiểm tra một điều kiện và thực hiện một hành động nếu điều kiện đó đúng, bạn có thể sử dụng câu lệnh blank_1.',
                'blanks' => ['if'],
            ],
            [
                'question' => 'Để xử lý lỗi trong JavaScript, bạn có thể sử dụng cấu trúc blank_1.',
                'blanks' => ['try-catch'],
            ],
            [
                'question' => 'Để định nghĩa một lớp (class) trong JavaScript, bạn sử dụng từ khóa blank_1.',
                'blanks' => ['class'],
            ],
            [
                'question' => 'Để tạo một đối tượng mới từ một lớp trong JavaScript, bạn sử dụng cú pháp blank_1.',
                'blanks' => ['new ClassName()'],
            ],
            [
                'question' => 'Để kiểm tra loại dữ liệu của một biến, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['typeof'],
            ],
            [
                'question' => 'Để kết hợp hai chuỗi trong JavaScript, bạn có thể sử dụng toán tử blank_1.',
                'blanks' => ['+'],
            ],
            [
                'question' => 'Trong JavaScript, để thực hiện một hành động nhiều lần, bạn có thể sử dụng cấu trúc blank_1.',
                'blanks' => ['loop'],
            ],
            [
                'question' => 'Để định nghĩa một hàm với các tham số trong JavaScript, bạn sử dụng cú pháp blank_1.',
                'blanks' => ['function myFunction(param1, param2) {}'],
            ],
            [
                'question' => 'Để trả về một giá trị từ một hàm trong JavaScript, bạn sử dụng câu lệnh blank_1.',
                'blanks' => ['return'],
            ],
            [
                'question' => 'Để tạo một đối tượng literal trong JavaScript, bạn sử dụng cú pháp blank_1.',
                'blanks' => ['{ key: value }'],
            ],
            [
                'question' => 'Để chuyển đổi một chuỗi thành số trong JavaScript, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['parseInt'],
            ],
            [
                'question' => 'Để định nghĩa một hàm nặc danh trong JavaScript, bạn có thể sử dụng cú pháp blank_1.',
                'blanks' => ['function() {}'],
            ],
            [
                'question' => 'Để tạo một promise mới trong JavaScript, bạn sử dụng cú pháp blank_1.',
                'blanks' => ['new Promise((resolve, reject) => {})'],
            ],
            [
                'question' => 'Để sử dụng các hàm trong một promise, bạn cần sử dụng phương thức blank_1.',
                'blanks' => ['then'],
            ],
            [
                'question' => 'Để lặp qua các thuộc tính của một đối tượng trong JavaScript, bạn có thể sử dụng vòng lặp blank_1.',
                'blanks' => ['for...in'],
            ],
            [
                'question' => 'Để xử lý các giá trị không xác định trong JavaScript, bạn có thể sử dụng từ khóa blank_1.',
                'blanks' => ['undefined'],
            ],
            [
                'question' => 'Để định nghĩa một thuộc tính chỉ đọc trong một đối tượng, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['Object.defineProperty'],
            ],
            [
                'question' => 'Để kết thúc một chuỗi với ký tự mới dòng trong JavaScript, bạn có thể sử dụng ký tự blank_1.',
                'blanks' => ['\n'],
            ],
            [
                'question' => 'Để tạo một mảng mới từ một mảng hiện có, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['slice'],
            ],
            [
                'question' => 'Để lấy giá trị đầu tiên của mảng trong JavaScript, bạn có thể sử dụng thuộc tính blank_1.',
                'blanks' => ['[0]'],
            ],
            [
                'question' => 'Để thay đổi giá trị của một thuộc tính của đối tượng trong JavaScript, bạn có thể sử dụng cú pháp blank_1.',
                'blanks' => ['object.property = newValue'],
            ],
            [
                'question' => 'Để kiểm tra xem một đối tượng có thuộc tính nhất định không, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['hasOwnProperty'],
            ],
            [
                'question' => 'Để tạo một chuỗi từ các ký tự riêng biệt trong JavaScript, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['join'],
            ],
            [
                'question' => 'Để thực hiện việc so sánh hai giá trị trong JavaScript, bạn có thể sử dụng toán tử blank_1.',
                'blanks' => ['==='],
            ],
            [
                'question' => 'Để thay đổi kiểu dữ liệu của một biến thành chuỗi trong JavaScript, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['String'],
            ],
            [
                'question' => 'Để lấy độ dài của một chuỗi trong JavaScript, bạn có thể sử dụng thuộc tính blank_1.',
                'blanks' => ['length'],
            ],
            [
                'question' => 'Để loại bỏ khoảng trắng ở đầu và cuối chuỗi trong JavaScript, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['trim'],
            ],
            [
                'question' => 'Để kiểm tra xem một chuỗi có chứa một ký tự hoặc chuỗi con nào đó không, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['includes'],
            ],
            [
                'question' => 'Để nối nhiều chuỗi thành một trong JavaScript, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['concat'],
            ],
            [
                'question' => 'Để chuyển đổi một chuỗi thành một số thập phân trong JavaScript, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['parseFloat'],
            ],
            [
                'question' => 'Để kiểm tra một giá trị có phải là số không, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['isNaN'],
            ],
            [
                'question' => 'Để định nghĩa một đối tượng literal với các thuộc tính động trong JavaScript, bạn có thể sử dụng cú pháp blank_1.',
                'blanks' => ['{ [key]: value }'],
            ],
            [
                'question' => 'Để định nghĩa một hàm với nhiều tham số mặc định trong JavaScript, bạn có thể sử dụng cú pháp blank_1.',
                'blanks' => ['function myFunction(param1 = value1, param2 = value2) {}'],
            ],
            [
                'question' => 'Để sử dụng hàm arrow function với từ khóa `this` trong JavaScript, bạn nên tránh sử dụng blank_1 vì nó không gán `this` theo cách truyền thống.',
                'blanks' => ['arrow functions'],
            ],
            [
                'question' => 'Để khai báo một lớp với các phương thức static trong JavaScript, bạn sử dụng từ khóa blank_1.',
                'blanks' => ['static'],
            ],
            [
                'question' => 'Để sử dụng các module trong JavaScript, bạn có thể xuất các thành phần bằng từ khóa blank_1 và nhập chúng bằng từ khóa blank_2.',
                'blanks' => ['export', 'import'],
            ],
            [
                'question' => 'Để xử lý các Promise và thực hiện các hành động sau khi Promise được resolved hoặc rejected, bạn có thể sử dụng phương thức blank_1 và blank_2.',
                'blanks' => ['then', 'catch'],
            ],
            [
                'question' => 'Để tạo một Generator function trong JavaScript, bạn sử dụng cú pháp blank_1.',
                'blanks' => ['function*'],
            ],
            [
                'question' => 'Để thao tác với các đối tượng và lớp trong JavaScript, bạn có thể sử dụng từ khóa blank_1 để kế thừa từ một lớp cơ sở.',
                'blanks' => ['extends'],
            ],
            [
                'question' => 'Để thực hiện các thao tác đồng bộ với các đối tượng và arrays trong JavaScript, bạn có thể sử dụng phương thức blank_1 từ đối tượng Map.',
                'blanks' => ['forEach'],
            ],
            [
                'question' => 'Khi bạn cần định nghĩa một đối tượng với các thuộc tính computed, bạn có thể sử dụng cú pháp blank_1.',
                'blanks' => ['{ [key]: value }'],
            ],
            [
                'question' => 'Để kiểm tra một đối tượng có chứa một thuộc tính cụ thể trong JavaScript, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['Object.prototype.hasOwnProperty'],
            ],
            [
                'question' => 'Để thực hiện một phép biến đổi dữ liệu phức tạp với các Stream trong JavaScript, bạn có thể sử dụng các phương thức blank_1 và blank_2 từ RxJS.',
                'blanks' => ['map', 'filter'],
            ],
            [
                'question' => 'Để xử lý các async operations với async/await, bạn cần bao quanh đoạn code với câu lệnh blank_1.',
                'blanks' => ['try-catch'],
            ],
            [
                'question' => 'Để sử dụng các lớp con và phương thức override trong JavaScript, bạn có thể sử dụng từ khóa blank_1 để ghi đè các phương thức của lớp cơ sở.',
                'blanks' => ['super'],
            ],
            [
                'question' => 'Để định nghĩa một mô hình dữ liệu bất biến trong JavaScript, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['Object.freeze'],
            ],
            [
                'question' => 'Để làm việc với các cấu trúc dữ liệu bất đồng bộ, bạn có thể sử dụng phương thức blank_1 của đối tượng Promise.',
                'blanks' => ['Promise.all'],
            ],
            [
                'question' => 'Khi bạn cần thực hiện các phép biến đổi dữ liệu với các operator trong JavaScript, bạn có thể sử dụng các operator như blank_1 và blank_2.',
                'blanks' => ['map', 'reduce'],
            ],
            [
                'question' => 'Để tạo một instance của một lớp và thực hiện các phép toán async trong constructor, bạn nên sử dụng từ khóa blank_1.',
                'blanks' => ['async'],
            ],
            [
                'question' => 'Để sử dụng các decorators trong JavaScript, bạn cần cài đặt các plugin và sử dụng cú pháp blank_1.',
                'blanks' => ['@decorator'],
            ],
            [
                'question' => 'Để tối ưu hóa hiệu suất của các vòng lặp phức tạp trong JavaScript, bạn có thể sử dụng phương pháp blank_1.',
                'blanks' => ['memoization'],
            ],
            [
                'question' => 'Để định nghĩa các lớp với các phương thức private trong JavaScript, bạn có thể sử dụng từ khóa blank_1.',
                'blanks' => ['#'],
            ],
            [
                'question' => 'Để thao tác với các collections như Set và Map, bạn có thể sử dụng các phương thức như blank_1 và blank_2.',
                'blanks' => ['add', 'delete'],
            ],
            [
                'question' => 'Để thực hiện việc phân tích mã nguồn và tối ưu hóa các hàm trong JavaScript, bạn có thể sử dụng công cụ blank_1.',
                'blanks' => ['profiling'],
            ],
            [
                'question' => 'Để sử dụng các template literals trong JavaScript, bạn cần bao quanh chuỗi với ký tự blank_1.',
                'blanks' => ['`'],
            ],
            [
                'question' => 'Để tạo một hàm bất đồng bộ với async/await, bạn có thể định nghĩa hàm với từ khóa blank_1.',
                'blanks' => ['async'],
            ],
            [
                'question' => 'Để gán giá trị mặc định cho các tham số hàm trong JavaScript, bạn sử dụng cú pháp blank_1.',
                'blanks' => ['param = defaultValue'],
            ],
            [
                'question' => 'Để định nghĩa các property và method trong một class, bạn có thể sử dụng cú pháp blank_1.',
                'blanks' => ['class MyClass { method() {} }'],
            ],
            [
                'question' => 'Để thay đổi các thuộc tính của đối tượng trong thời gian runtime, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['Object.defineProperty'],
            ],
            [
                'question' => 'Để xử lý các chuỗi JSON trong JavaScript, bạn có thể sử dụng các phương thức blank_1 và blank_2.',
                'blanks' => ['JSON.parse', 'JSON.stringify'],
            ],
            [
                'question' => 'Để thực hiện việc xử lý các callback functions trong JavaScript, bạn có thể sử dụng các phương thức blank_1 và blank_2.',
                'blanks' => ['setTimeout', 'setInterval'],
            ],
            [
                'question' => 'Để thực hiện việc làm việc với các I/O operations và streams trong JavaScript, bạn có thể sử dụng các module blank_1 và blank_2.',
                'blanks' => ['fs', 'stream'],
            ],
            [
                'question' => 'Để định nghĩa các thuộc tính và phương thức của đối tượng theo cách động, bạn có thể sử dụng cú pháp blank_1.',
                'blanks' => ['object[key] = value'],
            ],
            [
                'question' => 'Để tạo một mô hình dữ liệu đồng bộ và bất đồng bộ trong JavaScript, bạn có thể sử dụng các kỹ thuật như blank_1 và blank_2.',
                'blanks' => ['async/await', 'Promise.all'],
            ],
            [
                'question' => 'Để thao tác với các loại dữ liệu phức tạp và hỗ trợ kế thừa trong JavaScript, bạn cần sử dụng từ khóa blank_1.',
                'blanks' => ['class'],
            ],
            [
                'question' => 'Để thực hiện việc xử lý các sự kiện đồng bộ và bất đồng bộ trong JavaScript, bạn có thể sử dụng các phương thức blank_1 và blank_2.',
                'blanks' => ['addEventListener', 'removeEventListener'],
            ],
            [
                'question' => 'Để thực hiện việc tối ưu hóa các thao tác với DOM trong JavaScript, bạn có thể sử dụng phương pháp blank_1.',
                'blanks' => ['documentFragment'],
            ],
            [
                'question' => 'Để định nghĩa các tham số với giá trị mặc định trong JavaScript, bạn có thể sử dụng cú pháp blank_1.',
                'blanks' => ['function myFunction(param = defaultValue) {}'],
            ],
            [
                'question' => 'Để thao tác với các mô hình dữ liệu bất đồng bộ và các streams dữ liệu phức tạp, bạn có thể sử dụng các phương thức blank_1 và blank_2.',
                'blanks' => ['fetch', 'stream'],
            ],
            [
                'question' => 'Để thực hiện lazy evaluation trong JavaScript, bạn có thể sử dụng các kỹ thuật như blank_1 để trì hoãn việc thực hiện hàm cho đến khi cần.',
                'blanks' => ['caching'],
            ],
            [
                'question' => 'Khi sử dụng Web Workers để thực hiện các tác vụ bất đồng bộ, bạn có thể gửi dữ liệu giữa các worker và main thread bằng cách sử dụng phương thức blank_1.',
                'blanks' => ['postMessage'],
            ],
            [
                'question' => 'Để xử lý các tình huống phức tạp với WebAssembly trong JavaScript, bạn cần hiểu các khái niệm như blank_1 và blank_2.',
                'blanks' => ['module', 'instance'],
            ],
            [
                'question' => 'Để tạo các decorator cho các phương thức trong một lớp, bạn cần sử dụng cú pháp blank_1 và cài đặt các thư viện hỗ trợ decorators.',
                'blanks' => ['@decorator'],
            ],
            [
                'question' => 'Để đảm bảo tính đồng bộ khi thao tác với các async function và generators, bạn có thể kết hợp các kỹ thuật blank_1 và blank_2.',
                'blanks' => ['async/await', 'yield'],
            ],
            [
                'question' => 'Khi xử lý các tình huống bất đồng bộ với các streams trong JavaScript, bạn có thể sử dụng các phương thức như blank_1 và blank_2 để đọc và ghi dữ liệu.',
                'blanks' => ['readableStream', 'writableStream'],
            ],
            [
                'question' => 'Để thực hiện deep cloning một đối tượng trong JavaScript, bạn có thể sử dụng các kỹ thuật như blank_1 và blank_2.',
                'blanks' => ['structuredClone', 'JSON.parse/JSON.stringify'],
            ],
            [
                'question' => 'Để xây dựng một ứng dụng SPA (Single Page Application) hiệu suất cao với React, bạn cần hiểu các khái niệm về blank_1 và blank_2.',
                'blanks' => ['React.memo', 'useCallback'],
            ],
            [
                'question' => 'Để thực hiện các phép biến đổi động trên các đối tượng trong JavaScript, bạn có thể sử dụng cú pháp blank_1 và blank_2.',
                'blanks' => ['Object.defineProperties', 'Object.create'],
            ],
            [
                'question' => 'Để xử lý các tình huống phức tạp với các proxy trong JavaScript, bạn có thể sử dụng các traps như blank_1 và blank_2 để can thiệp vào các hành động của đối tượng.',
                'blanks' => ['get', 'set'],
            ],
            [
                'question' => 'Khi sử dụng các closures trong JavaScript để bảo vệ dữ liệu khỏi bị thay đổi, bạn cần hiểu các khái niệm về blank_1 và blank_2.',
                'blanks' => ['closure', 'private fields'],
            ],
            [
                'question' => 'Để tối ưu hóa hiệu suất của các hàm trong JavaScript với các kỹ thuật như memoization, bạn có thể sử dụng các công cụ như blank_1 để tránh tính toán lại các kết quả.',
                'blanks' => ['lodash.memoize'],
            ],
            [
                'question' => 'Để thực hiện các phép biến đổi động trên các cấu trúc dữ liệu trong JavaScript, bạn có thể sử dụng các phương thức blank_1 và blank_2.',
                'blanks' => ['Array.prototype.flatMap', 'Object.assign'],
            ],
            [
                'question' => 'Để xử lý các tình huống đồng bộ và bất đồng bộ với các module trong JavaScript, bạn cần sử dụng các kỹ thuật như blank_1 và blank_2.',
                'blanks' => ['dynamic imports', 'import()'],
            ],
            [
                'question' => 'Để kiểm tra hiệu suất của mã nguồn JavaScript trong trình duyệt, bạn có thể sử dụng các công cụ và API như blank_1 và blank_2.',
                'blanks' => ['Performance API', 'DevTools'],
            ],
            [
                'question' => 'Khi sử dụng các Proxy để điều chỉnh hành vi của các đối tượng trong JavaScript, bạn cần hiểu các traps như blank_1 và blank_2.',
                'blanks' => ['get', 'set'],
            ],
            [
                'question' => 'Để làm việc với các kết nối mạng và thực hiện các phép biến đổi dữ liệu trong JavaScript, bạn có thể sử dụng các công cụ và API như blank_1 và blank_2.',
                'blanks' => ['Fetch API', 'WebSocket'],
            ],
            [
                'question' => 'Để xử lý các yêu cầu HTTP phức tạp và tối ưu hóa các giao tiếp mạng trong JavaScript, bạn có thể sử dụng các công cụ như blank_1 và blank_2.',
                'blanks' => ['axios', 'superagent'],
            ],
            [
                'question' => 'Để tối ưu hóa mã nguồn JavaScript với các kỹ thuật như code splitting, bạn có thể sử dụng các công cụ như blank_1 và blank_2.',
                'blanks' => ['webpack', 'rollup'],
            ],
            [
                'question' => 'Để sử dụng các async iterators trong JavaScript, bạn cần khai báo các function và loop bằng cú pháp blank_1.',
                'blanks' => ['for await ... of'],
            ],
            [
                'question' => 'Khi làm việc với các kiểu dữ liệu bất đồng bộ phức tạp trong JavaScript, bạn có thể sử dụng các API như blank_1 và blank_2 để đọc và ghi dữ liệu.',
                'blanks' => ['Streams API', 'ReadableStream'],
            ],
            [
                'question' => 'Để tạo các hàm đệ quy phức tạp trong JavaScript, bạn cần hiểu các khái niệm về blank_1 và blank_2.',
                'blanks' => ['tail call optimization', 'recursion'],
            ],
            [
                'question' => 'Để thao tác với các cấu trúc dữ liệu phức tạp và làm việc với các phương thức nén dữ liệu, bạn có thể sử dụng các công cụ như blank_1 và blank_2.',
                'blanks' => ['Compression API', 'brotli'],
            ],
            [
                'question' => 'Để xây dựng các ứng dụng JavaScript có thể mở rộng với các thiết kế module và plugin, bạn có thể sử dụng các công cụ và kỹ thuật như blank_1 và blank_2.',
                'blanks' => ['ES Modules', 'CommonJS'],
            ],
            [
                'question' => 'Để thực hiện các phép toán phức tạp với các đối tượng Immutable trong JavaScript, bạn có thể sử dụng thư viện blank_1.',
                'blanks' => ['Immutable.js'],
            ],
            [
                'question' => 'Để tối ưu hóa các thao tác DOM phức tạp và làm việc với các kỹ thuật high-performance rendering, bạn có thể sử dụng các công cụ như blank_1 và blank_2.',
                'blanks' => ['requestAnimationFrame', 'virtual DOM'],
            ],
            [
                'question' => 'Để làm việc với các kỹ thuật như microtasks và macrotasks trong JavaScript, bạn cần hiểu các khái niệm về blank_1 và blank_2.',
                'blanks' => ['event loop', 'task queue'],
            ],
            [
                'question' => 'Để xây dựng các giải pháp JavaScript có thể mở rộng và dễ bảo trì, bạn có thể sử dụng các thiết kế như blank_1 và blank_2.',
                'blanks' => ['design patterns', 'modular architecture'],
            ],
            [
                'question' => 'Khi thực hiện các phép toán đồng bộ và bất đồng bộ với các đối tượng phức tạp, bạn có thể sử dụng các phương pháp như blank_1 và blank_2.',
                'blanks' => ['async/await', 'Promise chaining'],
            ],
            [
                'question' => 'Để làm việc với các kỹ thuật advanced như reactive programming trong JavaScript, bạn có thể sử dụng các thư viện và công cụ như blank_1 và blank_2.',
                'blanks' => ['RxJS', 'Observables'],
            ],
            [
                'question' => 'Để quản lý các ứng dụng JavaScript lớn và phức tạp với các kiến trúc như component-based, bạn có thể sử dụng các thư viện và framework như blank_1 và blank_2.',
                'blanks' => ['React', 'Vue'],
            ],
            [
                'question' => 'Để tối ưu hóa mã nguồn và làm việc với các quy trình build và deployment, bạn có thể sử dụng các công cụ như blank_1 và blank_2.',
                'blanks' => ['Babel', 'Webpack'],
            ],
            [
                'question' => 'Để xử lý các lỗi phức tạp và gỡ lỗi trong JavaScript, bạn có thể sử dụng các công cụ và kỹ thuật như blank_1 và blank_2.',
                'blanks' => ['source maps', 'debugging tools'],
            ],
        ];
        $essays_php =
        [
            [
                'question' => 'Để khai báo một biến trong PHP, bạn sử dụng ký tự blank_1.',
                'blanks' => ['$',],
            ],
            [
                'question' => 'Để in ra màn hình nội dung của biến trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['echo'],
            ],
            [
                'question' => 'Để kết nối đến cơ sở dữ liệu MySQL trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['mysqli_connect'],
            ],
            [
                'question' => 'Để kiểm tra xem một biến có được khai báo hay không trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['isset'],
            ],
            [
                'question' => 'Để làm việc với các chuỗi trong PHP, bạn có thể sử dụng hàm blank_1 để nối các chuỗi lại với nhau.',
                'blanks' => ['.'],
            ],
            [
                'question' => 'Để lấy phần tử đầu tiên của một mảng trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['reset'],
            ],
            [
                'question' => 'Để lấy kích thước của một mảng trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['count'],
            ],
            [
                'question' => 'Để loại bỏ các khoảng trắng thừa ở đầu và cuối chuỗi trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['trim'],
            ],
            [
                'question' => 'Để kiểm tra xem một chuỗi có chứa một ký tự hoặc chuỗi con nào đó không, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['strpos'],
            ],
            [
                'question' => 'Để tạo một lớp trong PHP, bạn sử dụng từ khóa blank_1.',
                'blanks' => ['class'],
            ],
            [
                'question' => 'Để khai báo một hàm trong PHP, bạn sử dụng từ khóa blank_1.',
                'blanks' => ['function'],
            ],
            [
                'question' => 'Để trả về giá trị từ một hàm trong PHP, bạn sử dụng từ khóa blank_1.',
                'blanks' => ['return'],
            ],
            [
                'question' => 'Để thực hiện một vòng lặp trong PHP từ 1 đến 10, bạn có thể sử dụng vòng lặp blank_1.',
                'blanks' => ['for'],
            ],
            [
                'question' => 'Để thực hiện một vòng lặp qua tất cả các phần tử của một mảng, bạn có thể sử dụng vòng lặp blank_1.',
                'blanks' => ['foreach'],
            ],
            [
                'question' => 'Để kiểm tra một điều kiện trong PHP, bạn sử dụng cấu trúc điều kiện blank_1.',
                'blanks' => ['if'],
            ],
            [
                'question' => 'Để thực hiện một câu lệnh điều kiện nếu không phải là "true", bạn có thể sử dụng blank_1.',
                'blanks' => ['else'],
            ],
            [
                'question' => 'Để xử lý lỗi trong PHP, bạn có thể sử dụng cấu trúc blank_1.',
                'blanks' => ['try-catch'],
            ],
            [
                'question' => 'Để đọc dữ liệu từ một file trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['fread'],
            ],
            [
                'question' => 'Để ghi dữ liệu vào một file trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['fwrite'],
            ],
            [
                'question' => 'Để bao gồm nội dung của một file khác vào file hiện tại trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['include'],
            ],
            [
                'question' => 'Để định nghĩa một hằng số trong PHP, bạn sử dụng hàm blank_1.',
                'blanks' => ['define'],
            ],
            [
                'question' => 'Để lấy giá trị của một biến môi trường trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['getenv'],
            ],
            [
                'question' => 'Để chuyển đổi một chuỗi thành số nguyên trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['intval'],
            ],
            [
                'question' => 'Để chuyển đổi một số thành chuỗi trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['strval'],
            ],
            [
                'question' => 'Để thiết lập một cookie trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['setcookie'],
            ],
            [
                'question' => 'Để xóa một cookie trong PHP, bạn cần thiết lập giá trị của nó với blank_1 và thời gian trong quá khứ.',
                'blanks' => ['null'],
            ],
            [
                'question' => 'Để kiểm tra xem một file có tồn tại trong PHP hay không, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['file_exists'],
            ],
            [
                'question' => 'Để thực hiện redirect đến một URL khác trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['header'],
            ],
            [
                'question' => 'Để lấy thông tin về phiên (session) trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['session_start'],
            ],
            [
                'question' => 'Để lưu dữ liệu vào phiên (session) trong PHP, bạn có thể gán giá trị cho biến blank_1.',
                'blanks' => ['$_SESSION'],
            ],
            [
                'question' => 'Để thực hiện query cơ sở dữ liệu MySQL trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['mysqli_query'],
            ],
            [
                'question' => 'Để kết nối đến cơ sở dữ liệu MySQL bằng PDO trong PHP, bạn cần tạo một đối tượng blank_1.',
                'blanks' => ['PDO'],
            ],
            [
                'question' => 'Để lấy tất cả các dòng dữ liệu từ một truy vấn PDO, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['fetchAll'],
            ],
            [
                'question' => 'Để chạy một truy vấn SQL trong MySQLi, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['query'],
            ],
            [
                'question' => 'Để thực hiện một truy vấn với tham số trong PDO, bạn có thể sử dụng các phương thức như blank_1.',
                'blanks' => ['prepare', 'execute'],
            ],
            [
                'question' => 'Để xử lý các lỗi cơ sở dữ liệu trong PHP, bạn có thể sử dụng cấu trúc blank_1.',
                'blanks' => ['try-catch'],
            ],
            [
                'question' => 'Để xóa một phần tử khỏi mảng trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['unset'],
            ],
            [
                'question' => 'Để thực hiện việc phân trang (pagination) trong PHP, bạn có thể sử dụng kỹ thuật blank_1.',
                'blanks' => ['LIMIT'],
            ],
            [
                'question' => 'Để chuyển đổi một chuỗi thành mảng trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['explode'],
            ],
            [
                'question' => 'Để nối các phần tử của một mảng thành chuỗi trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['implode'],
            ],
            [
                'question' => 'Để tạo một lớp trừu tượng trong PHP, bạn sử dụng từ khóa blank_1.',
                'blanks' => ['abstract'],
            ],
            [
                'question' => 'Để thực hiện một phép kế thừa từ một lớp cha trong PHP, bạn sử dụng từ khóa blank_1.',
                'blanks' => ['extends'],
            ],
            [
                'question' => 'Để gọi phương thức của lớp cha từ lớp con trong PHP, bạn sử dụng từ khóa blank_1.',
                'blanks' => ['parent::'],
            ],
            [
                'question' => 'Để thực hiện một phép thử nghiệm (unit test) cho một lớp trong PHP, bạn có thể sử dụng framework blank_1.',
                'blanks' => ['PHPUnit'],
            ],
            [
                'question' => 'Để định nghĩa một phương thức tĩnh trong PHP, bạn sử dụng từ khóa blank_1.',
                'blanks' => ['static'],
            ],
            [
                'question' => 'Để kiểm tra xem một lớp có cài đặt một interface nào đó không, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['class_implements'],
            ],
            [
                'question' => 'Để thực hiện một kết nối đến cơ sở dữ liệu bằng PDO với chế độ gán lỗi là exception, bạn cần thiết lập thuộc tính blank_1.',
                'blanks' => ['PDO::ATTR_ERRMODE'],
            ],
            [
                'question' => 'Để lấy dữ liệu từ một API sử dụng cURL trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['curl_exec'],
            ],
            [
                'question' => 'Để gửi một HTTP POST request sử dụng cURL trong PHP, bạn cần thiết lập option blank_1.',
                'blanks' => ['CURLOPT_POSTFIELDS'],
            ],
            [
                'question' => 'Để sử dụng composer để quản lý các thư viện phụ thuộc trong PHP, bạn cần phải viết một tệp tin blank_1.',
                'blanks' => ['composer.json'],
            ],
            [
                'question' => 'Để định nghĩa một trait trong PHP, bạn sử dụng từ khóa blank_1.',
                'blanks' => ['trait'],
            ],
            [
                'question' => 'Để lấy tất cả các thuộc tính và phương thức của một lớp trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['get_class_methods'],
            ],
            [
                'question' => 'Để chạy một câu lệnh SQL bằng PDO và lấy dữ liệu, bạn sử dụng phương thức blank_1.',
                'blanks' => ['query'],
            ],
            [
                'question' => 'Để thực hiện một truy vấn SQL với nhiều điều kiện trong PHP, bạn có thể sử dụng hàm blank_1 để xây dựng chuỗi điều kiện.',
                'blanks' => ['sprintf'],
            ],
            [
                'question' => 'Để thực hiện tải lên file trong PHP, bạn cần xử lý biến blank_1.',
                'blanks' => ['$_FILES'],
            ],
            [
                'question' => 'Để tạo một query builder trong Laravel, bạn có thể sử dụng phương thức blank_1 của đối tượng DB.',
                'blanks' => ['table'],
            ],
            [
                'question' => 'Để bảo vệ một route khỏi sự truy cập của người dùng chưa đăng nhập trong Laravel, bạn có thể sử dụng middleware blank_1.',
                'blanks' => ['auth'],
            ],
            [
                'question' => 'Để thực hiện một truy vấn với các điều kiện phức tạp trong Laravel Eloquent, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['where'],
            ],
            [
                'question' => 'Để lưu trữ các cấu hình ứng dụng trong Laravel, bạn cần lưu chúng vào thư mục blank_1.',
                'blanks' => ['config'],
            ],
            [
                'question' => 'Để tạo một route trong Laravel, bạn định nghĩa route trong file blank_1.',
                'blanks' => ['web.php'],
            ],
            [
                'question' => 'Để xử lý các request và trả về response trong Laravel, bạn có thể tạo một controller và sử dụng phương thức blank_1.',
                'blanks' => ['index'],
            ],
            [
                'question' => 'Để thực hiện các phép toán trên chuỗi trong PHP, bạn có thể sử dụng các hàm trong thư viện blank_1.',
                'blanks' => ['string'],
            ],
            [
                'question' => 'Để tạo một job trong Laravel, bạn sử dụng artisan command blank_1.',
                'blanks' => ['make:job'],
            ],
            [
                'question' => 'Để xử lý sự kiện trong Laravel, bạn có thể sử dụng lớp blank_1.',
                'blanks' => ['Event'],
            ],
            [
                'question' => 'Để thực hiện tìm kiếm dữ liệu trong Laravel với điều kiện cụ thể, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['search'],
            ],
            [
                'question' => 'Để bảo mật một ứng dụng PHP bằng cách mã hóa dữ liệu nhạy cảm, bạn có thể sử dụng thư viện blank_1.',
                'blanks' => ['openssl'],
            ],
            [
                'question' => 'Để thực hiện một điều kiện IF trong PHP sử dụng nhiều điều kiện, bạn có thể sử dụng cú pháp blank_1.',
                'blanks' => ['&&'],
            ],
            [
                'question' => 'Để thực hiện việc quản lý phiên (sessions) trong PHP, bạn cần gọi hàm blank_1.',
                'blanks' => ['session_start'],
            ],
            [
                'question' => 'Để lấy một biến môi trường trong Laravel, bạn sử dụng hàm blank_1.',
                'blanks' => ['env'],
            ],
            [
                'question' => 'Để gửi email trong Laravel, bạn có thể sử dụng lớp blank_1.',
                'blanks' => ['Mail'],
            ],
            [
                'question' => 'Để thực hiện kiểm tra xác thực (authentication) trong Laravel, bạn có thể sử dụng middleware blank_1.',
                'blanks' => ['auth'],
            ],
            [
                'question' => 'Để kiểm tra xem một biến có phải là mảng hay không trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['is_array'],
            ],
            [
                'question' => 'Để định nghĩa các route API trong Laravel, bạn có thể cấu hình chúng trong file blank_1.',
                'blanks' => ['api.php'],
            ],
            [
                'question' => 'Để xử lý các lỗi trong Laravel, bạn có thể cấu hình chúng trong thư mục blank_1.',
                'blanks' => ['exceptions'],
            ],
            [
                'question' => 'Để tạo một migration trong Laravel, bạn sử dụng artisan command blank_1.',
                'blanks' => ['make:migration'],
            ],
            [
                'question' => 'Để quản lý các yêu cầu HTTP và thực hiện các hành động theo phương thức HTTP trong Laravel, bạn có thể sử dụng lớp blank_1.',
                'blanks' => ['Request'],
            ],
            [
                'question' => 'Để tạo một seeder trong Laravel, bạn sử dụng artisan command blank_1.',
                'blanks' => ['make:seeder'],
            ],
            [
                'question' => 'Để kiểm tra xem một đối tượng có phải là đối tượng lớp cụ thể không trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['instanceof'],
            ],
            [
                'question' => 'Để thực hiện truy vấn cơ sở dữ liệu sử dụng JOIN trong Laravel Eloquent, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['join'],
            ],
            [
                'question' => 'Để triển khai Dependency Injection trong PHP, bạn có thể sử dụng blank_1 để định nghĩa các dịch vụ và phụ thuộc.',
                'blanks' => ['Service Container'],
            ],
            [
                'question' => 'Để xử lý các exception trong PHP và trả về một response tùy chỉnh, bạn có thể sử dụng khối blank_1.',
                'blanks' => ['catch'],
            ],
            [
                'question' => 'Khi sử dụng PDO để thực hiện một truy vấn, bạn có thể sử dụng phương thức blank_1 để thực hiện truy vấn an toàn.',
                'blanks' => ['prepare'],
            ],
            [
                'question' => 'Để tối ưu hóa hiệu suất truy vấn trong Laravel bằng cách chỉ tải các thuộc tính cần thiết, bạn sử dụng phương thức blank_1.',
                'blanks' => ['select'],
            ],
            [
                'question' => 'Để tạo một Migration mới với một chỉ mục duy nhất trên cột, bạn có thể sử dụng phương thức blank_1 trong Laravel.',
                'blanks' => ['unique'],
            ],
            [
                'question' => 'Để định nghĩa một route nhóm trong Laravel với middleware, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['middleware'],
            ],
            [
                'question' => 'Khi làm việc với Eloquent, bạn có thể sử dụng phương thức blank_1 để lấy tất cả các bản ghi từ một bảng.',
                'blanks' => ['all'],
            ],
            [
                'question' => 'Để lấy một bản ghi cụ thể từ cơ sở dữ liệu với một điều kiện, bạn sử dụng phương thức blank_1 trong Eloquent.',
                'blanks' => ['find'],
            ],
            [
                'question' => 'Để thêm một trường mới vào bảng cơ sở dữ liệu trong Laravel, bạn có thể tạo một migration với lệnh blank_1.',
                'blanks' => ['make:migration'],
            ],
            [
                'question' => 'Để xử lý các trường hợp khi một tham số không được truyền vào phương thức trong PHP, bạn có thể sử dụng blank_1.',
                'blanks' => ['default values'],
            ],
            [
                'question' => 'Để kiểm tra xem một giá trị có phải là số nguyên không trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['is_int'],
            ],
            [
                'question' => 'Khi sử dụng Laravel Blade để truyền dữ liệu từ controller vào view, bạn có thể sử dụng cú pháp blank_1.',
                'blanks' => ['compact'],
            ],
            [
                'question' => 'Để xử lý upload file và lưu file vào thư mục storage trong Laravel, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['store'],
            ],
            [
                'question' => 'Để sử dụng một phương thức tĩnh từ một trait trong PHP, bạn cần gọi trait với cú pháp blank_1.',
                'blanks' => ['TraitName::methodName'],
            ],
            [
                'question' => 'Để thực hiện tìm kiếm trên nhiều bảng trong Laravel, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['join'],
            ],
            [
                'question' => 'Để cấu hình các thiết lập liên quan đến cache trong Laravel, bạn cần chỉnh sửa file blank_1.',
                'blanks' => ['cache.php'],
            ],
            [
                'question' => 'Khi muốn khởi tạo một đối tượng mới từ một lớp có phụ thuộc trong Laravel, bạn có thể sử dụng blank_1.',
                'blanks' => ['Dependency Injection'],
            ],
            [
                'question' => 'Để sử dụng một phương thức trong PHP và trả về giá trị từ phương thức đó, bạn có thể viết mã như sau: blank_1.',
                'blanks' => ['return $this->method();'],
            ],
            [
                'question' => 'Để lấy một giá trị từ một request trong Laravel, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['input'],
            ],
            [
                'question' => 'Khi sử dụng Laravel Eloquent, bạn có thể thực hiện truy vấn với nhiều điều kiện bằng cách sử dụng phương thức blank_1.',
                'blanks' => ['where'],
            ],
            [
                'question' => 'Để kiểm tra xem một biến có tồn tại trong session hay không trong Laravel, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['has'],
            ],
            [
                'question' => 'Để tạo một custom validation rule trong Laravel, bạn có thể định nghĩa lớp mới và implement interface blank_1.',
                'blanks' => ['Rule'],
            ],
            [
                'question' => 'Để lưu dữ liệu trong cơ sở dữ liệu với một số thuộc tính đặc biệt, bạn có thể sử dụng phương thức blank_1 trong Laravel Eloquent.',
                'blanks' => ['save'],
            ],
            [
                'question' => 'Khi cần xử lý một yêu cầu HTTP trong Laravel, bạn có thể tạo một lớp request và sử dụng phương thức blank_1 để xác thực dữ liệu.',
                'blanks' => ['rules'],
            ],
            [
                'question' => 'Để định nghĩa một route cho API với middleware trong Laravel, bạn có thể sử dụng cú pháp blank_1.',
                'blanks' => ['Route::middleware'],
            ],
            [
                'question' => 'Để gọi một phương thức trên một đối tượng và xử lý kết quả trả về, bạn có thể viết mã như sau: blank_1.',
                'blanks' => ['$result = $object->method();'],
            ],
            [
                'question' => 'Khi làm việc với các query builder trong Laravel, bạn có thể sử dụng phương thức blank_1 để thực hiện các phép toán phức tạp.',
                'blanks' => ['groupBy'],
            ],
            [
                'question' => 'Để thiết lập cấu hình cho một dịch vụ trong Laravel, bạn cần sử dụng phương thức blank_1 trong Service Provider.',
                'blanks' => ['bind'],
            ],
            [
                'question' => 'Để xử lý các lỗi trong PHP khi sử dụng try-catch, bạn có thể sử dụng phương thức blank_1 để ném lỗi.',
                'blanks' => ['throw'],
            ],
            [
                'question' => 'Để thực hiện một truy vấn với điều kiện chính xác trong Laravel Eloquent, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['where'],
            ],
            [
                'question' => 'Để thực hiện một phép kiểm tra đơn giản trên dữ liệu trong Laravel, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['assert'],
            ],
            [
                'question' => 'Để gọi một phương thức trong một lớp mà không cần phải tạo một đối tượng, bạn sử dụng từ khóa blank_1.',
                'blanks' => ['static'],
            ],
            [
                'question' => 'Để truy cập một thuộc tính tĩnh trong PHP, bạn có thể sử dụng cú pháp blank_1.',
                'blanks' => ['ClassName::$property'],
            ],
            [
                'question' => 'Để thiết lập một đối tượng mới với cấu hình mặc định trong Laravel, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['config'],
            ],
            [
                'question' => 'Khi thực hiện một phép toán trên dữ liệu trong PHP, bạn có thể sử dụng hàm blank_1 để làm tròn giá trị.',
                'blanks' => ['round'],
            ],
            [
                'question' => 'Để xử lý một yêu cầu HTTP POST và nhận dữ liệu từ form trong Laravel, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['post'],
            ],
            [
                'question' => 'Để tạo một file mới trong Laravel và lưu dữ liệu vào đó, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['put'],
            ],
            [
                'question' => 'Khi muốn kiểm tra xem một biến có phải là một đối tượng không trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['is_object'],
            ],
            [
                'question' => 'Để cập nhật một bản ghi trong cơ sở dữ liệu với Laravel Eloquent, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['update'],
            ],
            [
                'question' => 'Để kiểm tra xem một biến có phải là mảng không trong PHP, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['is_array'],
            ],
            [
                'question' => 'Để xử lý các kiểu dữ liệu khác nhau khi gửi dữ liệu qua request trong Laravel, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['input'],
            ],
        ];
        $essays_laravel =
        [
            [
                'question' => 'Trong Laravel, để tạo một route mới trong file routes/web.php, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['Route::get'],
            ],
            [
                'question' => 'Để tạo một controller mới trong Laravel, bạn có thể sử dụng lệnh Artisan blank_1.',
                'blanks' => ['make:controller'],
            ],
            [
                'question' => 'Trong Laravel, để tạo một migration mới, bạn có thể sử dụng lệnh Artisan blank_1.',
                'blanks' => ['make:migration'],
            ],
            [
                'question' => 'Để kết nối với cơ sở dữ liệu trong Laravel, bạn có thể cấu hình thông tin kết nối trong file blank_1.',
                'blanks' => ['.env'],
            ],
            [
                'question' => 'Trong Laravel, để thực hiện việc validate dữ liệu gửi từ form, bạn có thể sử dụng blank_1 trong Controller.',
                'blanks' => ['validate'],
            ],
            [
                'question' => 'Khi bạn cần xử lý các request trong Laravel, bạn có thể sử dụng class blank_1.',
                'blanks' => ['Request'],
            ],
            [
                'question' => 'Để thực hiện việc hiển thị dữ liệu trong Blade template, bạn có thể sử dụng cú pháp blank_1.',
                'blanks' => ['{{ $variable }}'],
            ],
            [
                'question' => 'Trong Laravel, để tạo một model mới, bạn có thể sử dụng lệnh Artisan blank_1.',
                'blanks' => ['make:model'],
            ],
            [
                'question' => 'Để thực hiện việc chạy migration và cập nhật cơ sở dữ liệu, bạn có thể sử dụng lệnh Artisan blank_1.',
                'blanks' => ['migrate'],
            ],
            [
                'question' => 'Để xử lý các lỗi trong Laravel, bạn có thể sử dụng class blank_1.',
                'blanks' => ['Exception'],
            ],
            [
                'question' => 'Trong Laravel, để cấu hình các thông số ứng dụng như tên ứng dụng và môi trường, bạn có thể chỉnh sửa file blank_1.',
                'blanks' => ['config/app.php'],
            ],
            [
                'question' => 'Khi bạn cần tạo một seeder mới trong Laravel, bạn có thể sử dụng lệnh Artisan blank_1.',
                'blanks' => ['make:seeder'],
            ],
            [
                'question' => 'Trong Laravel, để thực hiện việc phân trang dữ liệu, bạn có thể sử dụng phương thức blank_1 trên Query Builder.',
                'blanks' => ['paginate'],
            ],
            [
                'question' => 'Để tạo một route với tên trong Laravel, bạn có thể sử dụng phương thức blank_1 trong file routes/web.php.',
                'blanks' => ['Route::name'],
            ],
            [
                'question' => 'Để tạo một liên kết tới route có tên trong Blade template, bạn có thể sử dụng hàm blank_1.',
                'blanks' => ['route'],
            ],
            [
                'question' => 'Khi bạn cần sử dụng Eloquent để tương tác với cơ sở dữ liệu, bạn có thể sử dụng lớp blank_1.',
                'blanks' => ['Model'],
            ],
            [
                'question' => 'Để tạo một job mới trong Laravel, bạn có thể sử dụng lệnh Artisan blank_1.',
                'blanks' => ['make:job'],
            ],
            [
                'question' => 'Khi bạn cần chạy các command Artisan theo lịch trình định kỳ, bạn có thể sử dụng tính năng blank_1.',
                'blanks' => ['Task Scheduling'],
            ],
            [
                'question' => 'Để thực hiện việc quản lý authentication trong Laravel, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['Auth'],
            ],
            [
                'question' => 'Để định nghĩa các phương thức HTTP trong Laravel, bạn có thể sử dụng phương thức blank_1 trong file routes/web.php.',
                'blanks' => ['Route::post'],
            ],
            [
                'question' => 'Trong Laravel, để thực hiện việc upload file, bạn có thể sử dụng đối tượng blank_1.',
                'blanks' => ['Request'],
            ],
            [
                'question' => 'Để thực hiện việc xử lý các route với middleware, bạn có thể sử dụng phương thức blank_1 khi định nghĩa route.',
                'blanks' => ['middleware'],
            ],
            [
                'question' => 'Khi bạn cần tạo một factory mới trong Laravel, bạn có thể sử dụng lệnh Artisan blank_1.',
                'blanks' => ['make:factory'],
            ],
            [
                'question' => 'Để xác định các quyền truy cập cho một route trong Laravel, bạn có thể sử dụng middleware blank_1.',
                'blanks' => ['auth'],
            ],
            [
                'question' => 'Để tạo một command Artisan tùy chỉnh trong Laravel, bạn có thể sử dụng lệnh Artisan blank_1.',
                'blanks' => ['make:command'],
            ],
            [
                'question' => 'Trong Laravel, để cấu hình các dịch vụ như Mail, bạn có thể chỉnh sửa file blank_1.',
                'blanks' => ['config/mail.php'],
            ],
            [
                'question' => 'Khi bạn cần sử dụng các sự kiện và listener trong Laravel, bạn có thể sử dụng lệnh Artisan blank_1 để tạo sự kiện mới.',
                'blanks' => ['make:event'],
            ],
            [
                'question' => 'Để định nghĩa các validation rules cho dữ liệu gửi từ form, bạn có thể sử dụng phương thức blank_1 trong Request.',
                'blanks' => ['rules'],
            ],
            [
                'question' => 'Trong Laravel, để xử lý các request và response, bạn có thể sử dụng lớp blank_1.',
                'blanks' => ['Response'],
            ],
            [
                'question' => 'Để định nghĩa các route với prefix trong Laravel, bạn có thể sử dụng phương thức blank_1.',
                'blanks' => ['Route::prefix'],
            ],
            [
                'question' => 'Khi bạn cần thực hiện việc xử lý các form requests, bạn có thể tạo một class request mới bằng lệnh Artisan blank_1.',
                'blanks' => ['make:request'],
            ],
            [
                'question' => 'Để tạo một migration mới cho một bảng trong Laravel, bạn có thể sử dụng lệnh Artisan blank_1.',
                'blanks' => ['make:migration'],
            ],
            [
                'question' => 'Để sử dụng tính năng cache trong Laravel, bạn có thể sử dụng lớp blank_1.',
                'blanks' => ['Cache'],
            ],
            [
                'question' => 'Để xác định các route trong Laravel, bạn có thể sử dụng phương thức blank_1 trong file routes/web.php.',
                'blanks' => ['Route::get'],
            ],
            [
                'question' => 'Khi bạn cần sử dụng các phương thức xử lý JSON response trong Laravel, bạn có thể sử dụng lớp blank_1.',
                'blanks' => ['JsonResponse'],
            ],
            [
                'question' => 'Để thực hiện việc xử lý các lỗi trong ứng dụng Laravel, bạn có thể tạo các file error view trong thư mục blank_1.',
                'blanks' => ['resources/views/errors'],
            ],
            [
                'question' => 'Khi bạn cần xác định các thuộc tính của cơ sở dữ liệu trong Laravel, bạn có thể sử dụng file blank_1.',
                'blanks' => ['config/database.php'],
            ],
            [
                'question' => 'Để sử dụng các phương thức xử lý form trong Laravel, bạn có thể sử dụng lớp blank_1 trong Controller.',
                'blanks' => ['Request'],
            ],
            [
                'question' => 'Để xử lý các request HTTP với các phương thức khác nhau, bạn có thể sử dụng phương thức blank_1 trong file routes/web.php.',
                'blanks' => ['Route::post'],
            ],
            [
                'question' => 'Để kiểm tra lỗi và exception trong Laravel, bạn có thể sử dụng lớp blank_1.',
                'blanks' => ['Log'],
            ],
            [
                'question' => 'Khi bạn cần sử dụng các tính năng xác thực của Laravel, bạn có thể cấu hình trong file blank_1.',
                'blanks' => ['config/auth.php'],
            ],
            [
                'question' => 'Để tạo một middleware mới trong Laravel, bạn có thể sử dụng lệnh Artisan blank_1.',
                'blanks' => ['make:middleware'],
            ],
            [
                'question' => 'Khi bạn cần xử lý các kiểu dữ liệu phức tạp trong form requests, bạn có thể sử dụng phương thức blank_1 trong Request.',
                'blanks' => ['validated'],
            ],
            [
                'question' => 'Để định nghĩa các route với các tham số động, bạn có thể sử dụng phương thức blank_1 trong file routes/web.php.',
                'blanks' => ['Route::get'],
            ],
            [
                'question' => 'Để tạo một model mới với migration, bạn có thể sử dụng lệnh Artisan blank_1.',
                'blanks' => ['make:model -m'],
            ],
            [
                'question' => 'Để định nghĩa một route với middleware trong Laravel, bạn có thể sử dụng phương thức blank_1 trong file routes/web.php và truyền vào middleware như sau: Route::get(\'/admin\', [AdminController::class, \'index\'])->blank_2(\'auth\');',
                'blanks' => ['middleware', 'middleware'],
            ],
            [
                'question' => 'Trong Laravel, để xử lý một request POST với validation, bạn có thể sử dụng class Request và viết đoạn code như sau: public function blank_1(Request $request) { $request->validate([\'name\' => \'required\', \'email\' => \'required|email\']); }',
                'blanks' => ['store'],
            ],
            [
                'question' => 'Để cấu hình việc sử dụng cache driver trong Laravel, bạn cần chỉnh sửa file blank_1 với giá trị cache driver như sau: CACHE_DRIVER=blank_2.',
                'blanks' => ['.env', 'redis'],
            ],
            [
                'question' => 'Khi bạn cần tạo một query với điều kiện phức tạp sử dụng Eloquent, bạn có thể viết đoạn code như sau: $users = User::where(\'age\', \'>\', 25)->blank_1();',
                'blanks' => ['get'],
            ],
            [
                'question' => 'Trong Laravel, để xử lý các tác vụ định kỳ, bạn có thể tạo một command và sử dụng phương thức blank_1 trong file app/Console/Kernel.php để thêm command vào lịch trình.',
                'blanks' => ['schedule'],
            ],
            [
                'question' => 'Để tạo một seeder mới và chạy dữ liệu mẫu cho một model, bạn có thể sử dụng lệnh Artisan blank_1 và sau đó gọi blank_2 trong DatabaseSeeder.',
                'blanks' => ['make:seeder', 'call'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các job và queue trong Laravel, bạn có thể tạo một job mới với lệnh Artisan blank_1 và dispatch job bằng phương thức blank_2().',
                'blanks' => ['make:job', 'dispatch'],
            ],
            [
                'question' => 'Trong Laravel, để cấu hình một event và listener, bạn cần định nghĩa sự kiện trong file blank_1 và listener trong file blank_2.',
                'blanks' => ['app/Events', 'app/Listeners'],
            ],
            [
                'question' => 'Để thực hiện việc chuyển hướng trong Laravel sau khi xử lý form, bạn có thể sử dụng phương thức blank_1() trong Controller như sau: return blank_2(\'/home\');',
                'blanks' => ['redirect', 'redirect'],
            ],
            [
                'question' => 'Khi bạn cần kiểm tra sự tồn tại của một model trong Laravel, bạn có thể sử dụng phương thức blank_1 như sau: $user = User::blank_2(1);',
                'blanks' => ['find'],
            ],
            [
                'question' => 'Để thực hiện việc tải một view với dữ liệu trong Laravel, bạn có thể sử dụng phương thức blank_1 trong Controller như sau: return blank_2(\'home\', [\'users\' => $users]);',
                'blanks' => ['view', 'view'],
            ],
            [
                'question' => 'Trong Laravel, để tạo một route với phương thức PATCH, bạn có thể sử dụng phương thức blank_1 trong file routes/web.php như sau: Route::blank_2(\'/update\', [UpdateController::class, \'update\']);',
                'blanks' => ['patch'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các phương thức query builder phức tạp, bạn có thể viết đoạn code như sau: $posts = DB::table(\'posts\')->blank_1(\'title\', \'>=\', 10)->blank_2();',
                'blanks' => ['where', 'get'],
            ],
            [
                'question' => 'Để thực hiện việc xử lý các request và response với JSON trong Laravel, bạn có thể sử dụng phương thức blank_1() như sau: return response()->blank_2($data, 200);',
                'blanks' => ['json', 'json'],
            ],
            [
                'question' => 'Để thực hiện việc quản lý file upload và lưu trữ trong Laravel, bạn có thể sử dụng phương thức blank_1() như sau: $request->file(\'photo\')->blank_2(\'public/photos\');',
                'blanks' => ['store', 'move'],
            ],
            [
                'question' => 'Trong Laravel, để thực hiện việc kết nối với một cơ sở dữ liệu khác, bạn cần cấu hình thông tin kết nối trong file blank_1 và sau đó sử dụng kết nối bằng phương thức blank_2().',
                'blanks' => ['config/database.php', 'connection'],
            ],
            [
                'question' => 'Khi bạn cần xác thực người dùng trong Laravel, bạn có thể sử dụng phương thức blank_1() như sau: Auth::blank_2($credentials);',
                'blanks' => ['attempt'],
            ],
            [
                'question' => 'Để tạo một route group với prefix trong Laravel, bạn có thể sử dụng phương thức blank_1() trong file routes/web.php như sau: Route::blank_2(\'admin\', function() { ... });',
                'blanks' => ['prefix'],
            ],
            [
                'question' => 'Để sử dụng các phương thức query với Eloquent như joins và aggregates, bạn có thể viết đoạn code như sau: $orders = Order::blank_1(\'JOIN customers ON orders.customer_id = customers.id\')->blank_2();',
                'blanks' => ['join', 'get'],
            ],
            [
                'question' => 'Để thực hiện việc cấu hình mail trong Laravel, bạn có thể chỉnh sửa file blank_1 và cấu hình các thiết lập như SMTP server và credentials.',
                'blanks' => ['config/mail.php'],
            ],
            [
                'question' => 'Để sử dụng các custom middleware trong Laravel, bạn có thể tạo middleware mới với lệnh Artisan blank_1 và đăng ký nó trong file blank_2.',
                'blanks' => ['make:middleware', 'app/Http/Kernel.php'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các traits trong Laravel models, bạn có thể sử dụng cú pháp blank_1 trong class model như sau: use blank_2;.',
                'blanks' => ['use', 'SoftDeletes'],
            ],
            [
                'question' => 'Trong Laravel, để xử lý các sự kiện và listener, bạn có thể sử dụng lệnh Artisan blank_1 để tạo listener mới và đăng ký sự kiện trong file blank_2.',
                'blanks' => ['make:listener', 'app/Providers/EventServiceProvider.php'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các dịch vụ bên ngoài trong Laravel, bạn có thể sử dụng package blank_1 và cấu hình nó trong file blank_2.',
                'blanks' => ['GuzzleHTTP', 'config/services.php'],
            ],
            [
                'question' => 'Khi bạn cần thực hiện việc phân trang dữ liệu với Eloquent, bạn có thể sử dụng phương thức blank_1() trong model như sau: $posts = Post::blank_2();',
                'blanks' => ['paginate', 'paginate(15)'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các cơ chế caching trong Laravel, bạn có thể sử dụng class blank_1 và phương thức blank_2 như sau: Cache::blank_3(\'key\', $value, 60);',
                'blanks' => ['Cache', 'put', 'get'],
            ],
            [
                'question' => 'Để sử dụng các view components trong Laravel, bạn có thể tạo một component mới với lệnh Artisan blank_1 và sử dụng nó trong Blade template với cú pháp blank_2.',
                'blanks' => ['make:component', '<x-component-name />'],
            ],
            [
                'question' => 'Khi bạn cần tạo một route resource trong Laravel, bạn có thể sử dụng phương thức blank_1 như sau: Route::blank_2(\'posts\', PostController::class);',
                'blanks' => ['resource'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các phương thức Eloquent như with và eager loading, bạn có thể viết đoạn code như sau: $posts = Post::blank_1(\'comments\')->blank_2();',
                'blanks' => ['with', 'get'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các API routes trong Laravel, bạn có thể định nghĩa các route trong file blank_1 và sử dụng prefix với phương thức blank_2.',
                'blanks' => ['routes/api.php', 'prefix'],
            ],
            [
                'question' => 'Trong Laravel, để tạo một middleware mới và đăng ký nó, bạn có thể sử dụng lệnh Artisan blank_1 và đăng ký trong file blank_2.',
                'blanks' => ['make:middleware', 'app/Http/Kernel.php'],
            ],
            [
                'question' => 'Để xử lý các lỗi trong Laravel với các custom error pages, bạn có thể tạo các file view trong thư mục blank_1 và cấu hình chúng trong file blank_2.',
                'blanks' => ['resources/views/errors', 'app/Exceptions/Handler.php'],
            ],
            [
                'question' => 'Để thực hiện việc xác thực role-based access control (RBAC) trong Laravel, bạn có thể sử dụng package blank_1 và cấu hình nó trong file blank_2.',
                'blanks' => ['spatie/laravel-permission', 'config/permission.php'],
            ],
            [
                'question' => 'Để thực hiện việc kiểm tra sự tồn tại của route trong Laravel, bạn có thể sử dụng phương thức blank_1 như sau: if (Route::has(\'login\')) { ... }',
                'blanks' => ['has'],
            ],
            [
                'question' => 'Khi bạn cần định nghĩa các API rate limits trong Laravel, bạn có thể cấu hình chúng trong file blank_1 và sử dụng middleware blank_2.',
                'blanks' => ['app/Http/Kernel.php', 'throttle'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các lệnh Artisan tùy chỉnh trong Laravel, bạn có thể tạo một command mới với lệnh Artisan blank_1 và triển khai logic trong class blank_2.',
                'blanks' => ['make:command', 'app/Console/Commands/MyCommand.php'],
            ],
            [
                'question' => 'Để thực hiện việc tích hợp các dịch vụ như AWS trong Laravel, bạn có thể sử dụng package blank_1 và cấu hình thông tin trong file blank_2.',
                'blanks' => ['aws/aws-sdk-php', 'config/filesystems.php'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các phương thức soft deletes trong Eloquent, bạn cần sử dụng trait blank_1 trong model và viết đoạn code như sau: $model->blank_2();',
                'blanks' => ['SoftDeletes', 'delete'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các package bên ngoài trong Laravel, bạn có thể cài đặt package với Composer và cấu hình trong file blank_1.',
                'blanks' => ['composer.json'],
            ],
            [
                'question' => 'Trong Laravel, để thực hiện việc sử dụng các helper functions tùy chỉnh, bạn có thể định nghĩa chúng trong file blank_1 và đăng ký trong file blank_2.',
                'blanks' => ['app/Helpers/helpers.php', 'composer.json'],
            ],
            [
                'question' => 'Để tạo một form request với validation rules trong Laravel, bạn có thể sử dụng lệnh Artisan blank_1 và định nghĩa các rules trong phương thức blank_2.',
                'blanks' => ['make:request', 'rules'],
            ],
            [
                'question' => 'Để thực hiện việc xử lý các relationships one-to-many trong Eloquent, bạn có thể định nghĩa phương thức blank_1 trong model và sử dụng cú pháp blank_2 trong query.',
                'blanks' => ['comments', '->comments'],
            ],
            [
                'question' => 'Để thực hiện việc tạo các cơ sở dữ liệu tạm thời trong Laravel test, bạn có thể sử dụng phương thức blank_1 trong class test như sau: $this->blank_2();',
                'blanks' => ['artisan migrate', 'refresh'],
            ],
            [
                'question' => 'Để thực hiện việc đăng ký và sử dụng các dịch vụ thanh toán trong Laravel, bạn có thể cài đặt package blank_1 và cấu hình thông tin trong file blank_2.',
                'blanks' => ['laravel/cashier', 'config/cashier.php'],
            ],
            [
                'question' => 'Để thực hiện việc thực thi các phương thức query với raw expressions trong Eloquent, bạn có thể viết đoạn code như sau: $results = DB::table(\'posts\')->blank_1(DB::raw(\'count(*) as total\'))->blank_2();',
                'blanks' => ['select', 'get'],
            ],
            [
                'question' => 'Để thực hiện việc tạo một custom queue worker trong Laravel, bạn có thể sử dụng lệnh Artisan blank_1 và triển khai logic trong class blank_2.',
                'blanks' => ['make:job', 'App\Jobs\MyCustomJob'],
            ],
            [
                'question' => 'Khi sử dụng Laravel Horizon để quản lý các queue jobs, bạn cần cấu hình thông tin trong file blank_1 và đăng ký Horizon trong file blank_2.',
                'blanks' => ['config/horizon.php', 'app/Providers/AppServiceProvider.php'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các custom validation rules trong Laravel, bạn cần định nghĩa một class validation mới với lệnh Artisan blank_1 và sử dụng nó trong phương thức blank_2 của FormRequest.',
                'blanks' => ['make:rule', 'rules'],
            ],
            [
                'question' => 'Để cấu hình việc sử dụng các database connections tùy chỉnh trong Laravel, bạn cần chỉnh sửa file blank_1 và định nghĩa các kết nối trong section blank_2.',
                'blanks' => ['config/database.php', 'connections'],
            ],
            [
                'question' => 'Để thực hiện việc định nghĩa các route caching và tối ưu hóa trong Laravel, bạn có thể sử dụng lệnh Artisan blank_1 và lưu trữ routes đã cache trong file blank_2.',
                'blanks' => ['route:cache', 'bootstrap/cache/routes.php'],
            ],
            [
                'question' => 'Để sử dụng các APIs với rate limiting trong Laravel, bạn cần định nghĩa các giới hạn trong file blank_1 và áp dụng middleware blank_2.',
                'blanks' => ['app/Http/Kernel.php', 'throttle'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các custom artisan commands, bạn có thể định nghĩa một command mới với lệnh Artisan blank_1 và triển khai logic trong class blank_2.',
                'blanks' => ['make:command', 'App\Console\Commands\CustomCommand'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng multi-tenancy trong Laravel, bạn có thể cấu hình và sử dụng package blank_1 và định nghĩa tenant-specific database connections trong file blank_2.',
                'blanks' => ['tenancy/tenancy', 'config/tenancy.php'],
            ],
            [
                'question' => 'Khi bạn cần thực hiện việc phân tích và tối ưu hóa các query database trong Laravel, bạn có thể sử dụng package blank_1 và viết đoạn code như sau: DB::blank_2(\'SELECT * FROM posts\');',
                'blanks' => ['barryvdh/laravel-debugbar', 'listen'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các polymorphic relationships trong Eloquent, bạn có thể định nghĩa phương thức blank_1 trong model và sử dụng cú pháp blank_2 trong query.',
                'blanks' => ['morphMany', '->morphMany(Comment::class, \'commentable\')'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các observers để theo dõi các thay đổi trong Eloquent models, bạn cần định nghĩa observer trong file blank_1 và đăng ký observer trong file blank_2.',
                'blanks' => ['app/Observers', 'app/Providers/EventServiceProvider.php'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các jobs với chain và các phương thức handle, bạn có thể viết đoạn code như sau: dispatch(new JobA())->blank_1(new JobB());',
                'blanks' => ['chain'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các API testing với Laravel, bạn có thể sử dụng các phương thức của class blank_1 và viết đoạn code như sau: $response = $this->blank_2(\'GET\', \'/api/users\');',
                'blanks' => ['Illuminate\Foundation\Testing\TestCase', 'get'],
            ],
            [
                'question' => 'Để thực hiện việc quản lý và xử lý các phiên bản API (versioning), bạn cần cấu hình các routes trong file blank_1 và sử dụng prefix với phương thức blank_2.',
                'blanks' => ['routes/api.php', 'prefix'],
            ],
            [
                'question' => 'Để thực hiện việc tích hợp các hệ thống thanh toán phức tạp trong Laravel, bạn có thể sử dụng package blank_1 và cấu hình các thông tin thanh toán trong file blank_2.',
                'blanks' => ['laravel/cashier', 'config/cashier.php'],
            ],
            [
                'question' => 'Khi bạn cần tối ưu hóa các phương thức query builder với các raw expressions và subqueries, bạn có thể viết đoạn code như sau: $results = DB::table(\'posts\')->blank_1(DB::raw("(SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) as comments_count"))->blank_2();',
                'blanks' => ['select', 'get'],
            ],
            [
                'question' => 'Để thực hiện việc xử lý các batch jobs với các phương thức như dispatch và retry, bạn có thể viết đoạn code như sau: $job = new ProcessBatch(); $job->blank_1();',
                'blanks' => ['dispatch'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các form request với các rules phức tạp trong Laravel, bạn có thể định nghĩa một request mới với lệnh Artisan blank_1 và viết các rules trong phương thức blank_2.',
                'blanks' => ['make:request', 'rules'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các database transactions trong Laravel, bạn có thể viết đoạn code như sau: DB::blank_1(function () { ... });',
                'blanks' => ['transaction'],
            ],
            [
                'question' => 'Để thực hiện việc cấu hình các queue connections tùy chỉnh trong Laravel, bạn cần chỉnh sửa file blank_1 và cấu hình các kết nối trong section blank_2.',
                'blanks' => ['config/queue.php', 'connections'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các caching tags trong Laravel, bạn có thể viết đoạn code như sau: Cache::tags([\'posts\', \'users\'])->blank_1(\'key\');',
                'blanks' => ['get'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các scoped queries trong Eloquent, bạn có thể định nghĩa phương thức blank_1 trong model và gọi nó như sau: Post::blank_2()->get();',
                'blanks' => ['scopePublished', 'published'],
            ],
            [
                'question' => 'Để thực hiện việc tích hợp các dịch vụ bên ngoài như Elasticsearch trong Laravel, bạn có thể sử dụng package blank_1 và cấu hình kết nối trong file blank_2.',
                'blanks' => ['elasticsearch/elasticsearch', 'config/elasticsearch.php'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các custom validation rules với các error messages, bạn có thể định nghĩa một class validation mới với lệnh Artisan blank_1 và viết các phương thức blank_2.',
                'blanks' => ['make:rule', 'passes', 'message'],
            ],
            [
                'question' => 'Khi bạn cần tối ưu hóa và cache các query builder trong Laravel, bạn có thể sử dụng phương thức blank_1 như sau: DB::table(\'posts\')->blank_2();',
                'blanks' => ['cache', 'remember'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các event listeners với các delayed events, bạn có thể cấu hình trong file blank_1 và sử dụng phương thức blank_2.',
                'blanks' => ['app/Providers/EventServiceProvider.php', 'dispatch'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các query builder với dynamic constraints trong Laravel, bạn có thể viết đoạn code như sau: $users = User::blank_1()->blank_2(\'age\', \'>\', 18)->get();',
                'blanks' => ['where', 'where'],
            ],
            [
                'question' => 'Khi bạn cần cấu hình các environment variables cho các dịch vụ bên ngoài trong Laravel, bạn cần thêm vào file blank_1 và truy cập chúng qua phương thức blank_2.',
                'blanks' => ['.env', 'env'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các custom middleware groups trong Laravel, bạn có thể định nghĩa các groups trong file blank_1 và áp dụng chúng trong file blank_2.',
                'blanks' => ['app/Http/Kernel.php', 'routes/web.php'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các localizable validation messages trong Laravel, bạn có thể cấu hình chúng trong file blank_1 và sử dụng trong các form requests.',
                'blanks' => ['resources/lang/en/validation.php'],
            ],
            [
                'question' => 'Khi bạn cần sử dụng các observer với các events trong Eloquent, bạn có thể viết đoạn code như sau: User::blank_1(UserObserver::class);',
                'blanks' => ['observe'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các eloquent model factories để tạo dữ liệu giả trong Laravel, bạn có thể định nghĩa chúng trong file blank_1 và sử dụng trong file blank_2.',
                'blanks' => ['database/factories/UserFactory.php', 'database/seeds/DatabaseSeeder.php'],
            ],
            [
                'question' => 'Khi bạn cần thực hiện việc định nghĩa các API rate limits, bạn có thể cấu hình trong file blank_1 và áp dụng các giới hạn trong file blank_2.',
                'blanks' => ['app/Http/Kernel.php', 'routes/api.php'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các events và listeners trong Laravel, bạn cần định nghĩa events trong file blank_1 và listeners trong file blank_2.',
                'blanks' => ['app/Events', 'app/Listeners'],
            ],
            [
                'question' => 'Khi bạn cần tạo một custom validation rule với các dependency injection, bạn có thể viết đoạn code như sau: public function blank_1(CustomDependency $dependency) { ... }',
                'blanks' => ['__construct'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các dynamic blade components trong Laravel, bạn có thể tạo component mới với lệnh Artisan blank_1 và sử dụng trong các view với cú pháp blank_2.',
                'blanks' => ['make:component', '<x-my-component />'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các query scopes với các dynamic parameters, bạn có thể viết đoạn code như sau: public function blank_1($status) { return $this->blank_2($status); }',
                'blanks' => ['scopeStatus', 'where'],
            ],
            [
                'question' => 'Khi bạn cần thực hiện việc cấu hình các custom session drivers trong Laravel, bạn cần chỉnh sửa file blank_1 và cấu hình các session drivers trong section blank_2.',
                'blanks' => ['config/session.php', 'drivers'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các custom middleware để xử lý các request và response, bạn có thể định nghĩa chúng trong file blank_1 và đăng ký chúng trong file blank_2.',
                'blanks' => ['app/Http/Middleware', 'app/Http/Kernel.php'],
            ],
        ];
        $essays_angular =
        [
            [
                'question' => 'Để tạo một dự án mới trong Angular, bạn sử dụng lệnh blank_1 và sau đó cung cấp tên dự án.',
                'blanks' => ['ng new'],
            ],
            [
                'question' => 'Để tạo một component mới trong Angular, bạn có thể sử dụng lệnh Angular CLI blank_1 và đặt tên cho component.',
                'blanks' => ['ng generate component'],
            ],
            [
                'question' => 'Để định nghĩa một service trong Angular, bạn cần tạo một file với decorator blank_1 và khai báo các phương thức của service.',
                'blanks' => ['@Injectable'],
            ],
            [
                'question' => 'Trong Angular, để liên kết dữ liệu từ component đến template, bạn sử dụng cú pháp blank_1 trong HTML.',
                'blanks' => ['{{ variableName }}'],
            ],
            [
                'question' => 'Để tạo một form đơn giản trong Angular với ngModel, bạn cần sử dụng module blank_1 và thêm directive blank_2 vào input.',
                'blanks' => ['FormsModule', 'ngModel'],
            ],
            [
                'question' => 'Để định nghĩa một route trong Angular, bạn cần cấu hình routes trong file blank_1 và sử dụng RouterModule trong module chính.',
                'blanks' => ['app-routing.module.ts', 'RouterModule.forRoot(routes)'],
            ],
            [
                'question' => 'Để hiển thị một danh sách các item trong Angular, bạn có thể sử dụng directive blank_1 trong template.',
                'blanks' => ['*ngFor'],
            ],
            [
                'question' => 'Để xử lý các sự kiện trong Angular, bạn có thể sử dụng cú pháp blank_1 trong HTML template.',
                'blanks' => ['(eventName)'],
            ],
            [
                'question' => 'Để sử dụng các pipes trong Angular, bạn có thể áp dụng pipe vào dữ liệu trong template với cú pháp blank_1.',
                'blanks' => ['{{ data | pipeName }}'],
            ],
            [
                'question' => 'Để tạo một module mới trong Angular, bạn sử dụng lệnh Angular CLI blank_1 và cung cấp tên module.',
                'blanks' => ['ng generate module'],
            ],
            [
                'question' => 'Để sử dụng dependency injection trong Angular, bạn cần khai báo các dependencies trong constructor của class và sử dụng decorator blank_1.',
                'blanks' => ['@Injectable'],
            ],
            [
                'question' => 'Để xử lý các lỗi từ HTTP request trong Angular, bạn có thể sử dụng blank_1 trong service và catch errors.',
                'blanks' => ['HttpInterceptor'],
            ],
            [
                'question' => 'Để thực hiện việc routing với các parameters, bạn có thể định nghĩa route trong file blank_1 và sử dụng blank_2 trong component.',
                'blanks' => ['app-routing.module.ts', 'ActivatedRoute'],
            ],
            [
                'question' => 'Để tạo một reactive form trong Angular, bạn cần import module blank_1 và sử dụng FormBuilder để tạo form.',
                'blanks' => ['ReactiveFormsModule'],
            ],
            [
                'question' => 'Để sử dụng lifecycle hooks trong Angular, bạn cần implement interface blank_1 và định nghĩa các phương thức như ngOnInit.',
                'blanks' => ['OnInit'],
            ],
            [
                'question' => 'Để định nghĩa một ng-content trong Angular component, bạn sử dụng tag blank_1 trong component template.',
                'blanks' => ['ng-content'],
            ],
            [
                'question' => 'Để truyền dữ liệu từ component cha đến component con, bạn sử dụng decorator blank_1 trong component con.',
                'blanks' => ['@Input'],
            ],
            [
                'question' => 'Để truyền dữ liệu từ component con đến component cha, bạn sử dụng decorator blank_1 trong component con và emit sự kiện.',
                'blanks' => ['@Output'],
            ],
            [
                'question' => 'Để thay đổi điều kiện hiển thị của một phần tử trong template, bạn có thể sử dụng directive blank_1.',
                'blanks' => ['*ngIf'],
            ],
            [
                'question' => 'Để sử dụng Angular CLI để chạy ứng dụng, bạn sử dụng lệnh blank_1.',
                'blanks' => ['ng serve'],
            ],
            [
                'question' => 'Để định nghĩa một Angular component với tên và selector, bạn có thể sử dụng lệnh Angular CLI blank_1.',
                'blanks' => ['ng generate component'],
            ],
            [
                'question' => 'Trong Angular, để tạo một pipe tùy chỉnh, bạn cần sử dụng decorator blank_1 và viết logic trong class pipe.',
                'blanks' => ['@Pipe'],
            ],
            [
                'question' => 'Để thực hiện HTTP request trong Angular, bạn sử dụng dịch vụ blank_1 và phương thức như get, post.',
                'blanks' => ['HttpClient'],
            ],
            [
                'question' => 'Để định nghĩa một guard trong Angular, bạn sử dụng lệnh Angular CLI blank_1 và định nghĩa logic trong class guard.',
                'blanks' => ['ng generate guard'],
            ],
            [
                'question' => 'Để thay đổi cấu hình của Angular application, bạn chỉnh sửa file blank_1 và thêm cấu hình vào object blank_2.',
                'blanks' => ['angular.json', 'projects'],
            ],
            [
                'question' => 'Để tích hợp các module bên ngoài vào Angular application, bạn cần import chúng trong file blank_1.',
                'blanks' => ['app.module.ts'],
            ],
            [
                'question' => 'Để thực hiện lazy loading các module trong Angular, bạn cần định nghĩa các route trong file blank_1 và sử dụng cú pháp blank_2.',
                'blanks' => ['app-routing.module.ts', 'loadChildren'],
            ],
            [
                'question' => 'Để sử dụng các form controls trong reactive forms, bạn có thể sử dụng class blank_1 và method blank_2.',
                'blanks' => ['FormGroup', 'get'],
            ],
            [
                'question' => 'Để xử lý các lỗi trong form validation, bạn có thể sử dụng blank_1 trong template để hiển thị thông báo lỗi.',
                'blanks' => ['ngIf'],
            ],
            [
                'question' => 'Để sử dụng Angular Directives, bạn cần khai báo directive trong file blank_1 và áp dụng vào các phần tử trong template.',
                'blanks' => ['app.module.ts'],
            ],
            [
                'question' => 'Để kiểm tra và debug ứng dụng Angular, bạn có thể sử dụng công cụ blank_1 và mở cửa sổ Developer Tools.',
                'blanks' => ['Chrome DevTools'],
            ],
            [
                'question' => 'Để tạo một Angular service với Angular CLI, bạn sử dụng lệnh blank_1.',
                'blanks' => ['ng generate service'],
            ],
            [
                'question' => 'Để khai báo một route có parameters trong Angular, bạn sử dụng cú pháp blank_1 trong file routes.',
                'blanks' => ['path: \'path/:id\''],
            ],
            [
                'question' => 'Để định nghĩa một Angular module với các imports và declarations, bạn cần sử dụng decorator blank_1.',
                'blanks' => ['@NgModule'],
            ],
            [
                'question' => 'Để sử dụng các thuộc tính ngModel trong template, bạn cần import blank_1 vào module của bạn.',
                'blanks' => ['FormsModule'],
            ],
            [
                'question' => 'Để xử lý các sự kiện từ user input trong Angular, bạn có thể sử dụng cú pháp blank_1 trong component template.',
                'blanks' => ['(click)'],
            ],
            [
                'question' => 'Để làm việc với các observable trong Angular, bạn có thể sử dụng phương thức blank_1 từ RxJS.',
                'blanks' => ['subscribe'],
            ],
            [
                'question' => 'Để sử dụng các Angular modules của bên thứ ba, bạn cần import module đó vào file blank_1 và thêm vào phần imports.',
                'blanks' => ['app.module.ts'],
            ],
            [
                'question' => 'Để thực hiện kiểm thử các component trong Angular, bạn có thể viết các test cases trong file blank_1.',
                'blanks' => ['component.spec.ts'],
            ],
            [
                'question' => 'Để tạo một Angular form với validation, bạn cần sử dụng class blank_1 và định nghĩa các rules trong constructor.',
                'blanks' => ['FormGroup'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng Angular CLI để build ứng dụng, bạn sử dụng lệnh blank_1.',
                'blanks' => ['ng build'],
            ],
            [
                'question' => 'Để tạo một Angular directive mới, bạn sử dụng lệnh Angular CLI blank_1.',
                'blanks' => ['ng generate directive'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các decorators trong Angular, bạn có thể áp dụng chúng vào các class và method như blank_1 và blank_2.',
                'blanks' => ['@Component', '@Injectable'],
            ],
            [
                'question' => 'Để tạo một Angular module với lazy loading, bạn cần định nghĩa route trong file blank_1 và sử dụng cú pháp blank_2.',
                'blanks' => ['app-routing.module.ts', 'loadChildren'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các Angular lifecycle hooks như ngOnInit và ngOnDestroy, bạn cần implement các interface blank_1 và blank_2.',
                'blanks' => ['OnInit', 'OnDestroy'],
            ],
            [
                'question' => 'Khi bạn cần sử dụng một service có nhiều methods và cần inject vào nhiều components, bạn có thể khai báo service với decorator blank_1 và provider trong module.',
                'blanks' => ['@Injectable'],
            ],
            [
                'question' => 'Để tạo một form với validation nâng cao trong Angular, bạn có thể sử dụng class blank_1 và phương thức blank_2.',
                'blanks' => ['FormBuilder', 'group'],
            ],
            [
                'question' => 'Để thực hiện việc quản lý trạng thái ứng dụng trong Angular, bạn có thể sử dụng thư viện blank_1 và định nghĩa các actions, reducers.',
                'blanks' => ['NgRx'],
            ],
            [
                'question' => 'Để xử lý các HTTP requests với Angular HttpClient và bảo mật bằng cách thêm các headers, bạn cần sử dụng service blank_1 và method blank_2.',
                'blanks' => ['HttpClient', 'get'],
            ],
            [
                'question' => 'Để định nghĩa một Angular pipe tùy chỉnh, bạn cần tạo một class với decorator blank_1 và viết logic trong phương thức transform.',
                'blanks' => ['@Pipe'],
            ],
            [
                'question' => 'Khi bạn cần làm việc với các routes có parameter, bạn có thể sử dụng service blank_1 và phương thức blank_2 để lấy giá trị parameter.',
                'blanks' => ['ActivatedRoute', 'paramMap'],
            ],
            [
                'question' => 'Để tạo một Angular directive tùy chỉnh, bạn cần sử dụng lệnh Angular CLI blank_1 và định nghĩa logic trong class directive.',
                'blanks' => ['ng generate directive'],
            ],
            [
                'question' => 'Để cấu hình các provider trong Angular module và sử dụng them cho các dependency injection, bạn cần thêm chúng vào section blank_1 của module.',
                'blanks' => ['providers'],
            ],
            [
                'question' => 'Để thực hiện việc xử lý các asynchronous operations với RxJS trong Angular, bạn có thể sử dụng blank_1 và các operator như blank_2.',
                'blanks' => ['Observable', 'map'],
            ],
            [
                'question' => 'Khi bạn cần tạo một component với dynamic content và input bindings, bạn có thể sử dụng decorator blank_1 và khai báo các inputs với blank_2.',
                'blanks' => ['@Component', '@Input'],
            ],
            [
                'question' => 'Để thực hiện việc truyền dữ liệu giữa các components không liên quan với nhau, bạn có thể sử dụng service và subject blank_1.',
                'blanks' => ['BehaviorSubject'],
            ],
            [
                'question' => 'Để thực hiện lazy loading cho module, bạn cần khai báo module trong blank_1 và sử dụng cú pháp blank_2 trong route.',
                'blanks' => ['app-routing.module.ts', 'loadChildren'],
            ],
            [
                'question' => 'Để thực hiện việc tạo các custom validators cho form controls trong Angular, bạn cần định nghĩa một function và sử dụng decorator blank_1.',
                'blanks' => ['@Directive'],
            ],
            [
                'question' => 'Để cấu hình và sử dụng Angular i18n cho localization, bạn cần thực hiện các bước trong file blank_1 và sử dụng dịch vụ blank_2.',
                'blanks' => ['angular.json', 'TranslateService'],
            ],
            [
                'question' => 'Để làm việc với các ng-template và ng-container cho điều kiện hiển thị động, bạn có thể sử dụng cú pháp blank_1 và blank_2.',
                'blanks' => ['ng-template', 'ng-container'],
            ],
            [
                'question' => 'Để thực hiện việc tạo và sử dụng các custom Angular modules, bạn cần khai báo các imports và exports trong file blank_1.',
                'blanks' => ['module.ts'],
            ],
            [
                'question' => 'Để xử lý các errors và exceptions trong Angular, bạn có thể sử dụng service blank_1 và interceptor blank_2.',
                'blanks' => ['ErrorHandler', 'HttpInterceptor'],
            ],
            [
                'question' => 'Để tạo một Angular component với hỗ trợ các animation, bạn cần sử dụng module blank_1 và định nghĩa các animation trong component với blank_2.',
                'blanks' => ['BrowserAnimationsModule', 'trigger'],
            ],
            [
                'question' => 'Để thực hiện việc lazy load các component và modules, bạn cần khai báo các route trong file blank_1 và sử dụng cú pháp blank_2.',
                'blanks' => ['app-routing.module.ts', 'loadChildren'],
            ],
            [
                'question' => 'Để sử dụng các decorator như @ViewChild và @ContentChild để truy cập các phần tử con trong Angular, bạn cần khai báo chúng trong blank_1.',
                'blanks' => ['component.ts'],
            ],
            [
                'question' => 'Để thực hiện việc triển khai các service singleton trong Angular, bạn cần khai báo chúng trong section blank_1 của module.',
                'blanks' => ['providers'],
            ],
            [
                'question' => 'Để thực hiện việc bảo mật với Angular route guards, bạn cần khai báo các guard trong file blank_1 và áp dụng chúng cho các route trong file blank_2.',
                'blanks' => ['app-routing.module.ts', 'route'],
            ],
            [
                'question' => 'Để sử dụng Angular CLI để build ứng dụng cho các môi trường khác nhau, bạn cần cấu hình các environments trong file blank_1.',
                'blanks' => ['angular.json'],
            ],
            [
                'question' => 'Để thực hiện việc tạo và sử dụng các Angular modules với cấu hình khác nhau cho development và production, bạn cần cấu hình các modules trong blank_1.',
                'blanks' => ['app.module.ts'],
            ],
            [
                'question' => 'Để thực hiện việc tạo một HTTP interceptor cho các requests và responses, bạn cần định nghĩa class interceptor trong file blank_1 và đăng ký nó trong module với blank_2.',
                'blanks' => ['http-interceptor.service.ts', 'providers'],
            ],
            [
                'question' => 'Để tạo một custom Angular pipe và sử dụng nó trong các template, bạn cần định nghĩa class pipe trong file blank_1 và khai báo pipe trong blank_2.',
                'blanks' => ['custom.pipe.ts', 'declarations'],
            ],
            [
                'question' => 'Để sử dụng các Angular module của bên thứ ba, bạn cần import module đó trong file blank_1 và khai báo chúng trong section blank_2.',
                'blanks' => ['app.module.ts', 'imports'],
            ],
            [
                'question' => 'Để làm việc với các form arrays trong reactive forms, bạn có thể sử dụng class blank_1 và các phương thức như blank_2.',
                'blanks' => ['FormArray', 'push'],
            ],
            [
                'question' => 'Để định nghĩa các route có sub-routes và nested routes, bạn cần cấu hình chúng trong file blank_1 và sử dụng các route trong component với blank_2.',
                'blanks' => ['app-routing.module.ts', 'RouterOutlet'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các HTTP observables với RxJS, bạn có thể sử dụng các phương thức blank_1 và blank_2.',
                'blanks' => ['map', 'filter'],
            ],
            [
                'question' => 'Để tạo một Angular directive với behavior tùy chỉnh và áp dụng vào các phần tử DOM, bạn cần sử dụng decorator blank_1.',
                'blanks' => ['@Directive'],
            ],
            [
                'question' => 'Để sử dụng các module của bên thứ ba và các plugin trong Angular, bạn cần thêm chúng vào file blank_1 và khai báo trong phần blank_2.',
                'blanks' => ['angular.json', 'scripts'],
            ],
            [
                'question' => 'Để thực hiện việc làm việc với các observables và subject trong Angular, bạn có thể sử dụng class blank_1 và phương thức blank_2.',
                'blanks' => ['Subject', 'next'],
            ],
            [
                'question' => 'Để thực hiện việc bảo mật với các route và áp dụng các guard như AuthGuard, bạn cần định nghĩa guard trong file blank_1 và sử dụng nó trong file blank_2.',
                'blanks' => ['auth.guard.ts', 'app-routing.module.ts'],
            ],
            [
                'question' => 'Để làm việc với các lazy-loaded modules trong Angular, bạn cần cấu hình chúng trong file blank_1 và sử dụng cú pháp blank_2 trong các route.',
                'blanks' => ['app-routing.module.ts', 'loadChildren'],
            ],
            [
                'question' => 'Để sử dụng Angular Material components và directives trong dự án của bạn, bạn cần import module của Material vào file blank_1 và thêm chúng vào section blank_2.',
                'blanks' => ['app.module.ts', 'imports'],
            ],
            [
                'question' => 'Để tối ưu hóa hiệu suất trong Angular khi xử lý các danh sách dài, bạn có thể sử dụng kỹ thuật blank_1 và blank_2 để giảm bớt số lượng phần tử DOM được tạo ra.',
                'blanks' => ['Virtual Scrolling', 'cdk-virtual-scroll-viewport'],
            ],
            [
                'question' => 'Để tạo một Angular module có thể được chia sẻ giữa các dự án, bạn cần định nghĩa module trong file blank_1 và export các component/directive/service cần thiết.',
                'blanks' => ['shared.module.ts'],
            ],
            [
                'question' => 'Khi bạn cần tùy chỉnh cách Angular xử lý dependency injection, bạn có thể sử dụng blank_1 và cung cấp các provider với blank_2.',
                'blanks' => ['NgModule', 'providers'],
            ],
            [
                'question' => 'Để cấu hình Angular CLI để build ứng dụng cho các môi trường khác nhau, bạn cần thêm các cấu hình vào file blank_1 và sử dụng blank_2 để chỉ định môi trường.',
                'blanks' => ['angular.json', '--configuration'],
            ],
            [
                'question' => 'Để tạo một Angular service với singleton pattern và quản lý các dữ liệu chung giữa nhiều components, bạn có thể sử dụng decorator blank_1 và khai báo service trong section blank_2.',
                'blanks' => ['@Injectable', 'providers'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng Angular guards cho các route và bảo mật ứng dụng, bạn cần định nghĩa guard trong file blank_1 và áp dụng vào routes trong file blank_2.',
                'blanks' => ['auth.guard.ts', 'app-routing.module.ts'],
            ],
            [
                'question' => 'Khi cần xử lý các requests và responses HTTP với RxJS trong Angular, bạn có thể sử dụng operator blank_1 và blank_2 để biến đổi dữ liệu và xử lý lỗi.',
                'blanks' => ['catchError', 'switchMap'],
            ],
            [
                'question' => 'Để xây dựng một Angular form với điều kiện validation động và cross-field validation, bạn cần sử dụng class blank_1 và phương thức blank_2.',
                'blanks' => ['FormGroup', 'setValidators'],
            ],
            [
                'question' => 'Để thực hiện việc lazy load các Angular modules và components với cấu hình dynamic routing, bạn cần sử dụng cú pháp blank_1 trong file blank_2.',
                'blanks' => ['loadChildren', 'app-routing.module.ts'],
            ],
            [
                'question' => 'Khi bạn cần sử dụng các Angular dynamic component loading và view containers, bạn có thể sử dụng class blank_1 và phương thức blank_2.',
                'blanks' => ['ViewContainerRef', 'createComponent'],
            ],
            [
                'question' => 'Để xử lý các asynchronous operations và error handling trong Angular service, bạn có thể sử dụng blank_1 và blank_2 từ RxJS.',
                'blanks' => ['mergeMap', 'retry'],
            ],
            [
                'question' => 'Khi bạn cần tạo một Angular module với cấu hình phụ thuộc vào điều kiện runtime, bạn cần sử dụng kỹ thuật blank_1 và định nghĩa các imports trong file blank_2.',
                'blanks' => ['dynamic module loading', 'app.module.ts'],
            ],
            [
                'question' => 'Để tối ưu hóa việc làm việc với các Angular observables và subscription management, bạn có thể sử dụng blank_1 và blank_2 để tự động unsubscribe.',
                'blanks' => ['takeUntil', 'Subject'],
            ],
            [
                'question' => 'Để thực hiện việc bảo mật và kiểm tra quyền truy cập với Angular guards, bạn cần sử dụng class blank_1 và implement các phương thức blank_2.',
                'blanks' => ['CanActivate', 'canActivate'],
            ],
            [
                'question' => 'Khi bạn cần sử dụng Angular CLI để triển khai các file assets và cấu hình các environment variables, bạn cần cấu hình trong file blank_1 và sử dụng blank_2.',
                'blanks' => ['angular.json', 'fileReplacements'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các Angular lifecycle hooks cho component optimization, bạn cần implement các hooks như blank_1 và blank_2.',
                'blanks' => ['ngOnChanges', 'ngOnInit'],
            ],
            [
                'question' => 'Khi bạn cần xử lý việc truyền dữ liệu giữa các component với nhiều cấp độ và các service trung gian, bạn có thể sử dụng blank_1 và blank_2.',
                'blanks' => ['Subject', 'BehaviorSubject'],
            ],
            [
                'question' => 'Để thực hiện việc tạo các dynamic forms và custom form controls, bạn cần sử dụng class blank_1 và phương thức blank_2.',
                'blanks' => ['ControlContainer', 'registerControl'],
            ],
            [
                'question' => 'Để làm việc với các HTTP interceptor trong Angular, bạn cần implement class interceptor trong file blank_1 và đăng ký nó trong blank_2.',
                'blanks' => ['http-interceptor.service.ts', 'providers'],
            ],
            [
                'question' => 'Khi bạn cần sử dụng các Angular animations để tạo các transitions và state changes, bạn cần sử dụng class blank_1 và decorator blank_2.',
                'blanks' => ['trigger', '@Component'],
            ],
            [
                'question' => 'Để thực hiện việc sử dụng các Angular directives cho behavior tùy chỉnh trên DOM elements, bạn cần định nghĩa directive trong file blank_1 và khai báo các selectors trong blank_2.',
                'blanks' => ['custom.directive.ts', 'selector'],
            ],
            [
                'question' => 'Để cấu hình và sử dụng các Angular module cho testing và mock dữ liệu, bạn cần thêm module vào file blank_1 và khai báo các providers trong blank_2.',
                'blanks' => ['test.module.ts', 'providers'],
            ],
            [
                'question' => 'Để tạo các Angular pipes tùy chỉnh với các logic phức tạp và xử lý dữ liệu, bạn cần định nghĩa pipe trong file blank_1 và sử dụng pipe trong template với blank_2.',
                'blanks' => ['custom.pipe.ts', 'pipe'],
            ],
            [
                'question' => 'Để tối ưu hóa việc sử dụng Angular CLI cho các dự án lớn với nhiều cấu hình, bạn có thể cấu hình các options trong file blank_1 và sử dụng blank_2 để triển khai build.',
                'blanks' => ['angular.json', 'ng build'],
            ],
            [
                'question' => 'Khi bạn cần tạo và sử dụng các Angular guards cho các route tùy chỉnh và bảo mật ứng dụng, bạn cần implement guard trong file blank_1 và khai báo chúng trong blank_2.',
                'blanks' => ['auth.guard.ts', 'app-routing.module.ts'],
            ],
            [
                'question' => 'Để cấu hình các Angular animations và transitions cho các elements, bạn cần định nghĩa các state và transitions trong file blank_1 và sử dụng decorator blank_2.',
                'blanks' => ['animations.ts', '@Component'],
            ],
            [
                'question' => 'Khi bạn cần tối ưu hóa việc xử lý các asynchronous data và quản lý state với NgRx, bạn cần định nghĩa các actions trong file blank_1 và reducers trong file blank_2.',
                'blanks' => ['actions.ts', 'reducers.ts'],
            ],
            [
                'question' => 'Để thực hiện việc tạo một Angular service với hỗ trợ caching và tối ưu hóa performance, bạn cần sử dụng service blank_1 và implement các phương thức caching.',
                'blanks' => ['CacheService'],
            ],
            [
                'question' => 'Khi bạn cần sử dụng các Angular modules để tạo các library shareable, bạn cần cấu hình library trong file blank_1 và định nghĩa các exports trong blank_2.',
                'blanks' => ['ng-package.json', 'exports'],
            ],
            [
                'question' => 'Để tối ưu hóa việc xử lý các trạng thái application-wide với NgRx và các hiệu ứng phụ, bạn cần cấu hình các effects trong file blank_1 và sử dụng các actions trong blank_2.',
                'blanks' => ['effects.ts', 'actions.ts'],
            ],
            [
                'question' => 'Để xử lý các exception và errors trong Angular ứng dụng với các global error handlers, bạn cần implement class error handler trong file blank_1 và cung cấp nó trong blank_2.',
                'blanks' => ['global-error-handler.service.ts', 'providers'],
            ],
            [
                'question' => 'Khi bạn cần tạo các Angular modules và components với cấu hình tối ưu cho lazy loading và build, bạn cần sử dụng kỹ thuật blank_1 và định nghĩa các imports trong file blank_2.',
                'blanks' => ['feature modules', 'app.module.ts'],
            ],
            [
                'question' => 'Để sử dụng các kỹ thuật như ChangeDetectionStrategy và OnPush trong Angular để tối ưu hóa performance, bạn cần cấu hình chúng trong file blank_1 và sử dụng blank_2.',
                'blanks' => ['component.ts', 'ChangeDetectionStrategy'],
            ],
            [
                'question' => 'Để cấu hình các Angular services cho việc tạo các HTTP requests với retry và error handling, bạn cần sử dụng các operator blank_1 và blank_2 từ RxJS.',
                'blanks' => ['retry', 'catchError'],
            ],
            [
                'question' => 'Khi bạn cần thực hiện việc tạo các forms với reactive form và custom validators, bạn cần sử dụng class blank_1 và implement các phương thức blank_2.',
                'blanks' => ['FormBuilder', 'validator'],
            ],
            [
                'question' => 'Để cấu hình các routing cho các Angular modules với các lazy loading, bạn cần sử dụng kỹ thuật blank_1 và khai báo các routes trong file blank_2.',
                'blanks' => ['loadChildren', 'app-routing.module.ts'],
            ],
            [
                'question' => 'Khi bạn cần tối ưu hóa việc sử dụng Angular CLI cho các dự án lớn và có nhiều cấu hình build khác nhau, bạn cần cấu hình các build options trong file blank_1 và sử dụng blank_2.',
                'blanks' => ['angular.json', 'ng build'],
            ],
            [
                'question' => 'Để làm việc với các Angular observables và xử lý các streams dữ liệu phức tạp, bạn cần sử dụng các operator như blank_1 và blank_2 từ RxJS.',
                'blanks' => ['mergeMap', 'switchMap'],
            ],
            [
                'question' => 'Khi bạn cần quản lý các trạng thái phức tạp và các actions trong ứng dụng Angular với NgRx, bạn cần định nghĩa các actions trong file blank_1 và cấu hình các reducers trong blank_2.',
                'blanks' => ['actions.ts', 'reducers.ts'],
            ],
            [
                'question' => 'Để sử dụng Angular Universal cho server-side rendering, bạn cần cấu hình các files trong blank_1 và cài đặt các packages cần thiết với blank_2.',
                'blanks' => ['server.ts', 'ng add @nguniversal/express-engine'],
            ],
            [
                'question' => 'Khi bạn cần sử dụng Angular CLI để thực hiện việc tạo các components, services, và modules với cấu hình tùy chỉnh, bạn có thể sử dụng lệnh blank_1 và các options như blank_2.',
                'blanks' => ['ng generate', '--module'],
            ],
            [
                'question' => 'Để tạo các Angular services với các dependencies và configuration phức tạp, bạn cần sử dụng class blank_1 và khai báo các providers trong blank_2.',
                'blanks' => ['HttpService', 'providers'],
            ],
            [
                'question' => 'Để thực hiện việc tạo các custom decorators cho các Angular components và directives, bạn cần định nghĩa decorator trong file blank_1 và sử dụng blank_2 trong class.',
                'blanks' => ['custom-decorator.ts', '@Component'],
            ],
            [
                'question' => 'Khi bạn cần thực hiện việc tối ưu hóa performance và xử lý các async operations với Angular, bạn cần sử dụng các kỹ thuật như blank_1 và blank_2.',
                'blanks' => ['async pipe', 'OnPush'],
            ],
            [
                'question' => 'Để tạo các Angular forms với các trường nhập liệu phức tạp và validation động, bạn cần sử dụng class blank_1 và phương thức blank_2.',
                'blanks' => ['FormGroup', 'setValidators'],
            ],
        ];
    }
}
