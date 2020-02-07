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
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class TrafficSectionController extends Controller
{
    public function index(){
        $traffic_sections = TrafficSection::all();
        return view('admin.traffic_section.index', compact('traffic_sections'));
    }
    public function create(){
        $designations = Designation::all();
        return view ('admin.traffic_section.create',compact('designations'));
    }
    public function store(Request $request){
        $traffic_section = new TrafficSection();
        $traffic_section->name = $request->name;
        $traffic_section->designation_id = $request->designation_id;
        $traffic_section->save();
        Session::flash('success','librarian added successfully!!');
        return redirect()->route('admin_traffic_section.index');
    }
}