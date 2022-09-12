<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_produk');
            $table->unsignedBigInteger('id_pembayaran');
            $table->datetime('id_tanggal');
            $table->unsignedBigInteger('total_bayar');
            $table->string('keterangan', 100);
            $table->timestamps();


            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan');
            $table->foreign('id_produk')->references('id_produk')->on('produk');
            $table->foreign('id_pembayaran')->references('id_pembayaran')->on('pembayaran');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
