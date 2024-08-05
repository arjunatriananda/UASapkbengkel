@extends('layout')

@section('title', 'Tambah Supplier')

@section('content')
    <h1 class="my-4">Tambah Supplier</h1>
    <form action="{{ route('supplier.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_supplier" class="form-label">Nama Supplier</label>
            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required></textarea>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No. HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
        </div>
        <div class="mb-3">
            <label for="id_barang" class="form-label">Barang</label>
            <select class="form-select" id="id_barang" name="id_barang" required>
                @foreach($barangs as $barang)
                    <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
