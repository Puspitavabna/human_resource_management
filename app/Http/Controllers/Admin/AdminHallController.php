<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Hall;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminHallController extends Controller
{
    public function index(){
        $halls = Hall::all();
        return view('admin.hall.index', compact('halls'));
    }
    public function create(){
        return view ('admin.hall.create');
    }
    public function store(Request $request){
        $slug = strtolower($request['name']);
        $slug = str_replace(' ', '-', $slug);
        $hall = new Hall();
        $hall->name = $request->name;
        $hall->slug = $slug;
        $hall->save();
        Session::flash('success','Hall added successfully!!');
        return redirect()->route('admin_hall.index');
    }
}