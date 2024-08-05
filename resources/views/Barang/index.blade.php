@extends('layout')

@section('title', 'Daftar Barang')

@section('content')
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>Daftar Barang</h1>
        <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Barang</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Merek</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Satuan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->merek }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->satuan }}</td>
                    <td>
                        <a href="{{ route('barang.show', $barang) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('barang.edit', $barang) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('barang.destroy', $barang) }}" method="POST" style="display:inline">
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
