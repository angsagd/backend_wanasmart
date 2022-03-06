<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_user;
use App\Models\tb_role;
use App\Models\tb_role_menu;
use App\Models\tb_role_pengguna;
use Session;

class c_login extends Controller
{
    public function loginpage(){
        return view('login/loginpage');
    }

    public function dologin(Request $request){
        $token = $request->credential;
        $tokenParts = explode(".", $token);  
        $tokenHeader = base64_decode($tokenParts[0]);
        $tokenPayload = base64_decode($tokenParts[1]);
        $jwtHeader = json_decode($tokenHeader);
        $jwtPayload = json_decode($tokenPayload);
        
        Session::put('login',True);
        Session::put('id',$jwtPayload->sub);
        Session::put('nama',$jwtPayload->name);
        Session::put('email',$jwtPayload->email);
        Session::put('photo',$jwtPayload->picture);

        $pengguna = tb_user::where('id_google','=',$jwtPayload->sub)->first();
        if (empty($pengguna)) {
            $data = new tb_user;
            $data->id_google = $jwtPayload->sub;
            $data->nama = $jwtPayload->name;
            $data->email = $jwtPayload->email;
            $data->password = md5($jwtPayload->email);
            $data->photo = $jwtPayload->picture;
            $data->token = md5($jwtPayload->sub.$jwtPayload->email);
            $data->save();
        } else {
            $pengguna->nama = $jwtPayload->name;
            $pengguna->photo = $jwtPayload->picture;
            $pengguna->save();
        }

        $hakakses = array('Pengguna');
        Session::put('hakakses',$hakakses);
        Session::put('role','Pengguna');

        return redirect('/');
        
    }

    public function dologout(){
        Session::flush();
        return redirect('/');
    }
}
