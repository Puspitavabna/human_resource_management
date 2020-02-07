<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Designation;
use App\Models\FacultyMember;
use App\Models\Bncc;
use App\Models\Section;
use App\Models\HallMember;
use App\Models\librarian;
use App\Models\FacultyOffice;
use App\Models\CyberCenter;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class BnccController extends Controller
{
    public function index(){
        $bnccs = Bncc::all();
        dd('djhd');
        return view('admin.bncc.index', compact('bnccs'));
    }
    public function create(){
        $designations = Designation::all();
        return view ('admin.bncc.create',compact('designations'));
    }
    public function store(Request $request){
        $bncc = new Bncc();
        $bncc->name = $request->name;
        $bncc->phone_no = $request->phone_no;
        $bncc->designation_id = $request->designation_id;
        $bncc->save();
        Session::flash('success','librarian added successfully!!');
        return redirect()->route('admin_bncc.index');
    }
}