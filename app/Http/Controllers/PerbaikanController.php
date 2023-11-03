<?php

namespace App\Http\Controllers;

use App\Models\Perbaikan;
use Illuminate\Http\Request;

class PerbaikanController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perbaikans = Perbaikan::orderBy('created_at', 'DESC')->get();
        return view('perbaikans.index', compact('perbaikans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perbaikans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Perbaikan::create($request->all());
        return redirect()->route('perbaikans')->with('success', 'Perbaikan Aset Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $perbaikans= Perbaikan::findOrFail($id);
        return view('perbaikans.show', compact('perbaikan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $perbaikans = Perbaikan::findOrFail($id);
        return view('perbaikans.edit', compact('perbaikan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $perbaikans = Perbaikan::findOrFail($id);
        $perbaikans->update($request->all());
        return redirect()->route('perbaikans')->with('success', 'Perbaikan Aset Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $perbaikans = Perbaikan::findOrFail($id);
        $perbaikans->delete();
        return redirect()->route('perbaikans')->with('success', 'Perbaikan Aset Berhasil Dihapus');
    }
}
