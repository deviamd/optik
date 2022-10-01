<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLaporans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('total_pelanggan');

            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_pembayaran');
            $table->timestamps();


            $table->foreign('id_pelanggan')->references('id')->on('pelanggans');
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
        Schema::dropIfExists('laporans');
    }
}
