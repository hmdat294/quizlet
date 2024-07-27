<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Result;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {

        if (Auth::check() && Auth::user()->is_admin) {
            $data = [
                'users' => User::count(),
                'quizs' => Quiz::count(),
                'questions' => Question::count(),
                'results' => Result::count(),
                'feedbacks' => Feedback::count(),
                'stars' => Feedback::sum('star')/Feedback::count(),
            ];

            // Thống kê category
            $categories = Category::withCount('quizs')->get();
            $categoryNames = $categories->pluck('title');
            $quizCounts = $categories->pluck('quizs_count');
            $feedbacks = Feedback::all();

            // Thống kê số lượt làm bài theo loại quiz
            $quizTypes = [0 => 'trắc nghiệm', 1 => 'điền vào chỗ trống', 2 => 'kết hợp'];

            $results = [];
            foreach ($quizTypes as $type => $typeName) {
                $totalQuizzes = Quiz::where('type', $type)->count();
                $completedQuizzes = Result::whereHas('quiz', function ($query) use ($type) {
                    $query->where('type', $type);
                })->count();

                $results[$typeName] = [
                    'completed' => $completedQuizzes,
                    'total' => $totalQuizzes,
                    'percentage' => $totalQuizzes > 0 ? ($completedQuizzes / $totalQuizzes) * 100 : 0,
                ];
            }

            
            return view('backend.dashboard', compact('data', 'categoryNames', 'quizCounts', 'results', 'feedbacks'));
        }


        return redirect("login")->withSuccess('Opps! You do not have access');
    }
}
