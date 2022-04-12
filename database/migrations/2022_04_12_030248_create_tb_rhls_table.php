<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbRhlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_rhls', function (Blueprint $table) {
            $table->id('id_rhl');
            $table->timestamps();
            $table->string('nama_kelompok');
            $table->string('alamat');
            $table->string('lat');
            $table->string('lng');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->double('luas');
            $table->double('umur');
            $table->index('user_id');
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
        Schema::dropIfExists('tb_rhls');
    }
}
