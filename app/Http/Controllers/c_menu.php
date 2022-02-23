<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_menu;
use Session;

class c_menu extends Controller
{
    public function landing_menu(){
        $data['menu'] = tb_menu::all();
        return view('menu/landing_menu',$data);
    }

    public function tambah_menu(Request $request){
        $menu = new tb_menu;
        $menu->parent_menu = $request->parent_menu;
        $menu->nama_menu = $request->nama_menu;
        if ($menu->save()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Menu '.$request->nama_menu.' berhasil disimpan');
        } else {
            Session::flash('status','sukses');
            Session::flash('pesan','Menu '.$request->nama_menu.' berhasil disimpan');
        }
        return redirect('menu');
    }

    public function api_daftar_menu(){
        $data['menu'] = tb_menu::all();
        return $data;
    }

    public function hapus_menu($id){
        $menu = tb_menu::find($id);
        if ($menu->delete()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Menu '.$menu->nama_menu.' berhasil dihapus');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Menu '.$menu->nama_menu.' gagal dihapus');
        }
        return redirect('menu');
    }
}
