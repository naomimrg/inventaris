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
        Schema::create('riwayats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asets_id')->constrained('asets');
            $table->date('tanggal');
            $table->enum('jenis_perubahan', ['Pembelian', 'Pemindahtanganan', 'Perbaikan']);
            $table->text('deskripsi');
            $table->enum('status', ['Baik', 'Rusak', 'Hilang']);
            $table->text('catatan_tambahan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayats');
    }
};
