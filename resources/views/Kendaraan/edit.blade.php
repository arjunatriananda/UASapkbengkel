@extends('layout')

@section('title', 'Edit Kendaraan')

@section('content')
    <h1 class="my-4">Edit Kendaraan</h1>
    <form action="{{ route('kendaraan.update', $kendaraan) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="no_pol" class="form-label">No. Polisi</label>
            <input type="text" class="form-control" id="no_pol" name="no_pol" value="{{ $kendaraan->no_pol }}" required>
        </div>
        <div class="mb-3">
            <label for="no_mesin" class="form-label">No. Mesin</label>
            <input type="text" class="form-control" id="no_mesin" name="no_mesin" value="{{ $kendaraan->no_mesin }}" required>
        </div>
        <div class="mb-3">
            <label for="merek" class="form-label">Merek</label>
            <select class="form-select" id="merek" name="merek" required>
                <option value="honda" {{ $kendaraan->merek == 'honda' ? 'selected' : '' }}>Honda</option>
                <option value="yamaha" {{ $kendaraan->merek == 'yamaha' ? 'selected' : '' }}>Yamaha</option>
                <option value="suzuki" {{ $kendaraan->merek == 'suzuki' ? 'selected' : '' }}>Suzuki</option>
                <option value="kawasaki" {{ $kendaraan->merek == 'kawasaki' ? 'selected' : '' }}>Kawasaki</option>
                <option value="lain" {{ $kendaraan->merek == 'lain' ? 'selected' : '' }}>Lain</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="warna" class="form-label">Warna</label>
            <select class="form-select" id="warna" name="warna" required>
                <option value="Putih" {{ $kendaraan->warna == 'Putih' ? 'selected' : '' }}>Putih</option>
                <option value="Hitam" {{ $kendaraan->warna == 'Hitam' ? 'selected' : '' }}>Hitam</option>
                <option value="Hijau" {{ $kendaraan->warna == 'Hijau' ? 'selected' : '' }}>Hijau</option>
                <option value="Biru" {{ $kendaraan->warna == 'Biru
