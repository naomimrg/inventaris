<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Kerusakan;
use App\Models\Peminjaman;

class DashboardController extends Controller
{
    public function index()
    {
        $asetCount = Aset::count();
        $kerusakanCount = Kerusakan::count();
        $peminjamanCount = Peminjaman::count();
        return view('dashboard', compact('asetCount', 'kerusakanCount', 'peminjamanCount'));

    }
}
