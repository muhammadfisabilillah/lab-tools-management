@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow-sm">
            <div class="card-body">

                <h4 class="text-center mb-4">Login Lab Tools</h4>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember">
                            <label class="form-check-label">
                                Remember me
                            </label>
                        </div>

                        <a href="{{ route('password.request') }}" class="small">
                            Lupa password?
                        </a>
                    </div>

                    <button class="btn btn-primary w-100 mb-3">
                        Login
                    </button>
                </form>

                <div class="text-center">
                    <small>
                        Belum punya akun?
                        <a href="{{ route('register') }}">Daftar di sini</a>
                    </small>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
