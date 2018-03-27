<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Anwser;

class Question extends Model
{
    public function anwserers()
    {
        return $this->hasMany(Anwser::class);
    }
}
