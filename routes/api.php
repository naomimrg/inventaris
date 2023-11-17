<?php

use App\Http\Controllers\AsetController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KerusakanController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PerbaikanController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\SesiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [SesiController::class, 'login']);
Route::post('/register', [SesiController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);

    // Rute API untuk Aset
    Route::prefix('asets')->group(function () {
        Route::get('', [AsetController::class, 'index']);
        Route::get('{id}', [AsetController::class, 'show']);
        Route::post('create', [AsetController::class, 'store']);
        Route::put('update/{id}', [AsetController::class, 'update']);
        Route::delete('delete/{id}', [AsetController::class, 'destroy']);
    });

    // Rute API untuk Kerusakan
    Route::prefix('kerusakans')->group(function () {
        Route::get('', [KerusakanController::class, 'index']);
        Route::get('{id}', [KerusakanController::class, 'show']);
        Route::post('create', [KerusakanController::class, 'store']);
        Route::put('update/{id}', [KerusakanController::class, 'update']);
        Route::delete('delete/{id}', [KerusakanController::class, 'destroy']);
    });

    // Rute API untuk Peminjaman
    Route::prefix('peminjamans')->group(function () {
        Route::get('', [PeminjamanController::class, 'index']);
        Route::get('{id}', [PeminjamanController::class, 'show']);
        Route::post('create', [PeminjamanController::class, 'store']);
        Route::put('update/{id}', [PeminjamanController::class, 'update']);
        Route::delete('delete/{id}', [PeminjamanController::class, 'destroy']);
    });

    // Rute API untuk Kategori
    Route::prefix('kategoris')->group(function () {
        Route::get('', [KategoriController::class, 'index']);
        Route::get('{id}', [KategoriController::class, 'show']);
        Route::post('create', [KategoriController::class, 'store']);
        Route::put('update/{id}', [KategoriController::class, 'update']);
        Route::delete('delete/{id}', [KategoriController::class, 'destroy']);
    });

    // Rute API untuk Lokasi
    Route::prefix('lokasis')->group(function () {
        Route::get('', [LokasiController::class, 'index']);
        Route::get('{id}', [LokasiController::class, 'show']);
        Route::post('create', [LokasiController::class, 'store']);
        Route::put('update/{id}', [LokasiController::class, 'update']);
        Route::delete('delete/{id}', [LokasiController::class, 'destroy']);
    });

    // Rute API untuk Perbaikan
    Route::prefix('perbaikans')->group(function () {
        Route::get('', [PerbaikanController::class, 'index']);
        Route::get('{id}', [PerbaikanController::class, 'show']);
        Route::post('create', [PerbaikanController::class, 'store']);
        Route::put('update/{id}', [PerbaikanController::class, 'update']);
        Route::delete('delete/{id}', [PerbaikanController::class, 'destroy']);
    });

    // Rute API untuk Riwayat
    Route::prefix('riwayats')->group(function () {
        Route::get('', [RiwayatController::class, 'index']);
        Route::get('{id}', [RiwayatController::class, 'show']);
        Route::post('create', [RiwayatController::class, 'store']);
        Route::put('update/{id}', [RiwayatController::class, 'update']);
        Route::delete('delete/{id}', [RiwayatController::class, 'destroy']);
    });
});
