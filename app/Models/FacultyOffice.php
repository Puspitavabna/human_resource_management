<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacultyOffice extends Model
{
    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }
    public function faculty()
    {
        return $this->belongsTo('App\Models\Faculty');
    }
    public function designation()
    {
        return $this->belongsTo('App\Models\Designation');
    }
}