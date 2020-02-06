<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HallMember extends Model
{
    public function hall()
    {
        return $this->belongsTo('App\Models\Hall');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function designation()
    {
        return $this->belongsTo('App\Models\Designation');
    }
}