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
use App\Models\CyberCenter;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class CyberCenterController extends Controller
{
    public function index(){
        $cyber_centers = CyberCenter::all();
        return view('admin.cyber_center.index', compact('cyber_centers'));
    }
    public function create(){
        $designations = Designation::all();
        return view ('admin.cyber_center.create',compact('designations'));
    }
    public function store(Request $request){
        $cyber_center = new CyberCenter();
        $cyber_center->name = $request->name;
        $cyber_center->designation_id = $request->designation_id;
        $cyber_center->save();
        Session::flash('success','librarian added successfully!!');
        return redirect()->route('admin_cyber_center.index');
    }
}