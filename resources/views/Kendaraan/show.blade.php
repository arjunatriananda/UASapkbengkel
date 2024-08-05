@extends('layout')

@section('title', 'Detail Kendaraan')

@section('content')
    <h1 class="my-4">Detail Kendaraan</h1>
    <div class="card">
        <div class="card-body">
            <p>No. Polisi: {{ $kendaraan->no_pol }}</p>
            <p>No. Mesin: {{ $kendaraan->no_mesin }}</p>
            <p>Merek: {{ ucfirst($kendaraan->merek) }}</p>
            <p>Warna: {{ ucfirst($kendaraan->warna) }}</p>
            <a href="{{ route('kendaraan.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
