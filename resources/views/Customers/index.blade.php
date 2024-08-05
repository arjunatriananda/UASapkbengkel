@extends('layout')

@section('title', 'Daftar Customer')

@section('content')
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>Daftar Customer</h1>
        <a href="{{ route('customers.create') }}" class="btn btn-primary">Tambah Customer</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Customer</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->nama_customer }}</td>
                    <td>{{ $customer->jenis_kelamin }}</td>
                    <td>
                        <a href="{{ route('customers.show', $customer) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('customers.edit', $customer) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('customers.destroy', $customer) }}" method="POST" style="display:inline">
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
