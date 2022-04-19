<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\tb_menu;
use App\Models\tb_role;

class AddMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ROLE =======================
        $data = new tb_role;
        $data->nama_role = 'Admin Kehutanan';
        $data->save();
        $data = new tb_role;
        $data->nama_role = 'Verifikator KPH';
        $data->save();
        $data = new tb_role;
        $data->nama_role = 'Verifikator Dinas';
        $data->save();

        // MENU ========================
        // MENU KEHUTANAN
        $data = new tb_menu;
        $data->parent_menu = 0;
        $data->nama_menu = 'Kehutanan';
        $data->save();

        // MENU Pemilahan Data
        $data = new tb_menu;
        $data->parent_menu = 0;
        $data->nama_menu = 'Pemilahan Data';
        $data->save();

        // MENU verifikasi KPH
        $data = new tb_menu;
        $data->parent_menu = 0;
        $data->nama_menu = 'Verifikasi KPH';
        $data->save();

        // MENU Verifikasi Dinas
        $data = new tb_menu;
        $data->parent_menu = 0;
        $data->nama_menu = 'Verifikasi Dinas';
        $data->save();

        // MENU Input Regulasi
        $data = new tb_menu;
        $data->parent_menu = 0;
        $data->nama_menu = 'Input Regulasi';
        $data->save();

        // MENU Input Panduan
        $data = new tb_menu;
        $data->parent_menu = 0;
        $data->nama_menu = 'Input Panduan';
        $data->save();

        // MENU Pengaduan
        $data = new tb_menu;
        $data->parent_menu = 0;
        $data->nama_menu = 'Pengaduan';
        $data->save();
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
