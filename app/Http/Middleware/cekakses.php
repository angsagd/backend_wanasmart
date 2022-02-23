<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\tb_user;
use App\Models\tb_role;
use App\Models\tb_role_pengguna;
use App\Models\tb_role_menu;
use App\Models\tb_menu;
use Session;

class cekakses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next , $menu)
    {
        if (!in_array($menu, Session::get('hakakses'))) {
            Session::flash('status','gagal');
            Session::flash('pesan','Anda tidak diijinkan untuk mengakses fitur '.strtoupper($menu));
            return redirect('/');
        }
        Session::flash('menu',$menu);
        return $next($request);
    }
}
