<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Section;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminSectionController extends Controller
{
    public function index(){
        $sections = Section::all();
        return view('admin.section.index', compact('sections'));
    }
    public function create(){
        return view ('admin.section.create');
    }
    public function store(Request $request){
        $slug = strtolower($request['name']);
        $slug = str_replace(' ', '-', $slug);
        $hall = new Section();
        $hall->name = $request->name;
        $hall->slug = $slug;
        $hall->save();
        Session::flash('success','Section added successfully!!');
        return redirect()->route('admin_section.index');
    }
}