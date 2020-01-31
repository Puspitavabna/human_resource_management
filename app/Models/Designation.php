<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function registers()
    {
        return $this->hasMany('App\Models\Register');
    }
    public function librarians()
    {
        return $this->hasMany('App\Models\Librarian');
    }
}