<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->increments('id_pemesanan');
            $table->integer('user_id');
            $table->integer('fasilitas_id');
            $table->integer('tiket_id');
            $table->datetime('tanggal_pemesanan');
            $table->datetime('untuk_tanggal');
            $table->string('total_harga');
            $table->string('atas nama');
            $table->timestamps();
            
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('fasilitas_id')->references('id_fasilitas')->on('fasilitass');
            // $table->foreign('tiket_id')->references('id_tiket')->on('tikets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanans', function(Blueprint $table){
            $table->dropUnique('user_id');
            $table->dropUnique('fasilitas_id');
            $table->dropUnique('tiket_id');
        });
    }
}
