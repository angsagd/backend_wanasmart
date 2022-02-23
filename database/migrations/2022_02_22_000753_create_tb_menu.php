<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\tb_menu;

class CreateTbMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_menu', function (Blueprint $table) {
            $table->id('id_menu');
            $table->timestamps();
            $table->integer('parent_menu');
            $table->string('nama_menu');
        });

        $menu = new tb_menu;
        $menu->parent_menu = 0;
        $menu->nama_menu = "Master Data";
        $menu->save();

        $menu = new tb_menu;
        $menu->parent_menu = 1;
        $menu->nama_menu = "Pengguna";
        $menu->save();

        $menu = new tb_menu;
        $menu->parent_menu = 1;
        $menu->nama_menu = "Role";
        $menu->save();

        $menu = new tb_menu;
        $menu->parent_menu = 1;
        $menu->nama_menu = "Menu";
        $menu->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_menu');
    }
}
