<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_login;
use App\Http\Controllers\c_user;
use App\Http\Controllers\c_menu;
use App\Http\Controllers\c_role;
use App\Http\Controllers\c_dashboard;
use App\Http\Controllers\c_mohonbibit;
use App\Http\Controllers\c_pengujian;
use App\Http\Controllers\c_kehutanan;
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

Route::get('/', [c_dashboard::class, 'landing']);

Route::get('masuk', [c_login::class, 'login_page']);
Route::post('dologin', [c_login::class, 'dologin']);
Route::post('ceklogin', [c_login::class, 'ceklogin']);
Route::get('keluar', [c_login::class, 'dologout']);

Route::group(['middleware' => ['autentikasi','hakakses']], function(){
    Route::get('dashboard', [c_dashboard::class, 'index']);
});

Route::group(['middleware' => ['autentikasi','hakakses']], function(){
    Route::get('mohon-bibit', [c_mohonbibit::class, 'index']);
});

// ROUTE USER
Route::group(['middleware' => ['autentikasi','hakakses','cekakses:Pengguna']], function(){
    Route::get('profil', [c_user::class, 'profil']);
    Route::get('show_profil/{id}', [c_user::class, 'show_profil']);
    Route::get('pengguna', [c_user::class, 'list_pengguna']);
    Route::get('role_user/{id}', [c_user::class, 'role_user']);
    Route::get('hapus_pengguna/{token}', [c_user::class, 'hapus_pengguna']);
});

Route::group(['middleware' => ['autentikasi','hakakses']], function(){
    Route::post('rubah_role', [c_user::class, 'rubah_role']);
});

// ROUTE ROLE
Route::group(['middleware' => ['autentikasi','hakakses','cekakses:Role']], function(){
    Route::get('role', [c_role::class, 'landing']);
    Route::post('tambah_role_pengguna', [c_role::class, 'tambah_role_pengguna']);
    Route::get('hapus_role_pengguna/{token}/{id}', [c_role::class, 'hapus_role_pengguna']);
    Route::post('tambah_role', [c_role::class, 'tambah_role']);
    Route::get('hapus_role/{id}', [c_role::class, 'hapus_role']);
    Route::get('kelola_akses/{id}', [c_role::class, 'kelola_akses']);
    Route::post('tambah_kelola_akses', [c_role::class, 'tambah_kelola_akses']);
    Route::get('hapus_kelola_akses/{id}', [c_role::class, 'hapus_kelola_akses']);
});

// ROLE MENU
Route::group(['middleware' => ['autentikasi','hakakses','cekakses:Menu']], function(){
    Route::get('menu', [c_menu::class, 'landing_menu']);
    Route::post('tambah_menu', [c_menu::class, 'tambah_menu']);
    Route::get('hapus_menu/{id}', [c_menu::class, 'hapus_menu']);
});


// LANDING
Route::get('req_role', [c_role::class, 'req_role']);
Route::get('permohonan_pengujian', [c_pengujian::class, 'permohonan']);
Route::get('landing_perhutanan_sosial', [c_kehutanan::class, 'landing_perhutanan_sosial']);


// PERHUTANAN SOSIAL
Route::group(['middleware' => ['autentikasi']], function(){
    Route::get('perhutanan_sosial', [c_kehutanan::class, 'perhutanan_sosial']);
    Route::get('tambah_perhutanan_sosial', [c_kehutanan::class, 'tambah_perhutanan_sosial']);
    Route::post('perhutanansosial_dotambah', [c_kehutanan::class, 'dotambah']);
    Route::get('foto_perhutanan_sosial/{id}', [c_kehutanan::class, 'foto_perhutanan_sosial']);
    Route::get('hapus_foto_ps/{id}', [c_kehutanan::class, 'hapus_foto_ps']);
    Route::post('foto_perhutanan_sosial_simpan', [c_kehutanan::class, 'simpan_foto']);
    Route::get('potensi_hhbk/{id}', [c_kehutanan::class, 'potensi_hhbk']);
    Route::post('simpan_hhbk', [c_kehutanan::class, 'simpan_hhbk']);
    Route::get('hapus_potensi_hhbk/{id}', [c_kehutanan::class, 'hapus_potensi_hhbk']);
    Route::get('edit_perhutanan_sosial/{id}', [c_kehutanan::class, 'edit_perhutanan_sosial']);
    Route::post('perhutanansosial_doedit', [c_kehutanan::class, 'doedit']);

    Route::get('list_rhl', [c_kehutanan::class, 'list_rhl']);
    Route::get('tambah_rhl', [c_kehutanan::class, 'tambah_rhl']);
     Route::post('rhl_dotambah', [c_kehutanan::class, 'rhl_dotambah']);
});


// ADMIN PEMILAHAN DATA KEHUTANAN
Route::group(['middleware' => ['autentikasi','hakakses','cekakses:Pemilahan Data']], function(){
    Route::get('pemilahan_perhutanan_sosial', [c_kehutanan::class, 'pemilahan_perhutanan_sosial']);
    Route::get('verifikasi_admin/{id}', [c_kehutanan::class, 'verifikasi_admin']);
});

// 
