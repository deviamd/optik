<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->bigIncrements('id_laporan');
            $table->string('id_sales');
            $table->string('total_pelanggan');
           
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_pembayaran');
            $table->timestamps();


            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan');
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
        Schema::dropIfExists('laporan');
    }
}
