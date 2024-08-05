<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customers::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_customer' => 'required|string|max:150',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        Customers::create($request->all());
        return redirect()->route('customers.index')->with('success', 'Customer berhasil ditambahkan');
    }

    public function show(Customers $customer)
    {
        return view('customers.show', compact('customer'));
    }

    public function edit(Customers $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customers $customer)
    {
        $request->validate([
            'nama_customer' => 'required|string|max:150',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        $customer->update($request->all());
        return redirect()->route('customers.index')->with('success', 'Customer berhasil diupdate');
    }

    public function destroy(Customers $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Customer berhasil dihapus');
    }
}
