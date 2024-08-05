@extends('layout')

@section('title', 'Edit Customer')

@section('content')
    <h1>Edit Customer</h1>
    <form action="{{ route('customers.update', $customer) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Nama Customer</label>
            <input type="text" name="nama_customer" value="{{ $customer->nama_customer }}" required>
        </div>
        <div>
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" required>
                <option value="L" {{ $customer->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $customer->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
