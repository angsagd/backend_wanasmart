<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\tb_role;

class CreateTbRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_role', function (Blueprint $table) {
            $table->id('id_role');
            $table->timestamps();
            $table->string('nama_role');
        });

        $data = new tb_role;
        $data->nama_role = 'Administrator';
        $data->save(); 

        $data = new tb_role;
        $data->nama_role = 'Operator';
        $data->save(); 

        $data = new tb_role;
        $data->nama_role = 'Pengguna';
        $data->save(); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_role');
    }
}
