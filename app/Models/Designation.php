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
    public function audits()
    {
        return $this->hasMany('App\Models\Librarian');
    }
    public function medical_officers()
    {
        return $this->hasMany('App\Models\MedicalOfficer');
    }
    public function exam_controllers()
    {
        return $this->hasMany('App\Models\ExamController');
    }
    public function student_instructors()
    {
        return $this->hasMany('App\Models\StudentInstructor');
    }
    public function planning_development_officers()
    {
        return $this->hasMany('App\Models\PlanningDevelopmentOfficer');
    }
}