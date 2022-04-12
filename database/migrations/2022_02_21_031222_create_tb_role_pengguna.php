<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\tb_role_pengguna;

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

        $item = new tb_role_pengguna;
        $item->user_id = 1;
        $item->role_id= 1;
        $item->save();

        $item = new tb_role_pengguna;
        $item->user_id = 1;
        $item->role_id= 2;
        $item->save();

        $item = new tb_role_pengguna;
        $item->user_id = 1;
        $item->role_id= 3;
        $item->save();



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
