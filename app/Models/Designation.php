<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}