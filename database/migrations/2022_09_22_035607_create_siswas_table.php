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
            $table->id();
            $table->char('nis');
            $table->char('id_sekolah')->nullable();
            $table->char('id_jurusan')->nullable();
            $table->string('NamaSiswa');
            $table->string('kelas');
            $table->date('Tgllahir')->nullable();
            $table->string('Tmplahir');
            $table->string('Alamat_Siswa');
            $table->integer('NoTelp')->nullable();
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
