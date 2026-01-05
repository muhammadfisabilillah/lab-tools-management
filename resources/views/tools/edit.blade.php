@extends('layouts.app')

@section('content')

<div class="card shadow-sm">
    <div class="card-header">
        <h5 class="mb-0">Edit Alat</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('tools.update', $tool->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Alat</label>
                <input type="text" name="name" class="form-control" value="{{ $tool->name }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" name="category" class="form-control" value="{{ $tool->category }}" required>
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="{{ route('tools.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection
