@extends('layouts.app')

@section('content')

<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Alat Laboratorium</h5>
        <a href="{{ route('tools.create') }}" class="btn btn-sm btn-primary">
            + Tambah Alat
        </a>
    </div>

    <div class="card-body p-0">
        <table class="table table-striped mb-0">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Nama Alat</th>
                    <th>Kategori</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tools as $tool)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $tool->name }}</td>
                    <td>{{ $tool->category }}</td>
                    <td>
                        <a href="{{ route('tools.edit', $tool->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('tools.destroy', $tool->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center text-muted py-3">
                        Belum ada data alat
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
