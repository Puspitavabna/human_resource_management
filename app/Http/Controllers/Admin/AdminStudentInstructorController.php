<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Section;
use App\Models\HallMember;
use App\Models\StudentInstructor;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminStudentInstructorController extends Controller
{
    public function index(){
        $student_instructors = StudentInstructor::all();
        return view('admin.student_instructor.index', compact('student_instructors'));
    }
    public function create(){
        $student_instructors = StudentInstructor::all();
        $designations = Designation::all();
        return view ('admin.student_instructor.create',compact('student_instructors','designations'));
    }
    public function store(Request $request){
        $student_instructor = new StudentInstructor();
        $student_instructor->name = $request->name;
        $student_instructor->designation_id = $request->designation_id;
        $student_instructor->designation_id = $request->designation_id;
        $student_instructor->joining_date = $request->joining_date;
        $student_instructor->save();
        Session::flash('success','student_instructor added successfully!!');
        return redirect()->route('admin_student_instructors.index');
    }
}