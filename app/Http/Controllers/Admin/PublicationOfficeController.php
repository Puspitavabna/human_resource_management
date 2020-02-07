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
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class PublicationOfficeController extends Controller
{
    public function index(){
        $publication_offices = PublicationOffice::all();
        return view('admin.publicationOffice.index', compact('$publication_offices'));
    }
    public function create(){
        $designations = Designation::all();
        return view ('admin.publicationOffice.create',compact('designations'));
    }
    public function store(Request $request){
        $publication_office = new PublicationOffice();
        $publication_office->name = $request->name;
        $publication_office->designation_id = $request->designation_id;
        $publication_office->save();
        Session::flash('success','librarian added successfully!!');
        return redirect()->route('admin_publicationOffice.index');
    }
}