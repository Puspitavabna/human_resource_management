<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    public function faculty()
    {
        return $this->belongsTo('App\Models\Faculty');
    }
    public function facultyMembers()
    {
        return $this->hasMany('App\Models\FacultyMember');
    }
}