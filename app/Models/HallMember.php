<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HallMember extends Model
{
    public function hall()
    {
        return $this->belongsTo('App\Models\Hall');
    }
}