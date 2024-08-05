@extends('layout')

@section('title', 'Detail Supplier')

@section('content')
    <h1 class="my-4">Detail Supplier</h1>
    <div class="card">
        <div class="card-body">
            <p>ID: {{ $supplier->id }}</p>
            <p>Nama Supplier: {{ $supplier->nama_supplier }}</p>
            <p>Alamat: {{ $supplier->alamat }}</p>
            <p>No. HP: {{ $supplier->no_hp }}</p>
            <p>Barang: {{ $supplier->barang->nama_barang }}</p>
            <a href="{{ route('supplier.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
