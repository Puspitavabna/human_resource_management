<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Designation;
use App\Models\PlanningDevelopmentOfficer;
use App\Models\Section;
use App\Models\HallMember;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminPlanningDevelopmentOfficerController extends Controller
{
    public function index(){
        $planning_developments = PlanningDevelopmentOfficer::all();
        return view('admin.planning_development.index', compact('planning_developments'));
    }
    public function create(){
        $planning_developments = PlanningDevelopmentOfficer::all();
        $designations = Designation::all();
        $sections = Section::all();
        return view ('admin.planning_development.create',compact('planning_developments','designations','sections'));
    }
    public function store(Request $request){
        $planning_development = new PlanningDevelopmentOfficer();
        $planning_development->name = $request->name;
        $planning_development->designation_id = $request->designation_id;
        $planning_development->section_id = $request->section_id;
        $planning_development->designation_id = $request->designation_id;
        $planning_development->joining_date = $request->joining_date;
        $planning_development->save();
        Session::flash('success','planning_development added successfully!!');
        return redirect()->route('admin_planning_development.index');
    }
}