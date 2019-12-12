<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
       return view('admin.index');
    }
    public function getlogout()
    {
        Auth::logout();
        return redirect()->route('user.sign_in');
    }
}