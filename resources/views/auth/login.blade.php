@extends('layout.auth')

@section('content')
    <form class="auth-login-form mt-2" action="index.html" method="POST">
        <div class="mb-1">
            <label for="login-email" class="form-label">Email</label>
            <input type="text" class="form-control" id="login-email" name="login-email" placeholder="john@example.com"
                aria-describedby="login-email" tabindex="1" autofocus />
        </div>

        <div class="mb-1">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="login-password">Password</label>
                <a href="page-auth-forgot-password-v1.html">
                    <small>Forgot Password?</small>
                </a>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" id="login-password" name="login-password"
                    tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="login-password" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
        </div>
        <div class="mb-1">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" />
                <label class="form-check-label" for="remember-me"> Remember Me </label>
            </div>
        </div>
        <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
    </form>
@endsection
