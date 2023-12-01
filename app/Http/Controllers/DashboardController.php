<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Kerusakan;
use App\Models\Peminjaman;

class DashboardController extends Controller
{
    public function index()
    {
        $aset = Aset::count();
        $kerusakan = Kerusakan::count();
        $peminjaman = Peminjaman::count();
        return view('dashboard', ['aset' => $aset, 'kerusakan' => $kerusakan, 'peminjaman' => $peminjaman]);
    }
}
