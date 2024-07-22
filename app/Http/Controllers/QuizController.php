<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Result;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizs = Quiz::latest()->get();

        return view('backend.quizs.index', compact('quizs'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status', '!=', 0)->get();
        return view('backend.quizs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $quizValidate = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'duration' => 'required',
            'type' => 'required',
            'description' => 'required'
        ]);


        $quiz = Quiz::create($quizValidate);

        foreach ($request->input('questions') as $key => $question) {
            Question::create([
                'quiz_id'  => $quiz->id,
                'question'  => $question['question'],
                'option_1'  => $question['options'][0],
                'option_2'  => $question['options'][1],
                'option_3'  => $question['options'][2],
                'option_4'  => $question['options'][3],
                'answer'    => $question['correct_answer'],
            ]);
        }
        return redirect()->route('quizs.index')->with('success', 'Thêm mới câu hỏi thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function quizResults()
    {
        $results = Result::latest()->get();
        // dd($results);
        return view('backend.quizs.results', compact('results'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        $categories = Category::all();
        $questions = Question::where('quiz_id', $quiz->id)->get();
        return view('backend.quizs.edit', compact('quiz', 'categories', 'questions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz $quiz)
    {
        $request->validate([
            'title' => 'required',
            'duration' => 'required',
        ]);

        $quiz->update($request->all());

        return redirect()->route('quizs.index')->with('success', 'Cập nhật câu hỏi thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        $quiz->delete();

        return redirect()->route('quizs.index')->with('success', 'Xoá dữ liệu bài Quiz thành công');
    }
}
