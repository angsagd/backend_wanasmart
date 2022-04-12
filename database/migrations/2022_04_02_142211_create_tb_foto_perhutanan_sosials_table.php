<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbFotoPerhutananSosialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_foto_perhutanan_sosials', function (Blueprint $table) {
            $table->id('id_foto_perhutanan_sosial');
            $table->timestamps();
            $table->string('path');
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
        Schema::dropIfExists('tb_foto_perhutanan_sosials');
    }
}
