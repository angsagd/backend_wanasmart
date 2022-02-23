<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbRolePengguna extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_role_pengguna', function (Blueprint $table) {
            $table->id('id_role_pengguna');
            $table->timestamps();
            $table->index('user_id');
            $table->index('role_id');
            $table->foreignId('user_id')
                    ->references('id')->on('tb_user')
                    ->onDelete('cascade');
            $table->foreignId('role_id')
                    ->references('id_role')->on('tb_role')
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
        Schema::dropIfExists('tb_role_pengguna');
    }
}
