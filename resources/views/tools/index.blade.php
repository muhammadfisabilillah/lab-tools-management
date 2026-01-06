@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Daftar Alat Laboratorium</h3>
    <a href="{{ route('tools.create') }}" class="btn btn-primary">+ Tambah Alat</a>
</div>

<div class="row">
    @foreach($tools as $tool)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $tool->name }}</h5>

                    <span class="badge bg-info mb-2">
                        {{ $tool->category }}
                    </span>

                    <div class="mt-3 d-flex justify-content-between">
                        <a href="{{ route('tools.edit', $tool->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('tools.destroy', $tool->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus?')">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
