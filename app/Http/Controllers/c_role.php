<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_role;
use App\Models\tb_role_pengguna;
use App\Models\tb_user;
use App\Models\tb_menu;
use App\Models\tb_role_menu;
use Session;

class c_role extends Controller
{
    public function landing(){
        $data['role'] = tb_role::all();
        return view('role/daftar_role',$data);
    }

    public function tambah_role_pengguna(Request $request){
        $token = $request->token_user;
        $pengguna = tb_user::where('token','=',$token)->first();

        $role_pengguna = new tb_role_pengguna;
        $role_pengguna->role_id = $request->role_name;
        $role_pengguna->user_id = $pengguna->id;
        $role_pengguna->save();

        return redirect('role_user/'.$token);
    }

    public function req_role(){
        $id = Session::get('id');
        $pengguna = tb_user::where('id','=',$id)->first();
        $data['role'] = tb_role_pengguna::select('tb_role.id_role','tb_role.nama_role','tb_role_pengguna.user_id')
                                ->join('tb_role','tb_role.id_role','=','tb_role_pengguna.role_id')
                                ->join('tb_user','tb_user.id','=','tb_role_pengguna.user_id')
                                ->where('tb_role_pengguna.user_id','=',$pengguna->id)
                                ->get();
        return($data);
    }

    public function hapus_role_pengguna($token,$id){
        $role_pengguna = tb_role_pengguna::find($id);
        $role_pengguna->delete();
        return redirect('role_user/'.$token);
    }

    public function tambah_role(Request $request){
        $role = new tb_role;
        $role->nama_role = $request->nama_role;
        if ($role->save()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Role '.$request->nama_role.' berhasil disimpan');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Role '.$request->nama_role.' gagal disimpan');
        }
        return redirect('role');
    }

    public function hapus_role($id){
        $role = tb_role::find($id);
        if ($role->delete()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Role '.$role->nama_role.' berhasil dihapus');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Role '.$role->nama_role.' gagal dihapus');
        }
        return redirect('role');
    }

    public function kelola_akses($id){
        $data['role'] = tb_role::find($id);
        $data['role_menu'] = tb_role_menu::join('tb_role','tb_role.id_role','=','tb_role_menu.role_id')
                                        ->join('tb_menu','tb_menu.id_menu','=','tb_role_menu.menu_id')
                                        ->where('tb_role.id_role','=',$id)
                                        ->get();
        return view('role/kelola_akses',$data);
    }

    public function tambah_kelola_akses(Request $request){
        $rolemenu = new tb_role_menu;
        $rolemenu->role_id = $request->id_role;
        $rolemenu->menu_id = $request->id_menu;
        $menu = tb_menu::find($request->id_menu);
        $role = tb_role::find($request->id_role);
        if ($rolemenu->save()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Akses menu '.$menu->nama_menu.' berhasil ditambahkan ke '.$role->nama_role);
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Akses menu '.$menu->nama_menu.' gagal ditambahkan ke '.$role->nama_role);
        }
        return redirect('kelola_akses/'.$request->id_role);
    }

    public function hapus_kelola_akses($id){
        $rolemenu = tb_role_menu::find($id);
        if ($rolemenu->delete()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Akses menu berhasil dihapus');
        } else {
            Session::flash('status','gagal');
             Session::flash('pesan','Akses menu gagal dihapus');
        }
        return redirect('kelola_akses/'.$rolemenu->role_id);
    }
}
