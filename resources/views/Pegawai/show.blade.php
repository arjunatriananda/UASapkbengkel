@extends('layout')

@section('title', 'Detail Pegawai')

@section('content')
    <h1 class="my-4">Detail Pegawai</h1>
    <div class="card">
        <div class="card-body">
            <p>ID: {{ $pegawai->id }}</p>
            <p>Nama Pegawai: {{ $pegawai->nama_pegawai }}</p>
            <p>Alamat: {{ $pegawai->alamat }}</p>
            <p>Jenis Kelamin: {{ $pegawai->jenis_kelamin }}</p>
            <p>Jabatan: {{ ucfirst($pegawai->jabatan) }}</p>
            <p>Status: {{ ucfirst($pegawai->status) }}</p>
            <a href="{{ route('pegawai.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
