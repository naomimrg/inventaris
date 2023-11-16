<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Kerusakan;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $asetCount = Aset::count();
        $kerusakanCount = Kerusakan::count();
        $peminjamanCount = Peminjaman::count();

        return view('dashboard', ['aset_count' => $asetCount, 'kerusakan_count' => $kerusakanCount, 'peminjaman_count' => $peminjamanCount]);
    }
}
