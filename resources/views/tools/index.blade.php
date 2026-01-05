@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h3>Daftar Alat Laboratorium</h3>
    <a href="{{ route('tools.create') }}" class="btn btn-primary">Tambah Alat</a>
</div>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama Alat</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tools as $tool)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $tool->name }}</td>
            <td>{{ $tool->category }}</td>
            <td>
                <a href="{{ route('tools.edit', $tool->id) }}" class="btn btn-warning btn-sm">Edit</a>

            <form action="{{ route('tools.destroy', $tool->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection