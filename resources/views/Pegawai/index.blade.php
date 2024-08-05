@extends('layout')

@section('title', 'Daftar Pegawai')

@section('content')
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>Daftar Pegawai</h1>
        <a href="{{ route('pegawai.create') }}" class="btn btn-primary">Tambah Pegawai</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pegawai</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $pegawai)
                <tr>
                    <td>{{ $pegawai->id }}</td>
                    <td>{{ $pegawai->nama_pegawai }}</td>
                    <td>{{ $pegawai->alamat }}</td>
                    <td>{{ $pegawai->jenis_kelamin }}</td>
                    <td>{{ ucfirst($pegawai->jabatan) }}</td>
                    <td>{{ ucfirst($pegawai->status) }}</td>
                    <td>
                        <a href="{{ route('pegawai.show', $pegawai) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('pegawai.edit', $pegawai) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pegawai.destroy', $pegawai) }}" method="POST" style="display:inline">
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
