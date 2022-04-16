<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_rhl_jenis_pohon;
use App\Models\tb_rhl;
use App\Models\tb_status_rhl;
use App\Models\tb_rhl_kph;
use App\Models\tb_catatan_rhl;
use App\Models\tb_foto_rhl;
use Session;

class c_verifikasi_admin extends Controller
{
    function verifikasi_rhl_admin($id){
        $data['pohon'] = tb_rhl_jenis_pohon::where('rhl_id','=',$id)->get();
        $data['foto'] = tb_foto_rhl::where('rhl_id','=',$id)->get();
        $data['catatan'] = tb_catatan_rhl::where('rhl_id','=',$id)->orderby('created_at','DESC')->get();
        $data['kehutanan'] = tb_rhl::
            select('tb_rhls.*','tb_user.nama','tb_user.email','tb_user.photo')
            ->join('tb_user','tb_user.id','=','tb_rhls.user_id')
            ->where('id_rhl','=',$id)->first();
        return view('kehutanan/admin/verifikasi_rhl_admin',$data);
    }

    function doverifikasi_rhl_admin(Request $request){
        $data = new tb_rhl_kph;
        $data->rhl_id = $request->rhl_id;
        $data->id_kph = $request->kph;
        if ($data->save()) {
            $verif = tb_status_rhl::where('rhl_id','=',$request->rhl_id)->first();
            $verif->pemilahan_admin = true;
            $verif->save();
            Session::flash('status','sukses');
            Session::flash('pesan','Proses verifikasi berhasil tersimpan');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Proses verifikasi gagal disimpan');
        }
        return redirect('pemilahan_perhutanan_sosial');
    }
}
