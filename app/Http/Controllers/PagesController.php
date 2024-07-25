<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Essay;
use App\Models\Feedback;
use App\Mail\Feedback as MailFeedback;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use BayAreaWebPro\MultiStepForms\MultiStepForm;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $categories = Category::where('status', 1)->get();

        return view('frontend.home', compact('categories'));
    }


    public function aboutUs()
    {
        return view('frontend.about_us');
    }


    public function profile()
    {
        $user = Auth::user();
        $results = Result::where('user_id', $user->id)->latest()->get();



        return view('frontend.profile', compact('user', 'results'));
    }


    public function profileUpdate(Request $request, $id)
    {


        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        $user = User::find($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('home')->with('success', 'Cập nhật thông tin thành công.');
        // return view('frontend.profile', compact('user'));
    }

    public function quizzes()
    {
        $categories = Category::where('status', 1)->get();

        return view('frontend.quizzes', compact('categories'));
    }

    /**
     * Display the specified resource.
     */
    public function viewQuiz($id, $level = 0)
    {
        // dd($level);
        
        $quizs = Quiz::where('category_id', $id)->where('level', $level)->get();

        return view('frontend.view_quiz', compact('quizs', 'id', 'level'));
    }


    // public function viewQuizDetail($id)
    // {

    // }


    public function startQuiz($id, $type)
    {
        if (Auth::check()) {
            $quiz = Quiz::where('type', $type)->find($id);
            $limit_qs = Question::where('quiz_id', $id)->count();
            $limit_es = Essay::where('quiz_id', $id)->count();
            $limit = $limit_qs + $limit_es;


            $questions = Question::where('quiz_id', $id)
                ->inRandomOrder()
                ->limit($limit)
                ->get();

            $essays = Essay::where('quiz_id', $id)
                ->inRandomOrder()
                ->limit($limit)
                ->get();

            // Chuyển đổi câu hỏi trắc nghiệm thành mảng
            $ques = $questions->map(function ($item) {
                return [
                    "id" => $item->id,
                    "q_type" => "question",
                    "quiz_id" => $item->quiz_id,
                    "question" => $item->question,
                    "option_1" => $item->option_1,
                    "option_2" => $item->option_2,
                    "option_3" => $item->option_3,
                    "option_4" => $item->option_4,
                    "answer" => $item->answer
                ];
            })->toArray();

            // Chuyển đổi bài luận thành mảng
            $ess = $essays->map(function ($item) {
                return [
                    "id" => $item->id,
                    "q_type" => "essay",
                    "quiz_id" => $item->quiz_id,
                    "question" => $item->question,
                    "blanks" => $item->blanks
                ];
            })->toArray();

            // Kết hợp câu hỏi trắc nghiệm và bài luận
            $allQuestions = array_merge($ques, $ess);
            // dd($allQuestions);

            // Xáo trộn các câu hỏi
            $random = shuffle($allQuestions);

            // Trả về view với dữ liệu
            return view('frontend.start_quiz', compact('quiz', 'allQuestions', 'limit'));
            // $ques = [];
            // $ess = [];

            // foreach ($questions as $item) {
            //     array_push($ques, [
            //         "id" => $item->id,
            //         "quiz_id" => $item->quiz_id,
            //         "question" => $item->question,
            //         "option_1" => $item->option_1,
            //         "option_2" => $item->option_2,
            //         "option_3" => $item->option_3,
            //         "option_4" => $item->option_4,
            //         "answer" => $item->answer
            //     ]);
            // }

            // foreach ($essays as $item) {
            //     array_push($ess, [
            //         "id" => $item->id,
            //         "quiz_id" => $item->quiz_id,
            //         "question" => $item->question,
            //         "blanks" => $item->blanks
            //     ]);
            // }

            // $allQuestions = array_merge($ques, $ess);


            // return view('frontend.start_quiz', compact('quiz', 'allQuestions', 'limit'));
        } else {
            return redirect("login")->withSuccess('Vui lòng đăng nhập để làm bài.');
        }
    }


    public function result(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $quiz = Quiz::find($request->quiz_id);
        $countQuiz = Question::where('quiz_id', $quiz->id)->count();
        $countEssay = Essay::where('quiz_id', $quiz->id)->count();

        $numberQuestion = $countQuiz + $countEssay;

        $user = Auth::user()->id;
        $score = 0;

        $questions = Question::where('quiz_id', $request->quiz_id)->get();

        $results = [];


        foreach ($questions as $q) {
            $option = $data['options'][$q->id] ?? null;

            if ($option && $option == $q->answer) {
                $score += 1;
            }
            $results[] = [
                'type' => 'question',
                'id' => $q->id,
                'question' => $q->question,
                'selected' => $option,
                'isCorrect' => $option == $q->answer ? 1 : 0,
                // 'score' => $score,
            ];
        }

        $essays = Essay::where('quiz_id', $request->quiz_id)->get();
        $essaysData = [];

        foreach ($essays as $index => $q) {
            $correctBlanks = explode(',', $q->blanks); // Đáp án đúng từ cơ sở dữ liệu
            $userAnswers = [];
            $compare = [];
            $isCorrect = 1;

            foreach ($correctBlanks as $i => $correctAnswer) {
                $userAnswer = $data['essays'][$q->id]['blank_' . ($i + 1)] ?? null;
                $userAnswers['blank_' . ($i + 1)] = $userAnswer;
                // if($userAnswer == $correctAnswer) {
                //     $isCorrect = 1;
                // }
                $compare['blank_' . ($i + 1)] = [
                    'correct' => $correctAnswer,
                    'user' => $userAnswer,
                    'isCorrect' => strtolower(trim($userAnswer)) === strtolower(trim($correctAnswer))
                ];
                if ($userAnswer === null || strtolower(trim($userAnswer)) != strtolower(trim($correctAnswer))) {
                    $isCorrect = 0;
                }
            }

            if ($isCorrect) {
                $score += 1;
            }

            if (!empty($userAnswers)) {
                $essaysData[] = [
                    'type' => 'essay',
                    'id' => $q->id,
                    'question' => $q->question,
                    'correctBlanks' => implode(',', $correctBlanks),
                    'blanks' => $userAnswers,
                    'userAnswers' => implode(',', $userAnswers),
                    'compare' => $compare,
                    'isCorrect' => $isCorrect,
                    // 'score' => $score,
                ];
            }
        }
        $results = array_merge($results, $essaysData);
        // dd($results);

        Result::create([
            'user_id' => $user,
            'quiz_id' => $quiz->id,
            'score' => $score,
            'count_quiz' => $numberQuestion
        ]);
        return view('frontend.quiz_result', compact('quiz', 'score', 'numberQuestion'));
    }


    public function feedback(Request $request)
    {
        $feedback = $request->validate([
            'user_id' => 'required',
            'quiz_id' => 'required',
            'star' => 'required|min:1',
            'content' => 'required',
        ]);

        $flag = Feedback::create($feedback);

        if ($flag) {

            $results = Result::where('quiz_id', $request->quiz_id)->latest()->first();

            Mail::to(Auth::user()->email)->send(
                new MailFeedback(
                    [
                        "name" => Auth::user()->name,
                        "score" => $results->score,
                        "count_quiz" => $results->count_quiz,
                        "category" => Category::find($results->quiz->category_id)->title,
                        "title" => $results->quiz->title,
                        "description" => $results->quiz->description,
                        "duration" => $results->quiz->duration,
                        "type" => ($results->quiz->type == 0) ? 'Trắc nghiệm' : (($results->quiz->type == 1) ? 'Điền vào chỗ trống' : (($results->quiz->type == 2) ? 'Kết hợp' : '')),
                        "star" => $request->star,
                        "content" => $request->content
                    ]
                )
            );

            return redirect()->route('home')->with('success', 'Gửi đánh giá thành công!');
        } else {
            return redirect()->back()->with('errors', 'Gửi đánh giá không thành công!');
        }
    }
}
