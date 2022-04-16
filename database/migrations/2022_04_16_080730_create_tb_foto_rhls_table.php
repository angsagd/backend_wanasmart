<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbFotoRhlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_foto_rhls', function (Blueprint $table) {
            $table->id('id_foto_rhl');
            $table->timestamps();
            $table->string('path');
            $table->index('rhl_id');
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
        Schema::dropIfExists('tb_foto_rhls');
    }
}
