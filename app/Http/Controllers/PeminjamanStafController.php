<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanStafController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $peminjaman = Peminjaman::where('nama_peminjam', $user->name)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('peminjaman_staf.index', compact('peminjaman'));
    }

    public function create()
    {
        $asets = Aset::all();
        return view('peminjaman_staf.create', compact('asets'));
    }

    public function store(Request $request)
    {
        Peminjaman::create($request->all());
        return redirect()->route('peminjaman_staf.index')->with('success', 'Peminjaman berhasil ditambahkan');
    }

    /**
     * Menampilkan detail peminjaman.
     */
    public function show($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('peminjamans.show', compact('peminjaman'));
    }

    /**
     * Menampilkan halaman edit peminjaman.
     */
    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('peminjaman_staf.edit', compact('peminjaman'));
    }

    /**
     * Mengupdate data peminjaman.
     */
    public function update(Request $request, $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update($request->all());
        return redirect()->route('peminjaman_staf.index')->with('success', 'Data Peminjaman berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();
        return redirect()->route('peminjaman_staf.destroy')->with('success', 'Kerusakan Aset Berhasil Dihapus');
    }
}
