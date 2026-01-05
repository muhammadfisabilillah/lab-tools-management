@extends('layouts.app')

@section('content')

<h3 class="mb-4">Tambah Alat Laboratorium</h3>

<form action="{{ route('tools.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nama Alat</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Kategori</label>
        <input type="text" name="category" class="form-control" required>
    </div>

    <button class="btn btn-success">Simpan</button>
    <a href="{{ route('tools.index') }}" class="btn btn-secondary">Kembali</a>

</form>

@endsection
