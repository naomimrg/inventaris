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
    Schema::create('kerusakans', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->nullable()->constrained('users' );
        $table->foreignId('asets_id')->constrained('asets');
        $table->date('tanggal_laporan');
        $table->foreignId('lokasis_id')->constrained('lokasis');
        $table->text('deskripsi_kerusakan');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kerusakans');
    }
};
