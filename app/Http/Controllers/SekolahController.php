<?php

namespace App\Http\Controllers;

use App\Models\Sekolah; // Pastikan model ini dieja dengan benar, huruf kapital untuk nama class
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Sekolah::all(); // Model harus menggunakan huruf kapital
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Sekolah(); // Model harus menggunakan huruf kapital
        $data->nama = $request->nama;
        $data->kelas = $request->kelas;
        $data->absen = $request->absen;
        $data->save();
        return redirect()->route('index');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(Sekolah $sekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sekolah = Sekolah::findOrFail($id);
        return view('edit', compact('sekolah'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sekolah = Sekolah::findOrFail($id);
        $sekolah->nama = $request->nama;
        $sekolah->kelas = $request->kelas;
        $sekolah->absen = $request->absen;
        $sekolah->save();
    
        return redirect()->route('index')->with('success', 'Sekolah updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sekolah $sekolah, $id)
    {
        $sekolah = Sekolah::findOrFail($id);
    $sekolah->delete();

    return redirect()->route('index')->with('success', 'Sekolah deleted successfully.');
    }
}
