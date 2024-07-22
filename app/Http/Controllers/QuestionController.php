<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Quiz;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $quiz = Quiz::find($id);
        $questions = Question::with('quiz')->latest()->get();

        return view('backend.quizs.questions', compact('questions', 'quiz'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $tests = Test::all();
        // return view('backend.questions.create',);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());
        // $request->validate([
        //     'test_id' => 'required|exists:tests,id',
        //     'questions.*.question' => 'required',
        //     'questions.*.options.*' => 'required',
        //     'questions.*.correct_answer' => 'required|integer|min:0|max:3',
        // ]);


        // foreach ($request->input('questions') as $key => $question) {
        //     Question::create([
        //         'test_id'  => $request->test_id,
        //         'question'  => $question['question'],
        //         'option_1'  => $question['options'][0],
        //         'option_2'  => $question['options'][1],
        //         'option_3'  => $question['options'][2],
        //         'option_4'  => $question['options'][3],
        //         'answer'    => $question['correct_answer'],
        //     ]);
        // }

        // return redirect()->route('questions.index')->with('success', 'Question created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        // $tests = Test::all();


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Lấy dữ liệu từ request
        // dd($request->all());
        $request->validate([
            'quiz_id' => 'required',
            'question' => 'required',
            'option_1' => 'required',
            'option_2' => 'required',
            'option_3' => 'required',
            'option_4' => 'required',
            'answer' => 'required',
        ]);
        $question = Question::findOrFail($id);
        $flag = $question->update($request->all());
        if (!$flag) {
            return redirect()->back()->with('error', 'Sửa thông tin thất bại');
        }
        return redirect()->back()->with('success', 'Sửa thông tin thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->route('quizs.index')->with('success', 'Question deleted successfully');
    }
}
