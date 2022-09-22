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
        Schema::create('siswas', function (Blueprint $table) {
            $table->char('nis')->primary();
            $table->char('id_sekolah');
            $table->char('id_jurusan');
            $table->string('NamaSiswa');
            $table->string('kelas');
            $table->date('Tgllahir');
            $table->string('Tmplahir');
            $table->string('Alamat_Siswa');
            $table->integer('NoTelp');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
};
