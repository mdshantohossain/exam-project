<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    public static $result, $question;

    public static function newAnswer($request)
    {
        foreach ($request['question_id'] as $key => $questionId)
        {
            self::$question = Question::find($questionId);
            self::$result = new Result();
            self::$result->student_name = $request->student_name;
            self::$result->student_id = $request->student_id;
            self::$result->batch_no = $request->batch_no;
            self::$result->exam_name = self::$question->exam_name;
            self::$result->examiner_name = $request->examiner_name;
            self::$result->question_title = self::$question->question_title;
            self::$result->question_body = self::$question->question_body;
            self::$result->point = self::$question->point;
            self::$result->answer = $request['answer'][$key];
            self::$result->save();
        }
    }
}
