<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Kategori;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aset = Aset::orderBy('created_at', 'DESC')->get();
        $kategoris = Kategori::all();
        $lokasis = Lokasi::all();
        return view('asets.index', compact('aset', 'kategoris', 'lokasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        $lokasis = Lokasi::all();
        return view('asets.create', compact('kategoris', 'lokasis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_pembelian' => 'required|date',
            'kategoris_id' => 'required',
            'lokasis_id' => 'required',
            'harga' => 'required|numeric',
            'status_kepemilikan' => 'required',
            'kondisi' => 'required',
            'deskripsi' => 'required',
        ]);
    
        $selectedGolongan = explode(' - ', $request->golongan)[0];
        $selectedBidang = explode(' - ', $request->bidang)[0];
        $selectedKelompok = explode(' - ', $request->kelompok)[0];
        $selectedSubKelompok = explode(' - ', $request->sub_kelompok)[0];
        $selectedSubSubKelompok = explode(' - ', $request->sub_sub_kelompok)[0];
    
        $kodeAset = "{$selectedGolongan}{$selectedBidang}{$selectedKelompok}{$selectedSubKelompok}{$selectedSubSubKelompok}";
        $kodeAset = str_replace('-', '', $kodeAset);
    
        $aset = new Aset([
            'nama' => $request->nama,
            'kode_aset' => $kodeAset,
            'golongan' => $request->golongan,
            'bidang' => $request->bidang,
            'kelompok' => $request->kelompok,
            'sub_kelompok' => $request->sub_kelompok,
            'sub_sub_kelompok' => $request->sub_sub_kelompok,
            'tanggal_pembelian' => $request->tanggal_pembelian,
            'kategoris_id' => $request->kategoris_id,
            'lokasis_id' => $request->lokasis_id,
            'harga' => $request->harga,
            'merk' => $request->merk,
            'status_kepemilikan' => $request->status_kepemilikan,
            'kondisi' => $request->kondisi,
            'deskripsi' => $request->deskripsi,
        ]);
    
        $aset->save();
        return redirect()->route('asets');
    }    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aset = Aset::findOrFail($id);
        return view('asets.show', compact('aset'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aset = Aset::findOrFail($id);
        $kategoris = Kategori::all();
        $lokasis = Lokasi::all();
        return view('asets.edit', compact('aset', 'kategoris', 'lokasis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aset = Aset::findOrFail($id);
        $aset->update($request->all());
        return redirect()->route('asets')->with('success', 'Aset Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aset = Aset::findOrFail($id);
        $aset->delete();
        return redirect()->route('asets')->with('success', 'Aset Deleted Successfully');
    }
}
