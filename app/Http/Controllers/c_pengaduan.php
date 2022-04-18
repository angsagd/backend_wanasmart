<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_pengaduan;
use App\Models\tb_tanggapan_pengaduan;
use Session;

class c_pengaduan extends Controller
{
    function list_pengaduan(){
        if(in_array('Pengaduan',Session::get('hakakses'))){
            $data['pengaduan'] = tb_pengaduan::
            join('tb_user','tb_user.id','=','tb_pengaduans.user_id')
            ->where('status',true)
            ->get();
        } else {
            $data['pengaduan'] = tb_pengaduan::
            join('tb_user','tb_user.id','=','tb_pengaduans.user_id')
            ->where('user_id',Session::get('id'))
            ->where('status',true)
            ->get();
        }
        
        return view('pengaduan/utama_pengaduan',$data);
    }

    function input_pengaduan(){
        return view('pengaduan/input_pengaduan');
    }

    function dotambah(Request $request){
        $data = new tb_pengaduan;
        $data->user_id = Session::get('id');
        $data->telp = $request->telp;
        $data->subjek = $request->subjek;
        $data->isi = $request->isi;
        $data->status = true;

        if ($data->save()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Pengaduan berhasil diajukan');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Pengaduan gagal diajukan');
        }
        
        return redirect('pengaduan');
    }

    function tanggapan_pengaduan($id){
        $data['pengaduan'] = tb_pengaduan::select('tb_pengaduans.*','tb_user.nama')
            ->join('tb_user','tb_user.id','=','tb_pengaduans.user_id')
            ->where('id_pengaduan',$id)
            ->first();
        $data['tanggapan'] = tb_tanggapan_pengaduan::where('pengaduan_id',$id)->orderby('created_at','DESC')->get();
        return view('pengaduan.tanggapan_pengaduan',$data);
    }

    function tanggapan_dotambah(Request $request){
        $data = new tb_tanggapan_pengaduan;
        $data->isi_tanggapan = $request->isi_tanggapan;
        $data->oleh = Session::get('nama');
        $data->pengaduan_id = $request->id_pengaduan;

        if ($data->save()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Tanggapan berhasil disimpan');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Tanggapan gagal disimpan');
        }
        return back(); 
    }

    function tutup_pengaduan($id){
        $data = tb_pengaduan::find($id);
        $data->status = false;
        if ($data->save()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Pengaduan berhasil ditutup');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Pengaduan gagal ditutup');
        }
        return redirect('pengaduan');
        
    }
}
