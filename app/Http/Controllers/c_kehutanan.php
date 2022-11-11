<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_perhutanan_sosial;
use App\Models\tb_user;
use App\Models\tb_foto_perhutanan_sosial;
use App\Models\tb_potensi_hhbk;
use App\Models\tb_rhl;
use App\Models\tb_ps_kph;
use App\Models\tb_status_rhl;
use App\Models\tb_rhl_jenis_pohon;
use App\Models\tb_ps_catatan;
use App\Models\tb_verifikasi_persos;
use Illuminate\Support\Facades\Storage;
use Session;
use File;

class c_kehutanan extends Controller
{
    function perhutanan_sosial(){
        $data['perhutanan_sosial'] = 
                tb_perhutanan_sosial::
                    join('tb_verifikasi_persos','tb_verifikasi_persos.perhutanan_sosial_id','=','tb_perhutanan_sosial.id_perhutanan_sosial')
                    ->where('tb_perhutanan_sosial.user_id','=',Session::get('id'))->get();
        return view('kehutanan/list_perhutanan_sosial',$data);
    }

    function tambah_perhutanan_sosial(){
        return view('kehutanan.perhutanan_sosial_page');
    }

    function landing_perhutanan_sosial(){
        // return view('landing/kehutanan/perhutanan_sosial');
        return view('landing.kehutanan.perhutanan_sosial');
    }

    function dotambah(Request $request){

        $ps = new tb_perhutanan_sosial;
        $ps->nama_kelompok = $request->nama_kelompok;
        $ps->alamat = $request->alamat;
        $ps->lat = $request->lat;
        $ps->lng = $request->lng;
        $ps->kabupaten = $request->nama_kab;
        $ps->kecamatan = $request->nama_kec;
        $ps->kelurahan = $request->nama_kel;
        $ps->luas = $request->luas;
        $ps->jasa_lingkungan = $request->jasa_lingkungan;
        $ps->user_id = Session::get('id');

        if ($ps->save()) {

            $ps = tb_perhutanan_sosial::where('nama_kelompok','=',$request->nama_kelompok)->first();
            $verif = new tb_verifikasi_persos;
            $verif->tercatat = true;
            $verif->pemilahan_admin = false;
            $verif->verifikasi_kph = false;
            $verif->verifikasi_dklh = false;
            $verif->tayang = false;
            $verif->perhutanan_sosial_id = $ps->id_perhutanan_sosial;
            if($verif->save()){
                Session::flash('status','sukses');
                Session::flash('pesan','Data Perhutanan Sosial '.$request->nama_kelompok.' berhasil disimpan');
            } else {
                Session::flash('status','gagal');
                Session::flash('pesan','Data Perhutanan Sosial gagal disimpan');
            }
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Data Perhutanan Sosial gagal disimpan');
        }
        return redirect('perhutanan_sosial');
    }

    function foto_perhutanan_sosial($id){
        $data['perhutanan_sosial'] = tb_perhutanan_sosial::find($id);
        $data['foto'] = tb_foto_perhutanan_sosial::where('perhutanan_sosial_id','=',$id)->get();
        return view('kehutanan/foto_perhutanan_sosial',$data);
    }

    function simpan_foto(Request $request){

        $idps = $request->id_perhutanan_sosial;
        foreach($request->file('foto_ps') as $file){
            $image = new tb_foto_perhutanan_sosial;
            $name = 'PS'.$idps.'_'.time().md5(rand()).'.' .$file->extension();
            $size = $file->getSize();
            $file->move(public_path().'/files/foto/', $name);
            $image->path = $name;
            $image->perhutanan_sosial_id = $idps;
            if ($image->save()) {
                Session::flash('status','sukses');
                Session::flash('pesan','Foto berhasil diupload');
            } else {
                Session::flash('status','gagal');
                Session::flash('pesan','Foto gagal diupload');
            }
           
        }
        return redirect('foto_perhutanan_sosial/'.$idps);
    }

    function hapus_foto_ps($id){
        $foto = tb_foto_perhutanan_sosial::find($id);
        $path = public_path().'/files/foto/'.$foto->path;
        File::delete($path);
        $foto->delete();
        return back();
    }

    function potensi_hhbk($id){
        $data['perhutanan_sosial'] = tb_perhutanan_sosial::find($id);
        $data['hhbk'] = tb_potensi_hhbk::where('perhutanan_sosial_id','=',$id)->get();
        return view('kehutanan/potensi_hhbk',$data);
    }

