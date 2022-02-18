<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_login;
use App\Http\Controllers\c_dashboard;
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
