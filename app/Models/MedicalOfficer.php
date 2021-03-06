<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalOfficer extends Model
{

    public function designation()
    {
        return $this->belongsTo('App\Models\Designation');
    }
}