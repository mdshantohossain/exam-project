<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Result;
use Illuminate\Http\Request;
use DB;

class ExamController extends Controller
{
    public function index()
    {

        return view('exam.index', [
            'questions' => Question::where('status', 0)->get(),
            'exam_name' => Question::where('status', 0)->select('exam_name')->distinct()->get(),
            'teachers' => DB::table('questions')->select('examiner_name')->distinct()->get()
        ]);
    }

    public function answer(Request $request)
    {

        $this->validate($request, [
            'answer.*' => 'required'
        ], [
            'answer.*.required' => 'The answer field is required.'
        ]);


        Result::newAnswer($request);
        return back()->with('message', 'your answer submit successful');
    }

    public function home()
    {
        return view('home.index');
    }

    public function question()
    {
        return view('exam.question');
    }

    public function questionCreate(Request $request)
    {
        $this->validate($request, [
            'question_title' => 'required'
        ]);
        Question::newQuestion($request);
        return back()->with('message', 'One question added');
    }
    public function edit($id)
    {

        return view('exam.edit', [
            'results' => Result::where('student_id', $id)
                ->where('mark', 0)
                ->get(),
            'teachers' => DB::table('results')
                ->where('student_id', $id)
                ->where('mark', 0)
            ->select('examiner_name')
            ->distinct()
            ->get(),
            'students' => DB::table('results')
            ->where('student_id', $id)
            ->where('mark', 0)
            ->select('student_name', 'student_id', 'batch_no')
            ->distinct()
            ->get(),
            'exam_name' => DB::table('results')
            ->where('mark', 0)
            ->select('exam_name')
            ->distinct()
            ->get()
        ]);
    }

    public function result()
    {
        return view('exam.result', [
            'students' => Result::where('mark', 0)
                ->select('student_name', 'student_id', 'batch_no')
                ->distinct()
                ->get()
        ]);
    }

    public function getResult(Result $result)
    {
        Answer::newResult($result);
        return redirect('/result')->with('message', 'update successful');
    }
}
