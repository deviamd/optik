<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTransaksis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_produk');
            $table->unsignedBigInteger('id_pembayaran');
            $table->datetime('tanggal');
            $table->unsignedBigInteger('total_bayar');
            $table->timestamps();


            $table->foreign('id_pelanggan')->references('id')->on('pelanggans');
            $table->foreign('id_produk')->references('id')->on('produks');
            $table->foreign('id_pembayaran')->references('id')->on('pembayarans');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
