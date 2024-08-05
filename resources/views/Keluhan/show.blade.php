@extends('layout')

@section('title', 'Detail Keluhan')

@section('content')
    <h1 class="my-4">Detail Keluhan</h1>
    <div class="card">
        <div class="card-body">
            <p>ID: {{ $keluhan->id }}</p>
            <p>Nama Keluhan: {{ $keluhan->nama_keluhan }}</p>
            <p>Ongkos: {{ $keluhan->ongkos }}</p>
            <p>No. Polisi Kendaraan: {{ $keluhan->kendaraan->no_pol }}</p>
            <p>Customer: {{ $keluhan->customer->nama_customer }}</p>
            <p>Pegawai: {{ $keluhan->pegawai->nama_pegawai }}</p>
            <a href="{{ route('keluhan.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
