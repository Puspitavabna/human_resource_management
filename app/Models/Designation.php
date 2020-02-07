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
    public function facultyMembers()
    {
        return $this->hasMany('App\Models\FacultyMember');
    }
    public function facultyOffice()
    {
        return $this->hasMany('App\Models\FacultyOffice');
    }
    public function research_cell()
    {
        return $this->hasMany('App\Models\ResearchCell');
    }
    public function vc_ofice()
    {
        return $this->hasMany('App\Models\VcOffice');
    }
    public function cyber_center()
    {
        return $this->hasMany('App\Models\CyberCenter');
    }
    public function bncc()
    {
        return $this->hasMany('App\Models\Bncc');
    }
    public function traffic_section()
    {
        return $this->hasMany('App\Models\TrafficSection');
    }
    public function harassments()
    {
        return $this->hasMany('App\Models\Harassment');
    }
    public function ict_cell()
    {
        return $this->hasMany('App\Models\IctCell');
    }
    public function environment_development()
    {
        return $this->hasMany('App\Models\EnvironmentDevelopment');
    }
    public function officer_association()
    {
        return $this->hasMany('App\Models\OfficerAssociation');
    }
    public function pro_vc_office()
    {
        return $this->hasMany('App\Models\ProVcOffice');
    }
    public function regulations()
    {
        return $this->hasMany('App\Models\Regulation');
    }
    public function publication_office()
    {
        return $this->hasMany('App\Models\PublicationOffice');
    }
}