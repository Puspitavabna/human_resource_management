<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }
    public function designation()
    {
        return $this->belongsTo('App\Models\Designation');
    }
}