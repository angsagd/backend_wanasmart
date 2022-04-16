<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPsKphsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ps_kphs', function (Blueprint $table) {
            $table->id('id_ps_kph');
            $table->timestamps();
            $table->foreignId('ps_id')
                    ->references('id_perhutanan_sosial')->on('tb_perhutanan_sosial')
                    ->onDelete('cascade');
            $table->integer('id_kph');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_ps_kphs');
    }
}
