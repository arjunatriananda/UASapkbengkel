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
            @foreach($kendaraan as $kendaraan)
                <tr>
                    <td>{{ $kendaraan->no_pol }}</td>
                    <td>{{ $kendaraan->no_mesin }}</td>
                    <td>{{ ucfirst($kendaraan->merek) }}</td>
                    <td>{{ ucfirst($kendaraan->warna) }}</td>
                    <td>
                        <a href="{{ route('kendaraan.show', $kendaraan) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('kendaraan.edit', $kendaraan) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kendaraan.destroy', $kendaraan) }}" method="POST" style="display:inline">
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
