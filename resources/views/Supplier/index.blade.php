@extends('layout')

@section('title', 'Daftar Supplier')

@section('content')
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>Daftar Supplier</h1>
        <a href="{{ route('supplier.create') }}" class="btn btn-primary">Tambah Supplier</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Supplier</th>
                <th>Alamat</th>
                <th>No. HP</th>
                <th>Barang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($supplier as $supplier)
                <tr>
                    <td>{{ $supplier->id }}</td>
                    <td>{{ $supplier->nama_supplier }}</td>
                    <td>{{ $supplier->alamat }}</td>
                    <td>{{ $supplier->no_hp }}</td>
                    <td>{{ $supplier->barang->nama_barang }}</td>
                    <td>
                        <a href="{{ route('supplier.show', $supplier) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('supplier.edit', $supplier) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('supplier.destroy', $supplier) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
