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
use App\Models\FacultyOffice;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class FacultyOfficeController extends Controller
{
    public function index(){
        $faculty_offices = Facultyoffice::all();
        return view('admin.faculty_office.index', compact('faculty_offices'));
    }
    public function create(){
        $faculties = Faculty::all();
        $designations = Designation::all();
        return view ('admin.faculty_office.create',compact('faculties','designations'));
    }
    public function store(Request $request){
        $faculty_office = new FacultyOffice();
        $faculty_office->name = $request->name;
        $faculty_office->phone_no = $request->phone_no;
        $faculty_office->designation_id = $request->designation_id;
        $faculty_office->faculty_id = $request->faculty_id;
        $faculty_office->save();
        Session::flash('success','librarian added successfully!!');
        return redirect()->route('admin_faculty_office.index');
    }
}