    function hapus_ps($id){
        $data = tb_perhutanan_sosial::find($id);
        if ($data->delete()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Data Perhutanan Sosial berhasil dihapus');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Data Perhutanan Sosial gagal dihapus');
        }
        return back();
    }

    function simpan_hhbk(Request $request){
        $data = new tb_potensi_hhbk;
        $data->nama_potensi = $request->nama_potensi;
        $data->jumlah = $request->jumlah;
        $data->satuan = $request->satuan;
        $data->jangka_waktu = $request->jangka_waktu;
        $data->perhutanan_sosial_id = $request->id_perhutanan_sosial;
        if ($data->save()) {
            Session::flash('status','sukses');
            Session::flash('pesan','Data potensi HHBK berhasil disimpan');
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Data potensi HHBK gagal disimpan');
        }
        return redirect('potensi_hhbk/'.$request->id_perhutanan_sosial);
    }

    function hapus_potensi_hhbk($id){
        $hhbk = tb_potensi_hhbk::find($id);
        $hhbk->delete();
        return back();
    }

    function pemilahan_perhutanan_sosial(){
        $data['perhutanan'] = tb_perhutanan_sosial::
            join('tb_verifikasi_persos','tb_verifikasi_persos.perhutanan_sosial_id','=','tb_perhutanan_sosial.id_perhutanan_sosial')
            ->leftjoin('tb_ps_kphs','tb_ps_kphs.ps_id','=','tb_perhutanan_sosial.id_perhutanan_sosial')
            ->where('pemilahan_admin','=','0')
            ->orderby('tb_perhutanan_sosial.kabupaten')
            ->get();

        $data['rhl'] = tb_rhl::join('tb_status_rhls','tb_status_rhls.rhl_id','=','tb_rhls.id_rhl')
                    ->where('pemilahan_admin','=',0)
                    ->orderby('tb_rhls.kabupaten')
                    ->get();
        return view('kehutanan/admin/pemilahan_data',$data);
    }

    function verifikasi_admin($id){
        $data['hhbk'] = tb_potensi_hhbk::where('perhutanan_sosial_id','=',$id)->get();
        $data['foto'] = tb_foto_perhutanan_sosial::where('perhutanan_sosial_id','=',$id)->get();
        $data['catatan'] = tb_ps_catatan::where('ps_id','=',$id)->orderby('created_at','DESC')->get();
        $data['kehutanan'] = tb_perhutanan_sosial::select('tb_perhutanan_sosial.*','tb_user.nama','tb_user.email','tb_user.photo')
                            ->join('tb_user','tb_user.id','=','tb_perhutanan_sosial.user_id')
                            ->where('id_perhutanan_sosial','=',$id)->first();
        return view('kehutanan/admin/verifikasi_admin',$data);
    }

    function edit_perhutanan_sosial($id){
        $data['ps'] = tb_perhutanan_sosial::find($id);
        return view('kehutanan/edit_perhutanan_sosial',$data);
    }

    function doedit(Request $request){

        $ps = tb_perhutanan_sosial::find($request->id);
        $ps->nama_kelompok = $request->nama_kelompok;
        $ps->alamat = $request->alamat;
        $ps->lat = $request->lat;
        $ps->lng = $request->lng;
        $ps->kabupaten = $request->nama_kab;
        $ps->kecamatan = $request->nama_kec;
        $ps->kelurahan = $request->nama_kel;
        $ps->luas = $request->luas;
        $ps->jasa_lingkungan = $request->jasa_lingkungan;
       
        if ($ps->user_id == Session::get('id')) {
            if ($ps->save()){
                Session::flash('status','sukses');
                Session::flash('pesan','Perubahan Data Perhutanan Sosial '.$request->nama_kelompok.' berhasil disimpan');
            } else {
                Session::flash('status','gagal');
                Session::flash('pesan','Data Perhutanan Sosial gagal disimpan');
            }
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Perhutanan Sosial bukan kewenangan anda');
        }
        
        return redirect('perhutanan_sosial');
    }

    function list_rhl(){
        $data['rhl'] = tb_rhl::join('tb_status_rhls','tb_status_rhls.rhl_id','=','tb_rhls.id_rhl')
        ->where('user_id','=',Session::get('id'))->get();
        return view('kehutanan/list_rhl',$data);
    }

    function tambah_rhl(){
        return view('kehutanan/tambah_rhl');
    }

    function rhl_dotambah(Request $request){

        $ps = new tb_rhl;
        $ps->nama_kelompok = $request->nama_kelompok;
        $ps->alamat = $request->alamat;
        $ps->lat = $request->lat;
        $ps->lng = $request->lng;
        $ps->kabupaten = $request->nama_kab;
        $ps->kecamatan = $request->nama_kec;
        $ps->kelurahan = $request->nama_kel;
        $ps->luas = $request->luas;
        $ps->umur = $request->umur;
        $ps->user_id = Session::get('id');

        if ($ps->save()) {
            $rhl = tb_rhl::where('nama_kelompok','=',$request->nama_kelompok)->first();

            $verif = new tb_status_rhl;
            $verif->tercatat = true;
            $verif->pemilahan_admin = false;
            $verif->verifikasi_kph = false;
            $verif->verifikasi_dklh = false;
            $verif->tayang = false;
            $verif->rhl_id = $rhl->id_rhl;
            $verif->save();

            $pohon = $request->jenis_pohon;
            $jumlah = $request->jumlah_pohon;

            for ($i=0; $i < count($jumlah); $i++) { 
                $dp = new tb_rhl_jenis_pohon;
                $dp->jenis_pohon = $pohon[$i];
                $dp->jumlah_pohon= $jumlah[$i];
                $dp->rhl_id = $rhl->id_rhl;
                $dp->save();
            }
            Session::flash('status','sukses');
            Session::flash('pesan','Data Rehabilitasi Hutan dan Lahan '.$request->nama_kelompok.' berhasil disimpan');
           
        } else {
            Session::flash('status','gagal');
            Session::flash('pesan','Data Rehabilitasi Hutan dan Lahan gagal disimpan');
        }
        return redirect('list_rhl');
    }

    function doverifikasi_admin(Request $request){
        $data = new tb_ps_kph;
        $data->ps_id = $request->ps_id;
        $data->id_kph = $request->kph;
        if ($data->save()) {
            $verif = tb_verifikasi_persos::where('perhutanan_sosial_id','=',$request->ps_id)->first();
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
