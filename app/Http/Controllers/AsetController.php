<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aset = Aset::orderBy('created_at', 'DESC')->get();
        return view('asets.index', compact('aset'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('asets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Aset::create($request->all());
        return redirect()->route('asets.index')->with('success', 'Aset added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aset= Aset::findOrFail($id);
        return view('asets.show', compact('aset'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aset = Aset::findOrFail($id);
        return view('asets.edit', compact('aset'));
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
