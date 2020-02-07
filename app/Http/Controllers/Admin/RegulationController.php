<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Regulation;
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

class RegulationController extends Controller
{
    public function index(){
        $regulations = Regulation::all();
        return view('admin.regulation.index', compact('regulations'));
    }
    public function create(){
        $designations = Designation::all();
        return view ('admin.regulation.create',compact('designations'));
    }
    public function store(Request $request){
        $regulation = new Regulation();
        $regulation->name = $request->name;
        $regulation->designation_id = $request->designation_id;
        $regulation->save();
        Session::flash('success','librarian added successfully!!');
        return redirect()->route('admin_regulation.index');
    }
}