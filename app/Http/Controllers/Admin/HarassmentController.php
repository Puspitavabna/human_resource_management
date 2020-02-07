<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Harassment;
use App\Models\PublicationOffice;
use App\Models\TrafficSection;
use App\Models\VcOffice;
use App\Models\Designation;
use App\Models\FacultyMember;
use App\Models\Section;
use App\Models\HallMember;
use App\Models\librarian;
use App\Models\FacultyOffice;
use App\Models\CyberCenter;
use App\Models\OfficerAssociation;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class HarassmentController extends Controller
{
    public function index(){
        $harassments = Harassment::all();
        return view('admin.harassment.index', compact('harassments'));
    }
    public function create(){
        $designations = Designation::all();
        return view ('admin.harassment.create',compact('designations'));
    }
    public function store(Request $request){
        $harassment = new Harassment();
        $harassment->name = $request->name;
        $harassment->designation_id = $request->designation_id;
        $harassment->save();
        Session::flash('success','librarian added successfully!!');
        return redirect()->route('admin_harassment.index');
    }
}