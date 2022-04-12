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

     public function login_page(){
        return view('login/login_page');
    }

    public function dologin(Request $request){
        $token = $request->credential;
        $tokenParts = explode(".", $token);  
        $tokenHeader = base64_decode($tokenParts[0]);
        $tokenPayload = base64_decode($tokenParts[1]);
        $jwtHeader = json_decode($tokenHeader);
        $jwtPayload = json_decode($tokenPayload);
        
        Session::put('login',True);
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

        $pengguna = tb_user::where('id_google','=',$jwtPayload->sub)->first();
        Session::put('id',$pengguna->id);

        $hakakses = array('Pengguna');
        Session::put('hakakses',$hakakses);
        Session::put('role','Pengguna');

        return redirect('dashboard');
        
    }

    public function dologout(){
        Session::flush();
        return redirect('/');
    }

    public function ceklogin(Request $request){
        $username = $request->email;
        $password = $request->password;
        $user = tb_user::where('email','=',$username)
                        ->where('password','=',md5($password))
                        ->first();
        if (!empty($user)) {
            Session::put('login',True);
            Session::put('id',$user->id);
            Session::put('nama',$user->nama);
            Session::put('email',$user->email);
            Session::put('photo',$user->photo);
            if ($username == 'superuser@gmail.com') {
                $hakakses = array('Administrator');
                Session::put('hakakses',$hakakses);
                Session::put('role','Administrator');
            }
        }

        return redirect('dashboard');
    }
}
