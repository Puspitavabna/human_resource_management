<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Models\Department;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminDesignationController extends Controller
{
    public function index(){
        $designations = Designation::all();
        return view('admin.designation.index', compact('designations'));
    }
    public function create(){
        return view ('admin.designation.create');
    }
    public function store(Request $request){
        $slug = strtolower($request['name']);
        $slug = str_replace(' ', '-', $slug);
        $designation = new Designation();
        $designation->name = $request->name;
        $designation->slug = $slug;
        $designation->save();
        Session::flash('success','Question added successfully!!');
        return redirect()->route('admin_designation.index');
    }
    public function edit($id){
        $designation = Designation::find($id);
        return view('admin.designation.edit', compact('designation'));
    }

    public function update(Request $request, $id){

        $designation = Designation::find($id);

        $slug = strtolower($request['name']);
        $slug = str_replace(' ', '-', $slug);
        $designation->name = $request->name;
        $designation->slug = $slug;
        $designation->update();
        return redirect()->route('admin_designation.index');
    }
    public function destroy($id){
        $designation = Designation::find($id);
        $designation->delete();
        Session::flash('success','Question delete successfully');
        return redirect()->route('admin_designation.index');
    }
}