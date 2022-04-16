<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_catatan_rhl;
use App\Models\tb_rhl;
use Session;

class c_catatan_rhl extends Controller
{
    function do_catatan_rhl(Request $request){
        $cat = new tb_catatan_rhl;
        $cat->catatan = $request->catatan;
        $cat->oleh = Session::get('nama');
        $cat->rhl_id = $request->rhl_id;
        if ($cat->save()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Catatan berhasil disimpan');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Catatan gagal disimpan');
        }

        return back(); 
    }

    function history_catatan($id){
        $data['permohonan'] = tb_rhl::find($id);
        $data['catatan'] = tb_catatan_rhl::where('rhl_id','=',$id)->orderby('created_at','DESC')->get();
        return view('kehutanan.history_catatan_rhl',$data);
    }
}
