<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk')->unique();
            $table->string('slug');
            $table->integer('harga');
            $table->integer('harga_diskon')->nullable();
            $table->integer('stok');
            $table->string('material_kaki')->nullable();
            $table->string('material_dudukan')->nullable();
            $table->string('busa')->nullable();
            $table->string('rangka')->nullable();
            $table->string('keseluruhan')->nullable();
            $table->integer('kedalaman_dudukan')->nullable();
            $table->integer('ketebalan_dudukan')->nullable();
            $table->boolean('beranda');
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
        Schema::dropIfExists('produk');
    }
}
