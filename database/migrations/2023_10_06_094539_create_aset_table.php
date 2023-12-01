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
            $table->string('kode_aset')->unique();
            $table->date('tanggal_pembelian');
            $table->foreignId('kategoris_id')->nullable();
            $table->foreignId('lokasis_id')->nullable();
            $table->integer('harga');
            $table->string('merk');
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
