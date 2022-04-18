<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_panduan;
use Session;
use File;

class c_panduan extends Controller
{
    function panduan(){
        $data['panduan'] = tb_panduan::orderby('tingkat','ASC')->get();
        return view('panduan/utama_panduan',$data);
    }


    function input_panduan(){
        return view('panduan.input_panduan');
    }

    function dotambah(Request $request){

        $file = $request->file;
        $name = time().md5(rand()).'.' .$file->extension();
        $size = $file->getSize();
        if ($file->move(public_path().'/files/panduan', $name)) {
            $pan = new tb_panduan;
            $pan->nama_panduan = $request->nama_panduan;
            $pan->keterangan = $request->keterangan;
            $pan->tingkat = $request->tingkat;
            $pan->path_panduan = 'files/panduan/'.$name;
            if ($pan->save()) {
                Session::flash('status','sukses');
                Session::flash('pesan','Panduan berhasil diupload');
            } else {
                Session::flash('status','gagal');
                Session::flash('pesan','Panduan gagal diupload');
            }
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Panduan gagal diupload');
        }
        return redirect('panduan');
    }

    function hapus($id){
        $panduan = tb_panduan::find($id);
        $path = public_path().'/'.$panduan->path_panduan;
        File::delete($path);
        if ($panduan->delete()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Panduan berhasil dihapus');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Panduan gagal dihapus');
        }
        
        return redirect('panduan');
    }

}
