<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class c_dashboard extends Controller
{
    public function index(){
        Session::flash('menu','dashboard');
        return view('dashboard/dashboard');
    }
}
