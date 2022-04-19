<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbRegulasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_regulasis', function (Blueprint $table) {
            $table->id('id_regulasi');
            $table->timestamps();
            $table->string('nama_regulasi');
            $table->text('path_regulasi');
            $table->string('keterangan')->nullable();
            $table->integer('tingkat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_regulasis');
    }
}
