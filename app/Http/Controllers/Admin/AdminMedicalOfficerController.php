<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Section;
use App\Models\HallMember;
use App\Models\MedicalOfficer;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminMedicalOfficerController extends Controller
{
    public function index(){
        $medical_officers = MedicalOfficer::all();
        return view('admin.medical_officer.index', compact('medical_officers'));
    }
    public function create(){
        $medical_officers = MedicalOfficer::all();
        $designations = Designation::all();
        return view ('admin.medical_officer.create',compact('medical_officers','designations'));
    }
    public function store(Request $request){
        $medical_officer = new MedicalOfficer();
        $medical_officer->name = $request->name;
        $medical_officer->designation_id = $request->designation_id;
        $medical_officer->designation_id = $request->designation_id;
        $medical_officer->joining_date = $request->joining_date;
        $medical_officer->save();
        Session::flash('success','medical_officer added successfully!!');
        return redirect()->route('admin_medical_officers.index');
    }
}