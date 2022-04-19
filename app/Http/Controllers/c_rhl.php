<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_rhl;
use App\Models\tb_foto_rhl;
use Illuminate\Support\Facades\Storage;
use File;
use Session;

class c_rhl extends Controller
{
    function edit_rhl($id){
        $data['rhl'] = tb_rhl::find($id);
        return view('kehutanan.edit_rhl',$data);
    }

    function rhl_doedit(Request $request){

        $ps = tb_rhl::find($request->id_rhl);
        $ps->nama_kelompok = $request->nama_kelompok;
        $ps->alamat = $request->alamat;
        $ps->lat = $request->lat;
        $ps->lng = $request->lng;
        $ps->kabupaten = $request->nama_kab;
        $ps->kecamatan = $request->nama_kec;
        $ps->kelurahan = $request->nama_kel;
        $ps->luas = $request->luas;
        $ps->umur = $request->umur;
       
        if ($ps->user_id == Session::get('id')) {
            if ($ps->save()){
                Session::flash('status','sukses');
                Session::flash('pesan','Perubahan Data Rehabilitasi Hutan dan Lahan '.$request->nama_kelompok.' berhasil disimpan');
            } else {
                Session::flash('status','gagal');
                Session::flash('pesan','Data Rehabilitasi Hutan dan Lahan gagal disimpan');
            }
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Data Rehabilitasi Hutan dan Lahan gagal disimpan');
        }
        
        return redirect('list_rhl');
    }

    function galeri($id){
        $data['rhl'] = tb_rhl::find($id);
        $data['foto'] = tb_foto_rhl::where('rhl_id','=',$id)->get();
        return view('kehutanan/galeri_rhl',$data);
    }

    function simpan_foto(Request $request){

        $idps = $request->id_rhl;
        foreach($request->file('foto_ps') as $file){

            $image = new tb_foto_rhl;
            $name = 'RHL'.$idps.'_'.time().md5(rand()).'.' .$file->extension();
            $size = $file->getSize();
            $file->move(public_path().'/files/foto/', $name);
            $image->path = $name;
            $image->rhl_id = $idps;
            if ($image->save()) {
                Session::flash('status','sukses');
                Session::flash('pesan','Foto berhasil diupload');
            } else {
                Session::flash('status','gagal');
                Session::flash('pesan','Foto gagal diupload');
            }
           
        }
        return redirect('galeri_rhl/'.$idps);
    }

    function hapus_foto($id){
        $foto = tb_foto_rhl::find($id);
        $path = public_path().'/files/foto/'.$foto->path;
        File::delete($path);
        $foto->delete();
        return back();
    }
}
