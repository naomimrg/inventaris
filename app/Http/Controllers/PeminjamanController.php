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
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('peminjamans.show', compact('peminjamen'));
    }

    public function approve($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->status = 'Disetujui';
        $peminjaman->save();

        return redirect()->route('peminjamans.index')->with('success', 'Peminjaman disetujui.');
    }

    public function reject($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->status = 'Ditolak';
        $peminjaman->save();

        return redirect()->route('peminjamans.index')->with('success', 'Peminjaman ditolak.');
    }
}
