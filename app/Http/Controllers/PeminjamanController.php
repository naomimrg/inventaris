<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjamen = Peminjaman::orderBy('created_at', 'DESC')->get();
        return view('peminjamans.index', compact('peminjamen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $asets = Aset::all();
        return view('peminjamans.create', compact('asets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        peminjaman::create($request->all());
        return redirect()->route('peminjamans')->with('success', 'Peminjaman Aset Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peminjamen = Peminjaman::findOrFail($id);
        return view('peminjamans.show', compact('peminjamen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peminjamen = Peminjaman::findOrFail($id);
        return view('peminjamans.edit', compact('peminjamen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update($request->all());
        return redirect()->route('peminjamans')->with('success', 'Peminjaman Aset Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();
        return redirect()->route('peminjamans')->with('success', 'Peminjaman Aset Berhasil Dihapus');
    }

    public function approve($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update(['status' => 'approved']);

        return redirect()->route('peminjamans')->with('success', 'Peminjaman disetujui');
    }

    public function reject($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update(['status' => 'rejected']);

        return redirect()->route('peminjamans')->with('success', 'Peminjaman ditolak');
    }
}
