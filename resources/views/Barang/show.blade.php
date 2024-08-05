@extends('layout')

@section('title', 'Detail Barang')

@section('content')
    <h1 class="my-4">Detail Barang</h1>
    <div class="card">
        <div class="card-body">
            <p>ID: {{ $barang->id }}</p>
            <p>Nama Barang: {{ $barang->nama_barang }}</p>
            <p>Merek: {{ $barang->merek }}</p>
            <p>Harga: {{ $barang->harga }}</p>
            <p>Stok: {{ $barang->stok }}</p>
            <p>Satuan: {{ $barang->satuan }}</p>
            <a href="{{ route('barang.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
