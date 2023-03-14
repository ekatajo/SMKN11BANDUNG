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
        Schema::create('komponen', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nip')->unsigned();
            $table->string('kode_mapel');
            $table->char('nama')->unique();
            $table->timestamps();
        });

            Schema::table('komponen', function (Blueprint $table) {
            $table->foreign('kode_mapel')->references('kode')->on('mapel')->onDelete('cascade');
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
        Schema::dropIfExists('komponen');
    }
};
