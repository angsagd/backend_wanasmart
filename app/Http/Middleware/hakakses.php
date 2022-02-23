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

class hakakses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $role = tb_role::where('nama_role','=',Session::get('role'))->first();
        $hakakses = array('');
        $hak = tb_role_menu::join('tb_menu','tb_menu.id_menu','=','tb_role_menu.menu_id')
                        ->where('tb_role_menu.role_id','=',$role->id_role)
                        ->get();
        foreach($hak as $h){
            array_push($hakakses, $h->nama_menu);
        }
        Session::put('hakakses',$hakakses);
        
        return $next($request);
    }
}
