<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\tb_role_menu;

class CreateTbRoleMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_role_menu', function (Blueprint $table) {
            $table->id('id_role_menu');
            $table->timestamps();
            $table->index('role_id');
            $table->index('menu_id');
            $table->foreignId('role_id')
                    ->references('id_role')->on('tb_role')
                    ->onDelete('cascade');
            $table->foreignId('menu_id')
                    ->references('id_menu')->on('tb_menu')
                    ->onDelete('cascade');
        });

        $item = new tb_role_menu;
        $item->role_id = 1;
        $item->menu_id = 1;
        $item->save();

        $item = new tb_role_menu;
        $item->role_id = 1;
        $item->menu_id = 2;
        $item->save();

        $item = new tb_role_menu;
        $item->role_id = 1;
        $item->menu_id = 3;
        $item->save();

        $item = new tb_role_menu;
        $item->role_id = 1;
        $item->menu_id = 4;
        $item->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_role_menu');
    }
}
