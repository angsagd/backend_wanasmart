<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_user;
use App\Models\tb_role;
use App\Models\tb_role_pengguna;
use App\Models\tb_role_menu;
use App\Models\tb_menu;
use Session;

class c_user extends Controller
{
    public function rubah_role(Request $request){
        $role = $request->post('role');
        $namarole = tb_role::find($role);
        Session::put('role',$namarole->nama_role);
        Session::flash('status','sukses');
        Session::flash('pesan','Saat ini anda bertindak sebagai '.strtoupper($namarole->nama_role));
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

    public function role_user($token){
        $data['pengguna'] = tb_user::where('token','=',$token)->first();
        $data['role_pengguna'] = tb_role_pengguna::join('tb_role','tb_role.id_role','=','tb_role_pengguna.role_id')
                                        ->join('tb_user','tb_user.id','=','tb_role_pengguna.user_id')
                                        ->where('tb_role_pengguna.user_id','=',$data['pengguna']->id)
                                        ->get();
        $data['role'] = tb_role::all();
        return view('pengguna/role_pengguna',$data);
    }

    public function hapus_pengguna($token){
        $pengguna = tb_user::where('token','=',$token)->first();
        $pengguna->delete();
        return redirect('pengguna');
    }
}
