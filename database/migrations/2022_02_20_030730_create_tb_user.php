<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\tb_user;

class CreateTbUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('id_google');
            $table->string('nama');
            $table->string('email');
            $table->string('password');
            $table->string('telp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('photo')->nullable();
            $table->string('token');
        });

        $user = new tb_user;
        $user->id_google = '0000000000000000';
        $user->nama = 'Super User';
        $user->email = 'superuser@gmail.com';
        $user->password = md5('admin_123_!');
        $user->token = md5(rand(1000,9999));
        $user->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_user');
    }
}
