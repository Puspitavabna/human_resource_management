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
use App\Models\ResearchCell;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class CyberCenterController extends Controller
{
    public function index(){
        $research_cells = ResearchCell::all();
        return view('admin.research_cell.index', compact('research_cells'));
    }
    public function create(){
        $designations = Designation::all();
        return view ('admin.research_cell.create',compact('designations'));
    }
    public function store(Request $request){
        $research_cell = new ResearchCell();
        $research_cell->name = $request->name;
        $research_cell->phone_no = $request->phone_no;
        $research_cell->designation_id = $request->designation_id;
        $research_cell->save();
        Session::flash('success','librarian added successfully!!');
        return redirect()->route('admin_research_cell.index');
    }
}