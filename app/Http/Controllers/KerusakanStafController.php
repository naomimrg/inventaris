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
        $kerusakan = Kerusakan::orderBy('created_at', 'DESC')->get();
        return view('kerusakan_staf.index', compact('kerusakan'));
    }

    /**
     * Menampilkan halaman tambah kerusakan.
     */
    public function create()
    {
        $asets = Aset::all();
        $lokasis = Lokasi::all();
        return view('kerusakan_staf.create', compact('asets', 'lokasis'));
    }

    public function store(Request $request)
    {
        Kerusakan::create($request->all());
        return redirect()->route('kerusakan_staf.index')->with('success', 'Kerusakan Aset Berhasil Ditambahkan');
    }

    /**
     * Menampilkan detail kerusakan.
     */
    public function show($id)
    {
        $kerusakan = Kerusakan::findOrFail($id);
        return view('kerusakan_staf.show', compact('kerusakan'));
    }

    /**
     * Menampilkan halaman edit kerusakan.
     */
    public function edit($id)
    {
        $kerusakan = Kerusakan::findOrFail($id);
        $lokasis = Lokasi::all();
        return view('kerusakan_staf.edit', compact('kerusakan', 'lokasis'));
    }

    /**
     * Mengupdate data kerusakan.
     */
    public function update(Request $request, $id)
    {
        $kerusakan = Kerusakan::findOrFail($id);
        $kerusakan->update($request->all());
        return redirect()->route('kerusakan_staf.index')->with('success', 'Data Kerusakan berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $kerusakan = Kerusakan::findOrFail($id);
        $kerusakan->delete();
        return redirect()->route('kerusakan')->with('success', 'Kerusakan Aset Berhasil Dihapus');
    }
}
