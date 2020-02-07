<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\VcOffice;
use App\Models\Designation;
use App\Models\FacultyMember;
use App\Models\Section;
use App\Models\HallMember;
use App\Models\librarian;
use App\Models\FacultyOffice;
use App\Models\CyberCenter;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class VcOfficeController extends Controller
{
    public function index(){
        $vc_offices = VcOffice::all();
        return view('admin.vc_office.index', compact('vc_offices'));
    }
    public function create(){
        $designations = Designation::all();
        return view ('admin.vc_office.create',compact('designations'));
    }
    public function store(Request $request){
        $vc_office = new VcOffice();
        $vc_office->name = $request->name;
        $vc_office->designation_id = $request->designation_id;
        $vc_office->save();
        Session::flash('success','librarian added successfully!!');
        return redirect()->route('admin_vc_office.index');
    }
}