@extends('layout')

@section('title', 'Tambah Kendaraan')

@section('content')
    <h1 class="my-4">Tambah Kendaraan</h1>
    <form action="{{ route('kendaraan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="no_pol" class="form-label">No. Polisi</label>
            <input type="text" class="form-control" id="no_pol" name="no_pol" required>
        </div>
        <div class="mb-3">
            <label for="no_mesin" class="form-label">No. Mesin</label>
            <input type="text" class="form-control" id="no_mesin" name="no_mesin" required>
        </div>
        <div class="mb-3">
            <label for="merek" class="form-label">Merek</label>
            <select class="form-select" id="merek" name="merek" required>
                <option value="honda">Honda</option>
                <option value="yamaha">Yamaha</option>
                <option value="suzuki">Suzuki</option>
                <option value="kawasaki">Kawasaki</option>
                <option value="lain">Lain</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="warna" class="form-label">Warna</label>
            <select class="form-select" id="warna" name="warna" required>
                <option value="Putih">Putih</option>
                <option value="Hitam">Hitam</option>
                <option value="Hijau">Hijau</option>
                <option value="Biru">Biru</option>
                <option value="Merah">Merah</option>
                <option value="Lain">Lain</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
