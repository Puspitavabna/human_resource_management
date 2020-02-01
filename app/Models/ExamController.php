<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamController extends Model
{

    public function designation()
    {
        return $this->belongsTo('App\Models\Designation');
    }
}