<?php

use App\Http\Controllers\AsetController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KerusakanController;
use App\Http\Controllers\KerusakanStafController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PeminjamanStafController;
use App\Http\Controllers\PerbaikanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(ProfileController::class)->prefix('profile')->group(function () {
        Route::get('', 'index')->name('profile');
        Route::get('edit', 'edit')->name('profile.edit');
        Route::put('update', 'update')->name('profile.update');
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

        Route::controller(KerusakanController::class)->prefix('kerusakans')->group(function () {
            Route::get('', 'index')->name('kerusakans.index');
            Route::get('show/{id}', 'show')->name('kerusakans.show');
            Route::delete('destroy/{id}', 'destroy')->name('kerusakans.destroy');
        });

        Route::controller(PerbaikanController::class)->prefix('perbaikans')->group(function () {
            Route::get('', 'index')->name('perbaikans');
            Route::get('create', 'create')->name('perbaikans.create');
            Route::post('store', 'store')->name('perbaikans.store');
            Route::get('show/{id}', 'show')->name('perbaikans.show');
            Route::get('edit/{id}', 'edit')->name('perbaikans.edit');
            Route::put('edit/{id}', 'update')->name('perbaikans.update');
            Route::delete('destroy/{id}', 'destroy')->name('perbaikans.destroy');
        });

        Route::controller(RiwayatController::class)->prefix('riwayats')->group(function () {
            Route::get('', 'index')->name('riwayats');
            Route::get('create', 'create')->name('riwayats.create');
            Route::post('store', 'store')->name('riwayats.store');
            Route::get('show/{id}', 'show')->name('riwayats.show');
            Route::get('edit/{id}', 'edit')->name('riwayats.edit');
            Route::put('edit/{id}', 'update')->name('riwayats.update');
            Route::delete('destroy/{id}', 'destroy')->name('riwayats.destroy');
        });

        Route::controller(PeminjamanController::class)->prefix('peminjamans')->group(function () {
            Route::get('', 'index')->name('peminjamans.index');
            Route::get('show/{id}', 'show')->name('peminjamans.show');
            Route::delete('destroy/{id}', 'destroy')->name('peminjamans.destroy');
            Route::patch('approve/{id}', 'approve')->name('peminjamans.approve');
            Route::patch('reject/{id}', 'reject')->name('peminjamans.reject');
        });
    });

    Route::middleware(['userAkses:staf_aset'])->group(function () {
        Route::get('/auth/staf_aset', [AuthController::class, 'staf_aset']);

        Route::controller(PeminjamanStafController::class)->prefix('peminjaman')->group(function () {
            Route::get('', 'index')->name('peminjaman_staf.index');
            Route::get('create', 'create')->name('peminjaman_staf.create');
            Route::post('store', 'store')->name('peminjaman_staf.store');
            Route::get('show/{id}', 'show')->name('peminjaman_staf.show');
            Route::get('edit/{id}', 'edit')->name('peminjaman_staf.edit');
            Route::put('edit/{id}', 'update')->name('peminjaman_staf.update');
            Route::delete('destroy/{id}', 'destroy')->name('peminjaman_staf.destroy');
        });
        
        Route::controller(KerusakanStafController::class)->prefix('kerusakan')->group(function () {
            Route::get('', 'index')->name('kerusakan_staf.index');
            Route::get('create', 'create')->name('kerusakan_staf.create');
            Route::post('store', 'store')->name('kerusakan_staf.store');
            Route::get('show/{id}', 'show')->name('kerusakan_staf.show');
            Route::get('edit/{id}', 'edit')->name('kerusakan_staf.edit');
            Route::put('edit/{id}', 'update')->name('kerusakan_staf.update');
            Route::delete('destroy/{id}', 'destroy')->name('kerusakan_staf.destroy');
        });
});
