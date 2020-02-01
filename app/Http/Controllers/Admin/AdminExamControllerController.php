<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Section;
use App\Models\HallMember;
use App\Models\ExamController;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminExamControllerController extends Controller
{
    public function index(){
        $exam_controllers = ExamController::all();
        return view('admin.exam_controller.index', compact('exam_controllers'));
    }
    public function create(){
        $exam_controllers = ExamController::all();
        $designations = Designation::all();
        return view ('admin.exam_controller.create',compact('exam_controllers','designations'));
    }
    public function store(Request $request){
        $exam_controller = new ExamController();
        $exam_controller->name = $request->name;
        $exam_controller->designation_id = $request->designation_id;
        $exam_controller->designation_id = $request->designation_id;
        $exam_controller->joining_date = $request->joining_date;
        $exam_controller->save();
        Session::flash('success','exam_controller added successfully!!');
        return redirect()->route('admin_exam_controllers.index');
    }
}