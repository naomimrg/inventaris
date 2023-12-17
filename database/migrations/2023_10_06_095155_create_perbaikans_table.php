<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('perbaikans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor');
            $table->foreignId('asets_id')->constrained('asets');
            $table->date('tanggal_permintaan_perbaikan');
            $table->text('deskripsi');
            $table->enum('status', ['Belum Diperbaiki', 'Sedang Diperbaiki', 'Sudah Diperbaiki']);
            $table->string('biaya');
            $table->text('informasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perbaikans');
    }
};
