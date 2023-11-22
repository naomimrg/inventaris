<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Kerusakan;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class KerusakanStafController extends Controller
{
    /**
     * Menampilkan daftar kerusakan yang telah dilakukan oleh staf aset.
     */
    public function index()
    {
        $user = auth()->user();
        $kerusakans = Kerusakan::where('nama_pelapor', $user->name)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('kerusakans_staf.index', compact('kerusakans'));
    }

    /**
     * Menampilkan halaman tambah kerusakan.
     */
    public function create()
    {
        $asets = Aset::all();
        $lokasis = Lokasi::all();
        return view('kerusakans.create', compact('asets', 'lokasis'));
    }

    /**
     * Menampilkan detail kerusakan.
     */
    public function show($id)
    {
        $kerusakan = Kerusakan::findOrFail($id);
        return view('kerusakans_staf.show', compact('kerusakan'));
    }

    /**
     * Menampilkan halaman edit kerusakan.
     */
    public function edit($id)
    {
        $kerusakan = Kerusakan::findOrFail($id);
        return view('kerusakans_staf.edit', compact('kerusakan'));
    }

    /**
     * Mengupdate data kerusakan.
     */
    public function update(Request $request, $id)
    {
        $kerusakan = Kerusakan::findOrFail($id);
        $kerusakan->update($request->all());
        return redirect()->route('kerusakans_staf.index')->with('success', 'Data Kerusakan berhasil diperbarui');
    }
}
