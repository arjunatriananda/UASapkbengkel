@extends('layout')

@section('title', 'Tambah Keluhan')

@section('content')
    <h1 class="my-4">Tambah Keluhan</h1>
    <form action="{{ route('keluhan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_keluhan" class="form-label">Nama Keluhan</label>
            <input type="text" class="form-control" id="nama_keluhan" name="nama_keluhan" required>
        </div>
        <div class="mb-3">
            <label for="ongkos" class="form-label">Ongkos</label>
            <input type="number" class="form-control" id="ongkos" name="ongkos" required>
        </div>
        <div class="mb-3">
            <label for="no_pol" class="form-label">No. Polisi Kendaraan</label>
            <select class="form-select" id="no_pol" name="no_pol" required>
                @foreach($kendaraans as $kendaraan)
                    <option value="{{ $kendaraan->no_pol }}">{{ $kendaraan->no_pol }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_customer" class="form-label">Customer</label>
            <select class="form-select" id="id_customer" name="id_customer" required>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->nama_customer }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_pegawai" class="form-label">Pegawai</label>
            <select class="form-select" id="id_pegawai" name="id_pegawai" required>
                @foreach($pegawais as $pegawai)
                    <option value="{{ $pegawai->id }}">{{ $pegawai->nama_pegawai }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
