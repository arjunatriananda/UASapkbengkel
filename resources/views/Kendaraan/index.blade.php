@extends('layout')

@section('title', 'Daftar Kendaraan')

@section('content')
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>Daftar Kendaraan</h1>
        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">Tambah Kendaraan</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No. Polisi</th>
                <th>No. Mesin</th>
                <th>Merek</th>
                <th>Warna</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kendaraan as $item)
                <tr>
                    <td>{{ $item->no_pol }}</td>
                    <td>{{ $item->no_mesin }}</td>
                    <td>{{ ucfirst($item->merek) }}</td>
                    <td>{{ ucfirst($item->warna) }}</td>
                    <td>
                        <a href="{{ route('kendaraan.show', $item->no_pol) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('kendaraan.edit', $item->no_pol) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kendaraan.destroy', $item->no_pol) }}" method="POST" style="display:inline">
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
