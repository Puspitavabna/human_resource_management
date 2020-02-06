<?php

namespace App\Models;

use App\User;
use App\Models\Faculty;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{

    const GENDER = [
        'Male'=>'Male',
        'Female'=>'Female',
    ];

    const BLOOD_GROUP = [
        'A+'=>'A+',
        'A-'=>'A-',
        'B+'=>'B+',
        'B-'=>'B-',
        'AB+'=>'AB+',
        'AB-'=>'AB-',
        'O+'=>'O+',
        'O-'=>'O-',
    ];

    protected $fillable = ['user_id','faculty_id','department_id','designation_id','phone','gender','blood_group','joining_date','about','interested_area'];

    /**
     * Get the Faculty that owns the model.
     */
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    /**
     * Get the Department that owns the model.
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Get the Designation that owns the model.
     */
    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    /**
     * Get the User that owns the model.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
