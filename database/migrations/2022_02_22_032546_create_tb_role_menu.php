<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
