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
        Schema::create('riwayat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asets_id');
            $table->string('kode_aset')->unique();
            $table->unsignedBigInteger('kategoris_id'); 
            $table->unsignedBigInteger('lokasis_id');
            $table->date('tanggal');
            $table->enum('jenis_perubahan', ['Pembelian, Pemindahtanganan, Perbaikan']);
            $table->text('deskripsi');
            $table->enum('status', ['Baik, Rusak, Hilang']);
            $table->text('catatan_tambahan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat');
    }
};
