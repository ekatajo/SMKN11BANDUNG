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
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('nis')->unique();
            $table->char('nama');
            $table->char('email');
            $table->string('username')->unique();
            $table->string('password');
            $table->char('gender');
            $table->text('alamat');
            $table->char('kecamatan');
            $table->char('kota');
            $table->char('kodepos');
            $table->string('kode_kelas');  
            $table->year('tahun');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('siswa', function (Blueprint $table) {
            $table->foreign('kode_kelas')->references('kode')->on('kelas')->onDelete('cascade');
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
        Schema::dropIfExists('siswa');
    }
};
