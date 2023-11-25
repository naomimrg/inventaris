<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Kerusakan;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class KerusakanController extends Controller
{
    public function index()
    {
        $kerusakans = Kerusakan::orderBy('created_at', 'DESC')->get();
        return view('kerusakans.index', compact('kerusakans'));
    }

    public function show(string $id)
    {
        $kerusakans = Kerusakan::findOrFail($id);
        return view('kerusakans.show', compact('kerusakans'));
    }


    public function destroy(string $id)
    {
        $kerusakans = Kerusakan::findOrFail($id);
        $kerusakans->delete();
        return redirect()->route('kerusakans.index')->with('success', 'Kerusakan Aset Berhasil Dihapus');
    }
}
