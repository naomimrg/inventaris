<?php

namespace App\Http\Controllers;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $riwayat = Riwayat::orderBy('created_at', 'DESC')->get();
        return view('riwayats.index', compact('riwayat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('riwayats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Riwayat::create($request->all());
        return redirect()->route('riwayats.index')->with('success', 'Riwayat added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $riwayat= Riwayat::findOrFail($id);
        return view('riwayats.show', compact('riwayat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $riwayat = riwayat::findOrFail($id);
        return view('riwayats.edit', compact('riwayat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $riwayat = Riwayat::findOrFail($id);
        $riwayat->update($request->all());
        return redirect()->route('riwayats')->with('success', 'Riwayat Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $riwayat = Riwayat::findOrFail($id);
        $riwayat->delete();
        return redirect()->route('riwayats')->with('success', 'Riwayat Deleted Successfully');
    }
}
