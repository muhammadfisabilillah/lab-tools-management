@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow-sm">
            <div class="card-body">

                <h4 class="text-center mb-4">Registrasi Akun</h4>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>

                    <button class="btn btn-success w-100 mb-3">
                        Daftar
                    </button>
                </form>

                <div class="text-center">
                    <small>
                        Sudah punya akun?
                        <a href="{{ route('login') }}">Login di sini</a>
                    </small>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
