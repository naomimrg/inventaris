<?php

namespace App\Http\Controllers;

use App\Models\Kerusakan;
use Illuminate\Http\Request;

class KerusakanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kerusakans = Kerusakan::orderBy('created_at', 'DESC')->get();
        return view('kerusakans.index', compact('kerusakans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kerusakans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kerusakan::create($request->all());
        return redirect()->route('kerusakans')->with('success', 'Kerusakan Aset Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kerusakans = Kerusakan::findOrFail($id);
        return view('kerusakans.show', compact('kerusakan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kerusakans = Kerusakan::findOrFail($id);
        return view('kerusakans.edit', compact('kerusakan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kerusakans = Kerusakan::findOrFail($id);
        $kerusakans->update($request->all());
        return redirect()->route('kerusakans')->with('success', 'Kerusakan Aset Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kerusakans = Kerusakan::findOrFail($id);
        $kerusakans->delete();
        return redirect()->route('kerusakans')->with('success', 'Kerusakan Aset Berhasil Dihapus');
    }
}
