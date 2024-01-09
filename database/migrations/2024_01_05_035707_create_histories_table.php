<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->integer('material_number');
            $table->string('nama_barang');
            $table->string('range_pengukuran');
            $table->string('satuan_pengukuran');
            $table->string('deskripsi');
            $table->string('kondisi');
            $table->string('merk');
            $table->string('tipe');
            $table->integer('jumlah_barang');
            $table->string('id_satuan_barang');
            $table->integer('lokasi_awal');
            $table->integer('lokasi_akhir');
            $table->integer('kode_transaksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history');
    }
};
