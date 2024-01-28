<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    public static $answer, $result;

    public static function newResult($result)
    {
        self::$result = Result;
        self::$answer = new Answer();
    }
}
