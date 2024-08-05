<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use App\Models\Kendaraan;
use App\Models\Customer;
use App\Models\customers;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    public function index()
    {
        $keluhan = Keluhan::with(['kendaraan', 'customer', 'pegawai'])->get();
        return view('keluhan.index', compact('keluhan'));
    }

    public function create()
    {
        $kendaraans = Kendaraan::all();
        $customers = customers::all();
        $pegawais = Pegawai::all();
        return view('keluhan.create', compact('kendaraans', 'customers', 'pegawais'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_keluhan' => 'required|string',
            'ongkos' => 'required|integer',
            'no_pol' => 'required|exists:kendaraan,no_pol',
            'id_customer' => 'required|exists:customers,id',
            'id_pegawai' => 'required|exists:pegawai,id',
        ]);

        Keluhan::create($request->all());
        return redirect()->route('keluhan.index')->with('success', 'Keluhan berhasil ditambahkan');
    }

    public function show(Keluhan $keluhan)
    {
        return view('keluhan.show', compact('keluhan'));
    }

    public function edit(Keluhan $keluhan)
    {
        $kendaraans = Kendaraan::all();
        $customers = customers::all();
        $pegawais = Pegawai::all();
        return view('keluhan.edit', compact('keluhan', 'kendaraans', 'customers', 'pegawais'));
    }

    public function update(Request $request, Keluhan $keluhan)
    {
        $request->validate([
            'nama_keluhan' => 'required|string',
            'ongkos' => 'required|integer',
            'no_pol' => 'required|exists:kendaraan,no_pol',
            'id_customer' => 'required|exists:customers,id',
            'id_pegawai' => 'required|exists:pegawai,id',
        ]);

        $keluhan->update($request->all());
        return redirect()->route('keluhan.index')->with('success', 'Keluhan berhasil diupdate');
    }

    public function destroy(Keluhan $keluhan)
    {
        $keluhan->delete();
        return redirect()->route('keluhan.index')->with('success', 'Keluhan berhasil dihapus');
    }
}
