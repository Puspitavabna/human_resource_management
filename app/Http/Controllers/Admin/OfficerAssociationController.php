<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
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

class OfficerAssociationController extends Controller
{
    public function index(){
        $officer_associations = OfficerAssociation::all();
        return view('admin.officer_association.index', compact('officer_associations'));
    }
    public function create(){
        $designations = Designation::all();
        return view ('admin.officer_association.create',compact('designations'));
    }
    public function store(Request $request){
        $officer_association = new OfficerAssociation();
        $officer_association->name = $request->name;
        $officer_association->designation_id = $request->designation_id;
        $officer_association->save();
        Session::flash('success','librarian added successfully!!');
        return redirect()->route('admin_officer_association.index');
    }
}