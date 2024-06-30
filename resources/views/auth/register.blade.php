@extends('layout.auth')

@section('content')
    <form class="auth-register-form mt-2" action="{{ route('auth-register', $role) }}" method="POST">
        @csrf
        <div class="mb-1">
            <label for="register-name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="register-name" name="name" placeholder="johndoe"
                aria-describedby="register-name" tabindex="1" autofocus />
        </div>
        <div class="mb-1">
            <label for="register-email" class="form-label">Email</label>
            <input type="text" class="form-control" id="register-email" name="email" placeholder="john@example.com"
                aria-describedby="register-email" tabindex="2" />
        </div>
        <div class="mb-1">
            <label for="register-phone" class="form-label">Nomor telepon</label>
            <input type="text" class="form-control" id="register-phone" name="phone" placeholder="08xxxxxxxxx"
                aria-describedby="register-phone" tabindex="2" />
        </div>
        <div class="mb-1">
            <label for="register-address" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="register-address" name="address" placeholder="address"
                aria-describedby="register-address" tabindex="2" />
        </div>

        <div class="mb-1">
            <label for="register-password" class="form-label">Password</label>

            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" id="register-password" name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="register-password" tabindex="3" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
        </div>
        <button class="btn btn-primary w-100" tabindex="5">Daftar</button>
    </form>
@endsection
