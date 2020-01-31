<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Section;
use App\Models\HallMember;
use App\Models\Register;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminRegisterController extends Controller
{
    public function index(){
        $registers = Register::all();
        return view('admin.register.index', compact('registers'));
    }
    public function create(){
        $registers = Register::all();
        $designations = Designation::all();
        $sections = Section::all();
        return view ('admin.register.create',compact('registers','designations','sections'));
    }
    public function store(Request $request){
        $register = new Register();
        $register->name = $request->name;
        $register->designation_id = $request->designation_id;
        $register->section_id = $request->section_id;
        $register->designation_id = $request->designation_id;
        $register->joining_date = $request->joining_date;
        $register->save();
        Session::flash('success','Register added successfully!!');
        return redirect()->route('admin_registers.index');
    }
}