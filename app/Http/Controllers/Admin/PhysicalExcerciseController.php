<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\TrafficSection;
use App\Models\VcOffice;
use App\Models\Designation;
use App\Models\FacultyMember;
use App\Models\Section;
use App\Models\HallMember;
use App\Models\librarian;
use App\Models\FacultyOffice;
use App\Models\CyberCenter;
use App\Models\PhysicalExcercise;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class PhysicalExcerciseController extends Controller
{
    public function index(){
        $physical_excercises = PhysicalExcercise::all();
        return view('admin.physical_excercise.index', compact('physical_excercises'));
    }
    public function create(){
        $designations = Designation::all();
        return view ('admin.physical_excercise.create',compact('designations'));
    }
    public function store(Request $request){
        $physical_excercise = new PhysicalExcercise();
        $physical_excercise->name = $request->name;
        $physical_excercise->designation_id = $request->designation_id;
        $physical_excercise->save();
        Session::flash('success','librarian added successfully!!');
        return redirect()->route('admin_physical_excercise.index');
    }
}