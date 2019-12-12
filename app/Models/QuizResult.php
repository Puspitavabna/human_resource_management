<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    public function quiz_topic()
    {
        return $this->belongsTo('App\Models\Designation');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}