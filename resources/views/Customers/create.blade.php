@extends('layout')

@section('title', 'Tambah Customer')

@section('content')
    <h1>Tambah Customer</h1>
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div>
            <label>Nama Customer</label>
            <input type="text" name="nama_customer" required>
        </div>
        <div>
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <button type="submit">Simpan</button>
    </form>
@endsection
