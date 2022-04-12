<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPotensiHhbksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_potensi_hhbks', function (Blueprint $table) {
            $table->id('id_potensi_hhbk');
            $table->timestamps();
            $table->string('nama_potensi');
            $table->double('jumlah');
            $table->string('satuan');
            $table->string('jangka_waktu');
            $table->index('perhutanan_sosial_id');
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
        Schema::dropIfExists('tb_potensi_hhbks');
    }
}
