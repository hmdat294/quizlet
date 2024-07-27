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
        // Gọi các Seeder dữ liệu
        $dataHtml = new DataHtmlSeeder();
        $dataCss = new DataCssSeeder();
        $dataJavaScript = new DataJavaScriptSeeder();
        $dataPhp = new DataPhpSeeder();
        $dataLaravel = new DataLaravelSeeder();
        $dataAngular = new DataAngularSeeder();
        $dataReact = new DataReactSeeder();

         // Lấy dữ liệu câu hỏi và bài viết từ các Seeder
         $questions_html = $dataHtml->questions_html;
         $essays_html = $dataHtml->essays_html;

         $questions_css = $dataCss->questions_css;
         $essays_css = $dataCss->essays_css;

         $questions_javascript = $dataJavaScript->questions_javascript;
         $essays_javascript = $dataJavaScript->essays_javascript;

         $questions_php = $dataPhp->questions_php;
         $essays_php = $dataPhp->essays_php;


         $questions_laravel = $dataLaravel->questions_laravel;
         $essays_laravel = $dataLaravel->essays_laravel;

         $questions_angular = $dataAngular->questions_angular;
         $essays_angular = $dataAngular->essays_angular;

         $questions_react = $dataReact->questions_react;
         $essays_react = $dataReact->essays_react;

        //Trắc nghiệm
        $quizs_html0 = Quiz::where('category_id', 1)->where('type', 0)->get();
        $quizs_css0 = Quiz::where('category_id', 2)->where('type', 0)->get();
        $quizs_javascript0 = Quiz::where('category_id', 3)->where('type', 0)->get();
        $quizs_php0 = Quiz::where('category_id', 4)->where('type', 0)->get();
        $quizs_angular0 = Quiz::where('category_id', 5)->where('type', 0)->get();
        $quizs_laravel0 = Quiz::where('category_id', 6)->where('type', 0)->get();
        $quizs_react0 = Quiz::where('category_id', 7)->where('type', 0)->get();

        //Điền vào chỗ trống
        $quizs_html1 = Quiz::where('category_id', 1)->where('type', 1)->get();
        $quizs_css1 = Quiz::where('category_id', 2)->where('type', 1)->get();
        $quizs_javascript1 = Quiz::where('category_id', 3)->where('type', 1)->get();
        $quizs_php1 = Quiz::where('category_id', 4)->where('type', 1)->get();
        $quizs_angular1 = Quiz::where('category_id', 5)->where('type', 1)->get();
        $quizs_laravel1 = Quiz::where('category_id', 6)->where('type', 1)->get();
        $quizs_react1 = Quiz::where('category_id', 7)->where('type', 1)->get();

        //Kết hợp
        $quizs_html2 = Quiz::where('category_id', 1)->where('type', 2)->get();
        $quizs_css2 = Quiz::where('category_id', 2)->where('type', 2)->get();
        $quizs_javascript2 = Quiz::where('category_id', 3)->where('type', 2)->get();
        $quizs_php2 = Quiz::where('category_id', 4)->where('type', 2)->get();
        $quizs_angular2 = Quiz::where('category_id', 5)->where('type', 2)->get();
        $quizs_laravel2 = Quiz::where('category_id', 6)->where('type', 2)->get();
        $quizs_react2 = Quiz::where('category_id', 7)->where('type', 2)->get();


        $this->renderQuestion($quizs_html0, $questions_html);
        $this->renderQuestion($quizs_css0, $questions_css);
        $this->renderQuestion($quizs_javascript0, $questions_javascript);
        $this->renderQuestion($quizs_php0, $questions_php);
        $this->renderQuestion($quizs_angular0, $questions_angular);
        $this->renderQuestion($quizs_laravel0, $questions_laravel);
        $this->renderQuestion($quizs_react0, $questions_react);


        $this->renderEssay($quizs_html1, $essays_html);
        $this->renderEssay($quizs_css1, $essays_css);
        $this->renderEssay($quizs_javascript1, $essays_javascript);
        $this->renderEssay($quizs_php1, $essays_php);
        $this->renderEssay($quizs_angular1, $essays_angular);
        $this->renderEssay($quizs_laravel1, $essays_laravel);
        $this->renderEssay($quizs_react1, $essays_react);


        $this->renderQuestionAndEssay($quizs_html2, $questions_html, $essays_html);
        $this->renderQuestionAndEssay($quizs_css2, $questions_css, $essays_css);
        $this->renderQuestionAndEssay($quizs_javascript2, $questions_javascript, $essays_javascript);
        $this->renderQuestionAndEssay($quizs_php2, $questions_php, $essays_php);
        $this->renderQuestionAndEssay($quizs_angular2, $questions_angular, $essays_angular);
        $this->renderQuestionAndEssay($quizs_laravel2, $questions_laravel, $essays_laravel);
        $this->renderQuestionAndEssay($quizs_react2, $questions_react, $essays_react);
    }

    function renderQuestion($quizs, $questions)
    {
        foreach ($quizs as $i => $quiz) {
            for ($j = 0; $j < 10; $j++) {
                $index = $i * 10 + $j;

                if ($index >= count($questions)) break;

                $item = $questions[$index];

                Question::insert([
                    'quiz_id' => $quiz->id,
                    'question' => $item['question'],
                    'option_1' => $item['option_1'],
                    'option_2' => $item['option_2'],
                    'option_3' => $item['option_3'],
                    'option_4' => $item['option_4'],
                    'answer' => $item['answer'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        };
    }

    function renderEssay($quizs, $essays)
    {
        foreach ($quizs as $i => $quiz) {
            for ($j = 0; $j < 5; $j++) {
                $index = $i * 5 + $j;

                if ($index >= count($essays)) break;

                $item = $essays[$index];

                Essay::insert([
                    'quiz_id' => $quiz->id,
                    'question' => $item['question'],
                    'blanks' => $item['blanks'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        };
    }

    function renderQuestionAndEssay($quizs, $questions, $essays)
    {
        foreach ($quizs as $i => $quiz) {
            for ($j = 0; $j < 7; $j++) {
                $index = $i * 7 + $j;

                if ($index >= count($questions)) break;

                $item = $questions[$index];

                Question::insert([
                    'quiz_id' => $quiz->id,
                    'question' => $item['question'],
                    'option_1' => $item['option_1'],
                    'option_2' => $item['option_2'],
                    'option_3' => $item['option_3'],
                    'option_4' => $item['option_4'],
                    'answer' => $item['answer'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            for ($j = 0; $j < 3; $j++) {
                $index = $i * 3 + $j;

                if ($index >= count($essays)) break;

                $item = $essays[$index];

                Essay::insert([
                    'quiz_id' => $quiz->id,
                    'question' => $item['question'],
                    'blanks' => $item['blanks'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        };

    }
}
