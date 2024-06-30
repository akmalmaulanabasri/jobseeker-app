@extends('layout.auth')

@section('content')
    <form class="auth-login-form mt-2" action="{{ route('auth-login') }}" method="POST">
        @csrf
        <div class="mb-1">
            <label for="login-email" class="form-label">Email</label>
            <input type="email" class="form-control" id="login-email" name="email" placeholder="john@example.com"
                aria-describedby="login-email" tabindex="1" autofocus />
        </div>

        <div class="mb-1">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="login-password">Password</label>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" id="login-password" name="password"
                    tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="login-password" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
        </div>
        <button class="btn btn-primary w-100" tabindex="4">Masuk</button>
    </form>
    <p class="text-center mt-2">
        <span>Belum punya akun?</span>
        <span>Daftar dibawah ini</span>
    </p>
    <div class="row justify-content-center">
        <a href="{{ route('register', 'user') }}" class="btn btn-info w-100">Daftar Sebagai pembeli</a>
        <a href="{{ route('register', 'farmer') }}" class="btn btn-success w-100 mt-2">Daftar sebagai pekerja</a>
    </div>
@endsection
