<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pengaduans', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->timestamps();
            $table->string('telp');
            $table->string('subjek');
            $table->text('isi');
            $table->boolean('status');
            $table->foreignId('user_id')
                    ->references('id')->on('tb_user')
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
        Schema::dropIfExists('tb_pengaduans');
    }
}
