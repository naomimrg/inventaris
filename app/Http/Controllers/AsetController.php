<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Kampus;
use App\Models\Kategori;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kategoris = Kategori::all();
        $lokasis = Lokasi::all();
        $kategoris_id = $request->input('kategoris_id');
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);
        $sort = $request->input('sort', 'created_at');
        $order = $request->input('order', 'desc');
    
        $asetQuery = Aset::query();
    
        if ($kategoris_id) {
            $asetQuery->where('kategoris_id', $kategoris_id);
        }
    
        if ($search) {
            $asetQuery->where(function ($q) use ($search) {
                $q->where('nama', 'LIKE', '%' . $search . '%')
                    ->orWhere('kode_aset', 'LIKE', '%' . $search . '%')
                    ->orWhere('harga', 'LIKE', '%' . $search . '%')
                    ->orWhere('kondisi', 'LIKE', '%' . $search . '%')
                    ->orWhereHas('kategoris', function ($subquery) use ($search) {
                        $subquery->where('nama_kategori', 'LIKE', '%' . $search . '%');
                    })
                    ->orWhereHas('lokasis', function ($subquery) use ($search) {
                        $subquery->where('nama_lokasi', 'LIKE', '%' . $search . '%');
                    });
            });
        }
        $aset = $asetQuery->orderBy($sort, $order)->paginate($perPage);
        return view('asets.index', compact('aset', 'kategoris', 'lokasis', 'kategoris_id', 'search', 'perPage', 'sort', 'order'));
    }    

    public function search(Request $request)
    {
        $kategoris_id = $request->input('kategoris_id', '');
        $search = $request->input('search', '');
        $asetQuery = Aset::orderBy('created_at', 'DESC');

        if (!empty($kategoris_id)) {
            $kategori = Kategori::find($kategoris_id);
            $kategoriNama = $kategori ? $kategori->nama_kategori : 'Semua Kategori';
            $asetQuery->where('kategoris_id', $kategoris_id);
        } else {
            $kategoriNama = 'Semua Kategori';
        }

        $aset = $asetQuery->get();
        $kategoris = Kategori::all();
        $lokasis = Lokasi::all();

        return view('asets.index', compact('aset', 'kategoris', 'lokasis', 'kategoris_id', 'search', 'kategoriNama'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        $lokasis = Lokasi::all();
        $kampuses = Kampus::all();
        return view('asets.create', compact('kategoris', 'lokasis', 'kampuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nomor_register' => 'required|numeric',
            'tanggal_pembelian' => 'required|date',
            'kategoris_id' => 'required',
            'lokasis_id' => 'required',
            'harga' => 'required|numeric',
            'status_kepemilikan' => 'required',
            'kondisi' => 'required',
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
            'nomor_register' => $request->nomor_register,
            'tanggal_pembelian' => $request->tanggal_pembelian,
            'kategoris_id' => $request->kategoris_id,
            'lokasis_id' => $request->lokasis_id,
            'kampuses_id' => $request->kampuses_id,
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
