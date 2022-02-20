<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_role;
use Session;

class c_role extends Controller
{
    public function landing(){
        $data['role'] = tb_role::all();
        return view('role/daftar_role',$data);
    }
}
