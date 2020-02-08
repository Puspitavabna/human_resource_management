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
use App\Models\IctCell;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class IctCellController extends Controller
{
    public function index(){
        $ict_cells = IctCell::all();
        return view('admin.ict_cell.index', compact('ict_cells'));
    }
    public function create(){
        $designations = Designation::all();
        return view ('admin.ict_cell.create',compact('designations'));
    }
    public function store(Request $request){
        $ict_cell = new IctCell();
        $ict_cell->name = $request->name;
        $ict_cell->designation_id = $request->designation_id;
        $ict_cell->save();
        Session::flash('success','librarian added successfully!!');
        return redirect()->route('admin_ict_cell.index');
    }
}