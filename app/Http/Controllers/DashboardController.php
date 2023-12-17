<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Kerusakan;
use App\Models\Peminjaman;

class DashboardController extends Controller
{
    public function index()
    {
        $totalAset = Aset::count();
        $totalKerusakan = Kerusakan::count();
        $totalPeminjaman = Peminjaman::count();
        $totalHargaAset = Aset::sum('harga');
        $totalAsetWayKanan = Aset::where('kampuses_id', 1)->count();
        $totalAsetLampungTengah = Aset::where('kampuses_id', 2)->count(); 
        $totalHargaAsetWayKanan = Aset::where('kampuses_id', 1)->sum('harga');
        $totalHargaAsetLampungTengah = Aset::where('kampuses_id', 2)->sum('harga');
        $totalAsetBaikWayKanan = Aset::where('kampuses_id', 1)->where('kondisi', 'Baik')->count();
        $totalAsetRusakRinganWayKanan = Aset::where('kampuses_id', 1)->where('kondisi', 'Rusak Ringan')->count();
        $totalAsetRusakBeratWayKanan = Aset::where('kampuses_id', 1)->where('kondisi', 'Rusak Berat')->count();
        $totalAsetBaikLampungTengah = Aset::where('kampuses_id', 2)->where('kondisi', 'Baik')->count();
        $totalAsetRusakRinganLampungTengah = Aset::where('kampuses_id', 2)->where('kondisi', 'Rusak Ringan')->count();
        $totalAsetRusakBeratLampungTengah = Aset::where('kampuses_id', 2)->where('kondisi', 'Rusak Berat')->count();

        return view('dashboard', [
            'totalAset' => $totalAset,
            'totalKerusakan' => $totalKerusakan,
            'totalPeminjaman' => $totalPeminjaman,
            'totalHargaAset' => $totalHargaAset,
            'totalAsetWayKanan' => $totalAsetWayKanan,
            'totalAsetLampungTengah' => $totalAsetLampungTengah,
            'totalHargaAsetWayKanan' => $totalHargaAsetWayKanan,
            'totalHargaAsetLampungTengah' => $totalHargaAsetLampungTengah,
            'totalAsetBaikWayKanan' => $totalAsetBaikWayKanan,
            'totalAsetRusakRinganWayKanan' => $totalAsetRusakRinganWayKanan,
            'totalAsetRusakBeratWayKanan' => $totalAsetRusakBeratWayKanan,
            'totalAsetBaikLampungTengah' => $totalAsetBaikLampungTengah,
            'totalAsetRusakRinganLampungTengah' => $totalAsetRusakRinganLampungTengah,
            'totalAsetRusakBeratLampungTengah' => $totalAsetRusakBeratLampungTengah,
        ]);
    }
}
