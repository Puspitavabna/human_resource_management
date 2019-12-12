<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function quiz_answers()
    {
        return $this->hasMany('App\Models\Faculty');
    }
    public function quiz_topic(){
        return $this->belongsTo('App\Models\Designation');
    }
}