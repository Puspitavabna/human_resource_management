<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Section;
use App\Models\HallMember;
use App\Models\Audit;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminAuditController extends Controller
{
    public function index(){
        $audits = Audit::all();
        return view('admin.audit.index', compact('audits'));
    }
    public function create(){
        $audits = Audit::all();
        $designations = Designation::all();
        return view ('admin.audit.create',compact('audits','designations'));
    }
    public function store(Request $request){
        $audit = new Audit();
        $audit->name = $request->name;
        $audit->designation_id = $request->designation_id;
        $audit->designation_id = $request->designation_id;
        $audit->joining_date = $request->joining_date;
        $audit->save();
        Session::flash('success','audit added successfully!!');
        return redirect()->route('admin_audits.index');
    }
}