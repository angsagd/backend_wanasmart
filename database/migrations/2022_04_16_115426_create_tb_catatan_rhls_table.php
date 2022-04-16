<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCatatanRhlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_catatan_rhls', function (Blueprint $table) {
            $table->id('id_catatan_rhl');
            $table->timestamps();
            $table->string('catatan');
            $table->foreignId('rhl_id')
                    ->references('id_rhl')->on('tb_rhls')
                    ->onDelete('cascade');
            $table->string('oleh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_catatan_rhls');
    }
}
