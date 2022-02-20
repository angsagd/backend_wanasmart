<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_user;
use Session;

class c_user extends Controller
{
    public function rubah_role(Request $request){
        $role = $request->post('role');
        Session::put('role',$role);
        Session::flash('status','sukses');
        Session::flash('pesan','Saat ini anda bertindak sebagai '.strtoupper($role));
        return redirect('/');
    }

    public function list_pengguna(){
        $data['pengguna'] = tb_user::all();
        return view('pengguna/list_pengguna',$data);
    }

    public function show_profil($token){
        $data['pengguna'] = tb_user::where('token','=',$token)->first();
        return view('pengguna/profil',$data);
    }
}
