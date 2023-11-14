<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all();
        $lokasis = Lokasi::all();
        $riwayats = Riwayat::orderBy('created_at', 'DESC')->get();
        return view('riwayats.index', compact('riwayats', 'kategoris', 'lokasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        $lokasis = Lokasi::all();
        return view('riwayats.create', compact('kategoris', 'lokasis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Riwayat::create($request->all());
        return redirect()->route('riwayats')->with('success', 'Riwayat added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $riwayats= Riwayat::findOrFail($id);
        return view('riwayats.show', compact('riwayats'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategoris = Kategori::all();
        $lokasis = Lokasi::all();
        $riwayats = riwayat::findOrFail($id);
        return view('riwayats.edit', compact('riwayats','kategoris', 'lokasis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $riwayats = Riwayat::findOrFail($id);
        $riwayats->update($request->all());
        return redirect()->route('riwayats')->with('success', 'Riwayat Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $riwayats = Riwayat::findOrFail($id);
        $riwayats->delete();
        return redirect()->route('riwayats')->with('success', 'Riwayat Deleted Successfully');
    }
}
