<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang');
            $table->string('kategori');
            $table->string('jenis');
            //$table->foreign('kategori')->references('id')->on('Kategori');
            $table->integer('jumlahbarang');
            $table->integer('harga_masuk');
            $table->integer('harga_keluar');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->date('tanggal_kadaluarsa');
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
        Schema::dropIfExists('barang');
    }
}
