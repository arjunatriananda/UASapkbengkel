@extends('layout')

@section('title', 'Detail Customer')

@section('content')
    <h1>Detail Customer</h1>
    <p>ID: {{ $customer->id }}</p>
    <p>Nama Customer: {{ $customer->nama_customer }}</p>
    <p>Jenis Kelamin: {{ $customer->jenis_kelamin }}</p>
    <a href="{{ route('customers.index') }}">Kembali</a>
@endsection
