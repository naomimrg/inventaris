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
        $peminjamans = Peminjaman::where('nama_peminjam', $user->name)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('peminjamans_staf.index', compact('peminjamans'));
    }

    public function create()
    {
        $asets = Aset::all();
        return view('peminjamans.create', compact('asets'));
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
        return view('peminjamans.edit', compact('peminjaman'));
    }

    /**
     * Mengupdate data peminjaman.
     */
    public function update(Request $request, $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update($request->all());
        return redirect()->route('peminjamans_staf.index')->with('success', 'Data Peminjaman berhasil diperbarui');
    }
}
