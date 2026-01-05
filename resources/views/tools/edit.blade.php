@extends('layouts.app')

@section('content')

<h3 class="mb-4">Edit Alat Laboratorium</h3>

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

@endsection