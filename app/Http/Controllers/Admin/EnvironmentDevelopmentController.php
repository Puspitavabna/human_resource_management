<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\EnvironmentDevelopment;
use App\Models\Faculty;
use App\Models\environment_development;
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

class EnvironmentDevelopmentController extends Controller
{
    public function index(){
        $environment_developments = EnvironmentDevelopment::all();
        return view('admin.environment_development.index', compact('environment_developments'));
    }
    public function create(){
        $designations = Designation::all();
        return view ('admin.environment_development.create',compact('designations'));
    }
    public function store(Request $request){
        $environment_development = new EnvironmentDevelopment();
        $environment_development->name = $request->name;
        $environment_development->designation_id = $request->designation_id;
        $environment_development->save();
        Session::flash('success','librarian added successfully!!');
        return redirect()->route('admin_environment_development.index');
    }
}