<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;

class c_mohonbibit extends Controller
{
    public function index(){
        Session::flash('menu','permohonan_bibit');
        return view('mohonbibit/landing');
    }
}
