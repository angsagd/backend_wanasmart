<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTanggapanPengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tanggapan_pengaduans', function (Blueprint $table) {
            $table->id('id_tanggapan_pengaduan');
            $table->timestamps();
            $table->string('isi_tanggapan');
            $table->string('oleh');
            $table->foreignId('pengaduan_id')
                    ->references('id_pengaduan')->on('tb_pengaduans')
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
        Schema::dropIfExists('tb_tanggapan_pengaduans');
    }
}
