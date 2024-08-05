@extends('layout')

@section('title', 'Tambah Barang')

@section('content')
    <h1 class="my-4">Tambah Barang</h1>
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
        </div>
        <div class="form-group">
            <label for="merek" class="form-label">Merek</label>
            <input type="text" class="form-control" id="merek" name="merek" required>
        </div>
        <div class="form-group">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>
        <div class="form-group">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" required>
        </div>
        <div class="form-group">
            <label for="satuan" class="form-label">Satuan</label>
            <input type="text" class="form-control" id="satuan" name="satuan" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
