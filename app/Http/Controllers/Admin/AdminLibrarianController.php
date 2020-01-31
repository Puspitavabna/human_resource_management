<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Section;
use App\Models\HallMember;
use App\Models\librarian;
use App\User;
use Illuminate\Http\Request;
use DB;
use Session;

class AdminlibrarianController extends Controller
{
    public function index(){
        $librarians = Librarian::all();
        return view('admin.librarian.index', compact('librarians'));
    }
    public function create(){
        $librarians = Librarian::all();
        $designations = Designation::all();
        $sections = Section::all();
        return view ('admin.librarian.create',compact('librarians','designations','sections'));
    }
    public function store(Request $request){
        $librarian = new Librarian();
        $librarian->name = $request->name;
        $librarian->designation_id = $request->designation_id;
        $librarian->section_id = $request->section_id;
        $librarian->designation_id = $request->designation_id;
        $librarian->joining_date = $request->joining_date;
        $librarian->save();
        Session::flash('success','librarian added successfully!!');
        return redirect()->route('admin_librarians.index');
    }
}