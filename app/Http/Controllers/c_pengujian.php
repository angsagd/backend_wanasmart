<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_pengujian extends Controller
{
    public function permohonan(){
        return view('landing/pengujian/permohonan');
    }
}
