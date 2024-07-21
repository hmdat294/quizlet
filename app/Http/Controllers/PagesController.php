<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

        return redirect()->route('home')->with('success', 'Profile updated successfully');
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


    public function startQuiz($id)
    {
        if (Auth::check()) {

            $quiz = Quiz::find($id);
            $limit = Question::where('quiz_id', $id)->count();


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

            $questions = Question::where('quiz_id', $id)
                ->inRandomOrder()
                ->limit($limit)
                ->get();

            // dd($questions);

            return view('frontend.start_quiz', compact('quiz', 'questions', 'limit'));
        } else {
            return redirect("login")->withSuccess('Please Login to Start Test');
        }
    }


    public function result(Request $request)
    {
        // dd($request);
        $quiz = Quiz::find($request->quiz_id);
        $countQuiz = Question::where('quiz_id', $request->quiz_id)->count();

        $user = Auth::user()->id;
        $score = 0;


        // dd($request->answers);

        foreach ($request->answers as $q => $answer) {

            $question = Question::find($q);

            if ($question->answer == $answer) {
                ++$score;
            }
        }
        // dd($score);

        Result::create([
            'user_id' => $user,
            'quiz_id' => $quiz->id,
            'score'   => $score,
            'count_quiz'   => $countQuiz,
        ]);

        return view('frontend.quiz_result', compact('quiz', 'score'));
    }
}
