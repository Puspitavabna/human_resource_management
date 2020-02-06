<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Faculty;
use App\Models\HallMember;
use App\Models\Hall;
use App\User;
use Illuminate\Http\Request;

use Auth;
use DB;
use Session;

class HallMemberController extends Controller
{
    public function index(){
        $hall_members = HallMember::all();
        return view('admin.hall_member.index', compact('hall_members'));
    }
    public function create(){
        $halls = Hall::all();
        $designations = Designation::all();
        $users = User::all();
        return view ('admin.hall_member.create',compact('halls','designations','users'));
    }
    public function store(Request $request){
        $hall_member = new HallMember();
        $hall_member->user_id = Auth::user()->id;
        $hall_member->hall_id = $request->hall_id;
        $hall_member->designation_id = $request->designation_id;
        $hall_member->save();
        Session::flash('success','Hall Members added successfully!!');
        return redirect()->route('admin_hall_members.index');
    }
}