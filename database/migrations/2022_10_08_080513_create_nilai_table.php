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
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->integer('nis')->unsigned();
            $table->integer('nip')->unsigned();
            $table->string('kode_mapel');
            $table->integer('id_komponen')->unsigned();
            $table->char('nilai');
            $table->char('predikat');
            $table->char('keterangan');
            $table->year('tahun');
            // $table->year('tahunakhir');
            // $table->char('semester'); 
            $table->timestamps();
        });

         Schema::table('nilai', function (Blueprint $table) {
             $table->foreign('kode_mapel')->references('kode')->on('mapel')->onDelete('cascade');
            $table->foreign('id_komponen')->references('id')->on('komponen')->onDelete('cascade');
            $table->foreign('nis')->references('nis')->on('siswa')->onDelete('cascade');
            $table->foreign('nip')->references('nip')->on('guru')->onDelete('cascade');
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
        Schema::dropIfExists('nilai');
    }
};
