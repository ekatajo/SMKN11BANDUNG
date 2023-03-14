<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->increments('nip')->unique();
            $table->char('nama'); 
            $table->char('email');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('level');
            $table->char('gender');
            $table->text('alamat');
            $table->char('kecamatan');
            $table->char('kota');
            $table->char('kodepos');
            $table->string('kode_mapel');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('guru', function (Blueprint $table) {
            $table->foreign('kode_mapel')->references('kode')->on('mapel')->onDelete('cascade');
            // Cascade Update & Delete
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guru');
    }
};
