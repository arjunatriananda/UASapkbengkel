@extends('layout')

@section('title', 'Daftar Keluhan')

@section('content')
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>Daftar Keluhan</h1>
        <a href="{{ route('keluhan.create') }}" class="btn btn-primary">Tambah Keluhan</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Keluhan</th>
                <th>Ongkos</th>
                <th>No. Pol</th>
                <th>Customer</th>
                <th>Pegawai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keluhan as $keluhan)
                <tr>
                    <td>{{ $keluhan->id }}</td>
                    <td>{{ $keluhan->nama_keluhan }}</td>
                    <td>{{ $keluhan->ongkos }}</td>
                    <td>{{ $keluhan->kendaraan->no_pol }}</td>
                    <td>{{ $keluhan->customer->nama_customer }}</td>
                    <td>{{ $keluhan->pegawai->nama_pegawai }}</td>
                    <td>
                        <a href="{{ route('keluhan.show', $keluhan) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('keluhan.edit', $keluhan) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('keluhan.destroy', $keluhan) }}" method="POST" style="display:inline">
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
