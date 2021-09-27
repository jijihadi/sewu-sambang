<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitass', function (Blueprint $table) {
            $table->increments('id_fasilitas');
            $table->string('nama_fasilitas');
            $table->string('harga_fasilitas');
            $table->string('deskripsi_fasilitas');
            $table->string('gambar_fasilitas');
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
        Schema::dropIfExists('fasilitass');
    }
}
