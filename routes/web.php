<?php

use App\Http\Controllers\AsetController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KerusakanController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PerbaikanController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/auth', [AuthController::class, 'index']);
    Route::get('/logout', [SesiController::class, 'logout'])->name('logout');
});

    Route::controller(AsetController::class)->prefix('asets')->group(function () {
        Route::get('', 'index')->name('asets');
        Route::get('create', 'create')->name('asets.create');
        Route::post('store', 'store')->name('asets.store');
        Route::get('show/{id}', 'show')->name('asets.show');
        Route::get('edit/{id}', 'edit')->name('asets.edit');
        Route::put('edit/{id}', 'update')->name('asets.update');
        Route::delete('destroy/{id}', 'destroy')->name('asets.destroy');
    });

    Route::controller(PeminjamanController::class)->prefix('peminjamans')->group(function () {
        Route::get('', 'index')->name('peminjamans');
        Route::get('create', 'create')->name('peminjamans.create');
        Route::post('store', 'store')->name('peminjamans.store');
        Route::get('show/{id}', 'show')->name('peminjamans.show');
        Route::delete('destroy/{id}', 'destroy')->name('peminjamans.destroy');
    });

    Route::controller(KerusakanController::class)->prefix('kerusakans')->group(function () {
        Route::get('', 'index')->name('kerusakans');
        Route::get('create', 'create')->name('kerusakans.create');
        Route::post('store', 'store')->name('kerusakans.store');
        Route::get('show/{id}', 'show')->name('kerusakans.show');
        Route::delete('destroy/{id}', 'destroy')->name('kerusakans.destroy');
    });

    Route::middleware(['userAkses:admin'])->group(function () {
        Route::get('/auth/admin', [AuthController::class, 'admin']);

        Route::controller(KategoriController::class)->prefix('kategoris')->group(function () {
            Route::get('', 'index')->name('kategoris');
            Route::get('create', 'create')->name('kategoris.create');
            Route::post('store', 'store')->name('kategoris.store');
            Route::get('show/{id}', 'show')->name('kategoris.show');
            Route::get('edit/{id}', 'edit')->name('kategoris.edit');
            Route::put('edit/{id}', 'update')->name('kategoris.update');
            Route::delete('destroy/{id}', 'destroy')->name('kategoris.destroy');
        });

        Route::controller(LokasiController::class)->prefix('lokasis')->group(function () {
            Route::get('', 'index')->name('lokasis');
            Route::get('create', 'create')->name('lokasis.create');
            Route::post('store', 'store')->name('lokasis.store');
            Route::get('show/{id}', 'show')->name('lokasis.show');
            Route::get('edit/{id}', 'edit')->name('lokasis.edit');
            Route::put('edit/{id}', 'update')->name('lokasis.update');
            Route::delete('destroy/{id}', 'destroy')->name('lokasis.destroy');
        });

        // Route::get('/kerusakans', [KerusakanController::class, 'index'])->name('kerusakans.index');

        Route::controller(PerbaikanController::class)->prefix('perbaikans')->group(function () {
            Route::get('', 'index')->name('perbaikans');
            Route::get('create', 'create')->name('perbaikans.create');
            Route::post('store', 'store')->name('perbaikans.store');
            Route::get('show/{id}', 'show')->name('perbaikans.show');
            Route::get('edit/{id}', 'edit')->name('perbaikans.edit');
            Route::put('edit/{id}', 'update')->name('perbaikans.update');
            Route::delete('destroy/{id}', 'destroy')->name('perbaikans.destroy');
        });

        Route::controller(RiwayatController::class)->prefix('riwayat')->group(function () {
            Route::get('', 'index')->name('riwayats');
            Route::get('create', 'create')->name('riwayats.create');
            Route::post('store', 'store')->name('riwayats.store');
            Route::get('show/{id}', 'show')->name('riwayats.show');
            Route::get('edit/{id}', 'edit')->name('riwayats.edit');
            Route::put('edit/{id}', 'update')->name('riwayats.update');
            Route::delete('destroy/{id}', 'destroy')->name('riwayats.destroy');
        });
    });

    Route::middleware(['userAkses:staf_aset'])->group(function () {
        Route::get('/auth/staf_aset', [AuthController::class, 'staf_aset']);
    });

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/profile', [SesiController::class, 'profile'])->name('profile');
