<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public static $question;

    public static function newQuestion($request)
    {
        self::$question = new Question();
        self::$question->question_title = $request->question_title;
        self::$question->question_body = $request->question_body;
        self::$question->point = $request->point;
        self::$question->exam_name = $request->exam_name;
        self::$question->examiner_name = $request->examiner_name;
        self::$question->save();
    }
}
