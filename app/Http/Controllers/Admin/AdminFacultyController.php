<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminFacultyController extends Controller
{
    public function index(){
        $faculties = Faculty::all();
        return view('admin.faculty.index', compact('faculties'));
    }
    public function create(){
        return view ('admin.faculty.create');
    }
    public function store(Request $request){
        $slug = strtolower($request['name']);
        $slug = str_replace(' ', '-', $slug);
        $faculty = new faculty();
        $faculty->name = $request->name;
        $faculty->slug = $slug;
        $faculty->save();
        Session::flash('success','Question added successfully!!');
        return redirect()->route('admin_faculty.index');
    }
}