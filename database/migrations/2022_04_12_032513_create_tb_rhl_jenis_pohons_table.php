<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbRhlJenisPohonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_rhl_jenis_pohons', function (Blueprint $table) {
            $table->id('id_rhl_jenis_pohon');
            $table->timestamps();
            $table->string('jenis_pohon');
            $table->double('jumlah_pohon');
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
        Schema::dropIfExists('tb_rhl_jenis_pohons');
    }
}
