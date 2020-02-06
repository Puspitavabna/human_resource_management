<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Designation;
use App\Models\FacultyMember;
use App\Models\Section;
use App\Models\HallMember;
use App\Models\librarian;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class FacultyMemberController extends Controller
{
    public function index(){
        $faculty_members = FacultyMember::all();
        return view('admin.faculty_member.index', compact('faculty_members'));
    }
    public function create(){
        $faculties = Faculty::all();
        $designations = Designation::all();
        $departments = Department::all();
        return view ('admin.faculty_member.create',compact('faculties','designations','departments'));
    }
    public function store(Request $request){
        $faculty_member = new FacultyMember();
        $faculty_member->name = $request->name;
        $faculty_member->email = $request->email;
        $faculty_member->phone_no = $request->phone_no;
        $faculty_member->department_id = $request->department_id;
        $faculty_member->designation_id = $request->designation_id;
        $faculty_member->faculty_id = $request->faculty_id;
        $faculty_member->save();
        Session::flash('success','librarian added successfully!!');
        return redirect()->route('admin_faculty_members.index');
    }
}