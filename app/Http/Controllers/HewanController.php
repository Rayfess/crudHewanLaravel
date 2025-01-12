<?php

namespace App\Http\Controllers;

use App\Http\Requests\HewanRequest;
use Illuminate\Http\Request;
use App\Models\Hewan;

class HewanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $hewan = Hewan::all();
        return view("hewan.index", compact("hewan"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("hewan.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HewanRequest $request)
    {
        Hewan::create($request->validated());

        return redirect()->route('hewan.index')->with('success', 'Data Hewan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hewan $hewan)
    {
        return view("hewan.show", compact("hewan"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hewan $hewan)
    {
        return view("hewan.edit", compact("hewan"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HewanRequest $request, Hewan $hewan)
    {
        $hewan->update($request->validated());
        return redirect()->route('hewan.index')->with('success', 'Data Hewan Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hewan $hewan)
    {
        $hewan->delete();
        return redirect()->route('hewan.index')->with('success', 'Data Hewan Berhasil Dihapus');
    }
}

#mencari dan memeriksa apakah data dari id tersebut ada?
// $hewan = Hewan::findOrFail($hewan->id);