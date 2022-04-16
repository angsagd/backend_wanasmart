<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbVerifikasiRhlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_verifikasi_rhls', function (Blueprint $table) {
            $table->id('id_verifikasi_rhl');
            $table->timestamps();
            $table->boolean('tercatat');
            $table->boolean('pemilahan_admin');
            $table->boolean('verifikasi_kph');
            $table->boolean('verifikasi_dklh');
            $table->boolean('tayang');
            $table->foreignId('rhl_id')
                    ->references('id_rhl')->on('tb_rhls')
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
        Schema::dropIfExists('tb_verifikasi_rhls');
    }
}
