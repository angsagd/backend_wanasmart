<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_ps_catatan;
use App\Models\tb_perhutanan_sosial;
use Session;

class c_catatan_ps extends Controller
{
    function do_catatan_kph(Request $request){
        $cat = new tb_ps_catatan;
        $cat->catatan = $request->catatan;
        $cat->oleh = Session::get('nama');
        $cat->ps_id = $request->ps_id;
        if ($cat->save()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Catatan berhasil disimpan');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Catatan gagal disimpan');
        }

        return redirect('verifikasi_kph/'.$request->ps_id);
    }

    function do_catatan_dinas(Request $request){
        $cat = new tb_ps_catatan;
        $cat->catatan = $request->catatan;
        $cat->oleh = Session::get('nama');
        $cat->ps_id = $request->ps_id;
        if ($cat->save()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Catatan berhasil disimpan');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Catatan gagal disimpan');
        }

        return redirect('verifikasi_dinas/'.$request->ps_id);
    }

    function do_catatan_admin(Request $request){
        $cat = new tb_ps_catatan;
        $cat->catatan = $request->catatan;
        $cat->oleh = Session::get('nama');
        $cat->ps_id = $request->ps_id;
        if ($cat->save()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Catatan berhasil disimpan');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Catatan gagal disimpan');
        }

        return redirect('verifikasi_admin/'.$request->ps_id); 
    }

    function history_catatan($id){
        $data['permohonan'] = tb_perhutanan_sosial::find($id);
        $data['catatan'] = tb_ps_catatan::where('ps_id','=',$id)->orderby('created_at','DESC')->get();
        return view('kehutanan.history_catatan',$data);
    }

    function berikan_tanggapan(Request $request){
        $cat = new tb_ps_catatan;
        $cat->catatan = $request->catatan;
        $cat->oleh = Session::get('nama');
        $cat->ps_id = $request->ps_id;
        if ($cat->save()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Catatan berhasil disimpan');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Catatan gagal disimpan');
        }

        return redirect('history_catatan/'.$request->ps_id); 
    }
}
