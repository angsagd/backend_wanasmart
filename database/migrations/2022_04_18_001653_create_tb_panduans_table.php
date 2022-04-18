<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPanduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_panduans', function (Blueprint $table) {
            $table->id('id_panduan');
            $table->timestamps();
            $table->string('nama_panduan');
            $table->text('path_panduan');
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
        Schema::dropIfExists('tb_panduans');
    }
}
