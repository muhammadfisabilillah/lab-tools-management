@extends('layouts.app')

@section('content')
<div class="card shadow-sm col-md-6 mx-auto">
    <div class="card-header">
        <h5>Edit Alat</h5>
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

            <div class="d-flex justify-content-between">
                <a href="{{ route('tools.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
                <button class="btn btn-primary">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
