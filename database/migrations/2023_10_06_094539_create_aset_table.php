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
        Schema::create('asets', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->char('kode_aset')->unique();
            $table->string('golongan');
            $table->string('bidang');
            $table->string('kelompok');
            $table->string('sub_kelompok');
            $table->string('sub_sub_kelompok');
            $table->date('tanggal_pembelian');
            $table->foreignId('kategoris_id');
            $table->foreignId('lokasis_id');
            $table->integer('harga');
            $table->string('merk')->nullable();
            $table->string('luas')->nullable();
            $table->string('status_kepemilikan');
            $table->string('kondisi');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asets');
    }
};
