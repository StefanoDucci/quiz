<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;

class Anwser extends Model
{
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
