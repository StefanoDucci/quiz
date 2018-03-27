<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anwser;

class AnwserController extends Controller
{
    public function get($questionId)
    {
        return Anwser::
            where('question_id', $questionId)
            ->get();
    }
}
