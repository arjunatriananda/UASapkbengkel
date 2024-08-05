@extends('layout')

@section('content')
    <h1>Daftar Customer</h1>
    <a href="{{ route('customers.create') }}">Tambah Customer</a>
    <table>
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
                        <a href="{{ route('customers.show', $customer) }}">Lihat</a>
                        <a href="{{ route('customers.edit', $customer) }}">Edit</a>
                        <form action="{{ route('customers.destroy', $customer) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
