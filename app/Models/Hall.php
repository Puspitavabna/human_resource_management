<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    public function hallmembers()
    {
        return $this->hasMany('App\Models\Hall');
    }
}