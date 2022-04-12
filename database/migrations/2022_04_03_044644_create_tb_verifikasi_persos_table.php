<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbVerifikasiPersosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_verifikasi_persos', function (Blueprint $table) {
            $table->id('id_verifikasi_persos');
            $table->timestamps();
            $table->boolean('tercatat');
            $table->boolean('pemilahan_admin');
            $table->boolean('verifikasi_kph');
            $table->boolean('verifikasi_dklh');
            $table->boolean('tayang');
            $table->foreignId('perhutanan_sosial_id')
                    ->references('id_perhutanan_sosial')->on('tb_perhutanan_sosial')
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
        Schema::dropIfExists('tb_verifikasi_persos');
    }
}
