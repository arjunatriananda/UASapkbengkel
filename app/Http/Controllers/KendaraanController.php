<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('kendaraans.index', compact('kendaraans'));
    }

    public function create()
    {
        return view('kendaraans.create');
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
        return redirect()->route('kendaraans.index')->with('success', 'Kendaraan berhasil ditambahkan');
    }

    public function show(Kendaraan $kendaraan)
    {
        return view('kendaraans.show', compact('kendaraan'));
    }

    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraans.edit', compact('kendaraan'));
    }

    public function update(Request $request, Kendaraan $kendaraan)
    {
        $request->validate([
            'no_pol' => 'required|string|max:10|unique:kendaraan,no_pol,'.$kendaraan->no_pol.',no_pol',
            'no_mesin' => 'required|string|max:15',
            'merek' => 'required|in:honda,yamaha,suzuki,kawasaki,lain',
            'warna' => 'required|in:Putih,Hitam,Hijau,Biru,Merah,Lain',
        ]);

        $kendaraan->update($request->all());
        return redirect()->route('kendaraans.index')->with('success', 'Kendaraan berhasil diupdate');
    }

    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();
        return redirect()->route('kendaraans.index')->with('success', 'Kendaraan berhasil dihapus');
    }
}
