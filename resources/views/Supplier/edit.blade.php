@extends('layout')

@section('title', 'Edit Supplier')

@section('content')
    <h1 class="my-4">Edit Supplier</h1>
    <form action="{{ route('supplier.update', $supplier) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_supplier" class="form-label">Nama Supplier</label>
            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" value="{{ $supplier->nama_supplier }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required>{{ $supplier->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No. HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $supplier->no_hp }}" required>
        </div>
        <div class="mb-3">
            <label for="id_barang" class="form-label">Barang</label>
            <select class="form-select" id="id_barang" name="id_barang" required>
                @foreach($barangs as $barang)
                    <option value="{{ $barang->id }}" {{ $supplier->id_barang == $barang->id ? 'selected' : '' }}>{{ $barang->nama_barang }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
