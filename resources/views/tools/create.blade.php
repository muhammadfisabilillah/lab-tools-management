@extends('layouts.app')

@section('content')
<div class="card shadow-sm col-md-6 mx-auto">
    <div class="card-header">
        <h5>Tambah Alat</h5>
    </div>

    <div class="card-body">
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

            <div class="d-flex justify-content-between">
                <a href="{{ route('tools.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
                <button class="btn btn-success">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
