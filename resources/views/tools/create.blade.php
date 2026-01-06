@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <h4 class="mb-3">Tambah Alat</h4>

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
    </div>
</div>
@endsection
