<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return redirect('dashboard');
    }

    public function dologout(){
        Session::flush();
        return redirect('dashboard');
    }
}
