<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_regulasi;
use Session;
use File;

class c_regulasi extends Controller
{
    function utama_regulasi(){
        $data['regulasi'] = tb_regulasi::all();
        return view('regulasi.utama_regulasi',$data);
    }

    function input_regulasi(){
        return view('regulasi.input_regulasi');
    }

    function dotambah(Request $request){
        $file = $request->file;
        $name = time().md5(rand()).'.' .$file->extension();
        $size = $file->getSize();
        if ($file->move(public_path().'/files/regulasi/', $name)) {
            $pan = new tb_regulasi;
            $pan->nama_regulasi = $request->nama;
            $pan->keterangan = $request->keterangan;
            $pan->tingkat = $request->tingkat;
            $pan->path_regulasi = 'files/regulasi/'.$name;
            if ($pan->save()) {
                Session::flash('status','sukses');
                Session::flash('pesan','Regulasi berhasil diupload');
            } else {
                Session::flash('status','gagal');
                Session::flash('pesan','Regulasi gagal diupload');
            }
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Regulasi gagal diupload');
        }
        return redirect('utama_regulasi');
    }

    function hapus($id){
        $regulasi = tb_regulasi::find($id);
        $path = public_path().'/'.$regulasi->path_regulasi;
        File::delete($path);
        if ($regulasi->delete()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Regulasi berhasil dihapus');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Regulasi gagal dihapus');
        }
        return redirect('utama_regulasi');
    }
}
