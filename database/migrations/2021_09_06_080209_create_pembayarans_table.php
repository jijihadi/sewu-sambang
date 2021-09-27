<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->increments('id_pembayaran');
            $table->integer('pemesanan_id')->unsigned();
            $table->string('metode_pembayaran');
            $table->string('status_pembayaran');
            $table->string('bukti_pembayaran')->nullable();;
            $table->datetime('tanggal_pembayaran')->nullable();;
            $table->timestamps();

            // $table->foreign('pemesanan_id')->references('id_pemesanan')->on('pemesanans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('pembayarans', function(Blueprint $table){
            $table->dropUnique('pemesanan_id');
        });
    }
}
