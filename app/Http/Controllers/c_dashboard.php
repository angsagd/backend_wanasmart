<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_perhutanan_sosial;
use App\Models\tb_user;
use App\Models\tb_foto_perhutanan_sosial;
use App\Models\tb_potensi_hhbk;
use App\Models\tb_rhl;
use App\Models\tb_verifikasi_persos;
use Session;

class c_dashboard extends Controller
{
    public function index(){
        Session::flash('menu','dashboard');
        $data['ps'] = tb_perhutanan_sosial::get();
        $data['rhl'] = tb_rhl::get();
        $data['permohonan_total'] = tb_perhutanan_sosial::count();
        return view('dashboard/dashboard',$data);
    }

    public function landing(){
        return view('landing/utama');
    }
}
