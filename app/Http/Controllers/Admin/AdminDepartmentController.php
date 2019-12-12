<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminDepartmentController extends Controller
{
    public function index(){
        $departments = Department::all();
        return view('admin.department.index', compact('departments'));
    }
    public function create(){
        $faculties = Faculty::all();
        return view ('admin.department.create',compact('faculties'));
    }
    public function store(Request $request){
        $slug = strtolower($request['name']);
        $slug = str_replace(' ', '-', $slug);
        $department = new department();
        $department->name = $request->name;
        $department->faculty_id = $request->faculty_id;
        $department->slug = $slug;
        $department->save();
        Session::flash('success','Question added successfully!!');
        return redirect()->route('admin_department.index');
    }
}