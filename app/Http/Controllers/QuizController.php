<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Essay;
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
            'title' => 'required|string|max:255',
            'duration' => 'required|integer',
            'description' => 'nullable|string',
            'type' => 'required|integer|in:0,1,2',
            'category_id' => 'required'
        ]);
        $quiz_type = $request->input('type');


        $quiz = Quiz::create($quizValidate);
        if ($quiz_type == 0 || $quiz_type == 2) {
            $questionValidate = $request->validate([
                'questions.*.question' => 'string|max:255',
                'questions.*.options.*' => 'string|max:255',
                'questions.*.correct_answer' => 'integer|min:1|max:4',
            ]);
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
        }


        if ($quiz_type == 1 || $quiz_type == 2) {
            $essayValidate = $request->validate([
                'essays.*.essay' => 'string',
                'essays.*.blanks.*' => 'string|max:255',
            ]);
            $quiz_essay = [];
            foreach ($request->essays as $i) {

                $question = $i['essay'];

                foreach ($i['blanks'] as $index => $keyword) {
                    $question = Str::replace($keyword, '[blank_' . ($index + 1) . ']', $question);
                }

                array_push($quiz_essay, ['essay' => $question, 'blanks' => $i['blanks']]);
            }
            foreach ($quiz_essay as $key => $essay) {
                Essay::create([
                    'quiz_id'  => $quiz->id,
                    'question'  => $essay['essay'],
                    'blanks' => implode(',', $essay['blanks'])
                ]);
            }
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
            'description' => 'required'
        ]);

        $quiz->update($request->all());

        return redirect()->back()->with('success', 'Cập nhật câu hỏi thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        $quiz->delete();

        return redirect()->back()->with('success', 'Xoá dữ liệu bài Quiz thành công');
    }
}
