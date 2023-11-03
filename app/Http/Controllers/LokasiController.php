<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lokasis = Lokasi::orderBy('created_at', 'DESC')->get();
        return view('lokasis.index', compact('lokasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lokasis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Lokasi::create($request->all());
        return redirect()->route('lokasis')->with('success', 'Lokasi Aset Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lokasi = Lokasi::findOrFail($id);
        return view('lokasis.show', compact('lokasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lokasi = Lokasi::findOrFail($id);
        return view('lokasis.edit', compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lokasi = Lokasi::findOrFail($id);
        $lokasi->update($request->all());
        return redirect()->route('lokasis')->with('success', 'Lokasi Aset Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lokasis = Lokasi::findOrFail($id);
        $lokasis->delete();
        return redirect()->route('lokasis')->with('success', 'Lokasi Aset Berhasil Dihapus');
    }
}
