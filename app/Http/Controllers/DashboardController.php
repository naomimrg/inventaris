<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Kerusakan;
use App\Models\Peminjaman;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            $asetCount = Aset::count();
            $kerusakanCount = Kerusakan::count();
            $peminjamanCount = Peminjaman::count();

            return view('dashboard', compact('asetCount', 'kerusakanCount', 'peminjamanCount'));
        } catch (QueryException $e) {
            // Tangani error database di sini, misalnya, log error atau berikan respons yang sesuai.
            return $this->handleDatabaseError($e);
        } catch (\Exception $e) {
            // Tangani error umum di sini, misalnya, log error atau berikan respons yang sesuai.
            return $this->handleGeneralError($e);
        }
    }

    private function handleDatabaseError(QueryException $e)
    {
        // Log error atau lakukan tindakan khusus untuk kesalahan database
        return view('error', ['error' => 'Terjadi kesalahan database. Silakan coba lagi nanti.']);
    }

    private function handleGeneralError(\Exception $e)
    {
        // Log error atau lakukan tindakan khusus untuk kesalahan umum
        return view('error', ['error' => 'Terjadi kesalahan. Silakan coba lagi nanti.']);
    }
}
