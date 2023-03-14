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
        Schema::create('walikelas', function (Blueprint $table) {
            $table->id();
            $table->integer('nip')->unsigned();
            $table->string('kode_kelas');
            $table->timestamps();
        });

         Schema::table('walikelas', function (Blueprint $table) {
            $table->foreign('kode_kelas')->references('kode')->on('kelas')->onDelete('cascade');
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
        Schema::dropIfExists('walikelas');
    }
};
