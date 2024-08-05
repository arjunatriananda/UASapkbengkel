<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraan'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_pol' => 'required|string|max:10|unique:kendaraan,no_pol',
            'no_mesin' => 'required|string|max:15',
            'merek' => 'required|in:honda,yamaha,suzuki,kawasaki,lain',
            'warna' => 'required|in:Putih,Hitam,Hijau,Biru,Merah,Lain',
        ]);

        Kendaraan::create($request->all());
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan');
    }

    public function show($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        return view('kendaraan.show', compact('kendaraan'));
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_pol' => 'required|string|max:10|unique:kendaraan,no_pol,'.$id.',no_pol',
            'no_mesin' => 'required|string|max:15',
            'merek' => 'required|in:honda,yamaha,suzuki,kawasaki,lain',
            'warna' => 'required|in:Putih,Hitam,Hijau,Biru,Merah,Lain',
        ]);

        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->update($request->all());
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil diupdate');
    }

    public function destroy($no_pol)
    {
        $kendaraan = Kendaraan::where('no_pol', $no_pol)->first();
    
        if (!$kendaraan) {
            return redirect()->route('kendaraan.index')->with('error', 'Kendaraan not found.');
        }
    
        $kendaraan->delete();
    
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan successfully deleted.');
    }
    
}
