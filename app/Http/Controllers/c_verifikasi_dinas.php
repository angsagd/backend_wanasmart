<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_perhutanan_sosial;
use App\Models\tb_user;
use App\Models\tb_foto_perhutanan_sosial;
use App\Models\tb_potensi_hhbk;
use App\Models\tb_rhl;
use App\Models\tb_foto_rhl;
use App\Models\tb_catatan_rhl;
use App\Models\tb_ps_kph;
use App\Models\tb_ps_catatan;
use App\Models\tb_status_rhl;
use App\Models\tb_rhl_jenis_pohon;
use App\Models\tb_verifikasi_persos;
use Session;

class c_verifikasi_dinas extends Controller
{
    function list_verifikasi_dinas(){
        $data['ps'] = tb_perhutanan_sosial::join('tb_verifikasi_persos','tb_verifikasi_persos.perhutanan_sosial_id','=','tb_perhutanan_sosial.id_perhutanan_sosial')
        ->where('verifikasi_kph','=',1)
        ->where('verifikasi_dklh','=',0)
        ->get();
        $data['rhl'] = tb_rhl::join('tb_status_rhls','tb_status_rhls.rhl_id','=','tb_rhls.id_rhl')
        ->where('verifikasi_kph','=',1)
        ->where('verifikasi_dklh','=',0)
        ->get();
        return view('kehutanan.admin.list_verifikasi_dinas',$data);
    }

    function verifikasi_dinas($id){
        $data['hhbk'] = tb_potensi_hhbk::where('perhutanan_sosial_id','=',$id)->get();
        $data['foto'] = tb_foto_perhutanan_sosial::where('perhutanan_sosial_id','=',$id)->get();
        $data['catatan'] = tb_ps_catatan::where('ps_id','=',$id)->orderby('created_at','DESC')->get();
        $data['kehutanan'] = tb_perhutanan_sosial::select('tb_perhutanan_sosial.*','tb_user.nama','tb_user.email','tb_user.photo')
                            ->join('tb_user','tb_user.id','=','tb_perhutanan_sosial.user_id')
                            ->where('id_perhutanan_sosial','=',$id)->first();
        return view('kehutanan.admin.verifikasi_dinas',$data);
    }

    function verifikasi_rhl_dinas($id){
        $data['pohon'] = tb_rhl_jenis_pohon::where('rhl_id','=',$id)->get();
        $data['foto'] = tb_foto_rhl::where('rhl_id','=',$id)->get();
        $data['catatan'] = tb_catatan_rhl::where('rhl_id','=',$id)->orderby('created_at','DESC')->get();
        $data['kehutanan'] = tb_rhl::
            select('tb_rhls.*','tb_user.nama','tb_user.email','tb_user.photo')
            ->join('tb_user','tb_user.id','=','tb_rhls.user_id')
            ->where('id_rhl','=',$id)->first();
        return view('kehutanan.admin.verifikasi_rhl_dinas',$data);
    }

    function doverif_dinas($id){
        $data = tb_verifikasi_persos::where('perhutanan_sosial_id','=',$id)->first();
        $data->verifikasi_dklh = 1;
        if ($data->save()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Verifikasi pada tahap Dinas berhasil disimpan');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Verifikasi pada tahap Dinas gagal disimpan');
        }
        return redirect('list_verifikasi_dinas');
    }

    function doverif_rhl_dinas($id){
        $data = tb_status_rhl::where('rhl_id','=',$id)->first();
        $data->verifikasi_dklh = 1;
        if ($data->save()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Verifikasi pada tahap Dinas berhasil disimpan');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Verifikasi pada tahap Dinas gagal disimpan');
        }
        return redirect('list_verifikasi_dinas');
    }
}
