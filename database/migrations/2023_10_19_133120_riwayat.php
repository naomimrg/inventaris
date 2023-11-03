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
            $table->unsignedBigInteger('aset_id');
            $table->string('kode_aset')->unique();
            $table->unsignedBigInteger('kategori_id'); 
            $table->unsignedBigInteger('lokasi_id');
            $table->date('tanggal');
            $table->enum('jenis_perubahan', ['Pembelian, Pemindahtanganan, Perbaikan']);
            $table->text('deskripsi'); // Deskripsi perubahan
            $table->unsignedBigInteger('user_id'); // ID pengguna yang bertanggung jawab
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
