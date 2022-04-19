<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_perhutanan_sosial;
use App\Models\tb_user;
use App\Models\tb_foto_perhutanan_sosial;
use App\Models\tb_potensi_hhbk;
use App\Models\tb_rhl;
use App\Models\tb_verifikasi_persos;
use App\Models\tb_regulasi;
use App\Models\tb_panduan;
use App\Models\tb_foto_rhl;
use Session;

class c_dashboard extends Controller
{
    public function index(){
        Session::flash('menu','dashboard');
        $jumlah_verifikasi_ps = 
        tb_perhutanan_sosial::join('tb_verifikasi_persos','tb_verifikasi_persos.perhutanan_sosial_id','=','tb_perhutanan_sosial.id_perhutanan_sosial')
        ->where('verifikasi_dklh','=',0)
        ->get()->count();

        $jumlah_verifikasi_rhl = 
        tb_rhl::join('tb_status_rhls','tb_status_rhls.rhl_id','=','tb_rhls.id_rhl')
        ->where('verifikasi_dklh','=',0)
        ->get()->count();

        $jumlah_terverifikasi_ps = 
        tb_perhutanan_sosial::join('tb_verifikasi_persos','tb_verifikasi_persos.perhutanan_sosial_id','=','tb_perhutanan_sosial.id_perhutanan_sosial')
        ->where('verifikasi_dklh','=',1)
        ->get()->count();

        $jumlah_terverifikasi_rhl = 
        tb_rhl::join('tb_status_rhls','tb_status_rhls.rhl_id','=','tb_rhls.id_rhl')
        ->where('verifikasi_dklh','=',1)
        ->get()->count();

        $data['jumlah_verifikasi'] = $jumlah_verifikasi_ps+$jumlah_verifikasi_rhl;
        $data['jumlah_terverifikasi'] = $jumlah_terverifikasi_ps+$jumlah_terverifikasi_rhl;
        $data['jumlah_ps'] = $jumlah_terverifikasi_ps;
        $data['jumlah_rhl'] = $jumlah_terverifikasi_rhl;
        $data['ps'] = tb_perhutanan_sosial::get();
        $data['rhl'] = tb_rhl::get();
        $data['permohonan_total'] = tb_perhutanan_sosial::count();
        return view('dashboard/dashboard',$data);
    }

    public function landing(){
        $jumlah_verifikasi_ps = 
        tb_perhutanan_sosial::join('tb_verifikasi_persos','tb_verifikasi_persos.perhutanan_sosial_id','=','tb_perhutanan_sosial.id_perhutanan_sosial')
        ->where('verifikasi_dklh','=',0)
        ->get()->count();

        $jumlah_verifikasi_rhl = 
        tb_rhl::join('tb_status_rhls','tb_status_rhls.rhl_id','=','tb_rhls.id_rhl')
        ->where('verifikasi_dklh','=',0)
        ->get()->count();

        $jumlah_terverifikasi_ps = 
        tb_perhutanan_sosial::join('tb_verifikasi_persos','tb_verifikasi_persos.perhutanan_sosial_id','=','tb_perhutanan_sosial.id_perhutanan_sosial')
        ->where('verifikasi_dklh','=',1)
        ->get()->count();

        $jumlah_terverifikasi_rhl = 
        tb_rhl::join('tb_status_rhls','tb_status_rhls.rhl_id','=','tb_rhls.id_rhl')
        ->where('verifikasi_dklh','=',1)
        ->get()->count();

        $data['jumlah_verifikasi'] = $jumlah_verifikasi_ps+$jumlah_verifikasi_rhl;
        $data['jumlah_terverifikasi'] = $jumlah_terverifikasi_ps+$jumlah_terverifikasi_rhl;
        $data['jumlah_ps'] = $jumlah_terverifikasi_ps;
        $data['jumlah_rhl'] = $jumlah_terverifikasi_rhl;
        $jumlah_rhl = tb_foto_rhl::all()->count();
        $data['foto_rhl'] = tb_foto_rhl::all()->random($jumlah_rhl);
        $jumlah_ps = tb_foto_perhutanan_sosial::all()->count();
        $data['foto_ps'] = tb_foto_perhutanan_sosial::all()->random($jumlah_ps);
        $data['panduan'] = tb_panduan::orderby('tingkat','ASC')->get();
        $data['regulasi'] = tb_regulasi::orderby('tingkat','ASC')->get();
        return view('landing/utama',$data);
    }
}
