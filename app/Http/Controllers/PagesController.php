<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Essay;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use BayAreaWebPro\MultiStepForms\MultiStepForm;

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
    public function viewQuiz($id)
    {
        $quizs = Quiz::where('category_id', $id)->get();

        return view('frontend.view_quiz', compact('quizs'));
    }


    // public function viewQuizDetail($id)
    // {

    // }


    public function startQuiz($id, $type)
    {
        if (Auth::check()) {

            // $data = Result::where([['quiz_id', $id], ['user_id', Auth::user()->id]])
            //     ->whereMonth('created_at', date('m'))
            //     ->count();
            // $counter = Result::where('user_id', Auth::user()->id)
            //     ->whereMonth('created_at', date('m'))
            //     ->count();

            // if ($data) {
            //     return redirect()->back()->withSuccess('You already have given this test. Please try again next month.');
            // }
            // // dd($counter);
            // if ($counter >= 3) {
            //     return redirect()->back()->withSuccess('You already have given 3 tests for this month. Please try again next month.');
            // }


            // dd($id, $type);

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


            $ques = [];
            $ess = [];

            foreach ($questions as $item) {
                array_push($ques, [
                    "id" => $item->id,
                    "quiz_id" => $item->quiz_id,
                    "question" => $item->question,
                    "option_1" => $item->option_1,
                    "option_2" => $item->option_2,
                    "option_3" => $item->option_3,
                    "option_4" => $item->option_4,
                    "answer" => $item->answer
                ]);
            }

            foreach ($essays as $item) {
                array_push($ess, [
                    "id" => $item->id,
                    "quiz_id" => $item->quiz_id,
                    "question" => $item->question,
                    "blanks" => $item->blanks
                ]);
            }

            $allQuestions = array_merge($ques, $ess);

            // dd($allQuestions);

            return view('frontend.start_quiz', compact('quiz', 'allQuestions', 'limit'));
        } else {
            return redirect("login")->withSuccess('Vui lòng đăng nhập để làm bài.');
        }
    }


    public function result(Request $request)
    {
        // dd($request);
        $quiz = Quiz::find($request->quiz_id);
        $countQuiz = Question::where('quiz_id', $request->quiz_id)->count();

        $user = Auth::user()->id;
        $score = 0;


        dd($request->all());

        foreach ($request->answers as $q => $answer) {

            $question = Question::find($q);

            if ($question->answer == $answer) {
                ++$score;
            }
        }

        $blanks = explode(',',$request->blanks);
        dd($blanks);

        Result::create([
            'user_id' => $user,
            'quiz_id' => $quiz->id,
            'score'   => $score,
            'count_quiz'   => $countQuiz,
        ]);

        return view('frontend.quiz_result', compact('quiz', 'score'));
    }
}
