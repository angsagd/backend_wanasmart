<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_login;
use App\Http\Controllers\c_user;
use App\Http\Controllers\c_role;
use App\Http\Controllers\c_dashboard;
use App\Http\Controllers\c_mohonbibit;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('masuk', [c_login::class, 'loginpage']);
Route::post('dologin', [c_login::class, 'dologin']);
Route::get('keluar', [c_login::class, 'dologout']);

Route::group(['middleware' => ['autentikasi']], function(){
    Route::get('dashboard', [c_dashboard::class, 'index']);
    Route::get('/', [c_dashboard::class, 'index']);
});

Route::group(['middleware' => ['autentikasi']], function(){
    Route::get('mohon-bibit', [c_mohonbibit::class, 'index']);
});

// ROUTE USER
Route::group(['middleware' => ['autentikasi']], function(){
    Route::get('profil', [c_user::class, 'profil']);
    Route::get('show_profil/{id}', [c_user::class, 'show_profil']);
    Route::post('rubah_role', [c_user::class, 'rubah_role']);
    Route::get('pengguna', [c_user::class, 'list_pengguna']);
});

// ROUTE ROLE
Route::group(['middleware' => ['autentikasi']], function(){
    Route::get('role', [c_role::class, 'landing']);
});
