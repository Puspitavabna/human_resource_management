<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\ProVcOffice;
use App\Models\TrafficSection;
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

class ProVcOfficeController extends Controller
{
    public function index(){
        $provc_offices = ProVcOffice::all();
        return view('admin.provc_office.index', compact('provc_offices'));
    }
    public function create(){
        $designations = Designation::all();
        return view ('admin.provc_office.create',compact('designations'));
    }
    public function store(Request $request){
        $provc_office = new ProVcOffice();
        $provc_office->name = $request->name;
        $provc_office->designation_id = $request->designation_id;
        $provc_office->save();
        Session::flash('success','librarian added successfully!!');
        return redirect()->route('admin_pro_vc_office.index');
    }
}