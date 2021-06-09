<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user');
            $table->string('nomor_transaksi');
            $table->string('status');
            $table->integer('total_harga');
            $table->boolean('metode_pembayaran');
            $table->text('gambar')->nullable();
            $table->string('nama_penerima');
            $table->string('no_telp');
            $table->string('kota');
            $table->string('kecamatan');
            $table->longText('detail');
            $table->timestamps();
            $table->softDeletes();
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
