@extends('layout.auth')

@section('content')
    <form class="auth-register-form mt-2" action="{{ route('register', $role) }}" method="POST">
        @csrf
        <div class="mb-1">
            <label for="register-name" class="form-label">Name</label>
            <input type="text" class="form-control" id="register-name" name="name" placeholder="johndoe"
                aria-describedby="register-name" tabindex="1" autofocus />
        </div>
        <div class="mb-1">
            <label for="register-email" class="form-label">Email</label>
            <input type="text" class="form-control" id="register-email" name="email" placeholder="john@example.com"
                aria-describedby="register-email" tabindex="2" />
        </div>
        <div class="mb-1">
            <label for="register-phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="register-phone" name="phone" placeholder="08xxxxxxxxx"
                aria-describedby="register-phone" tabindex="2" />
        </div>
        <div class="mb-1">
            <label for="register-address" class="form-label">Address</label>
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
        <div class="mb-1">
            <label for="register-desctiption" class="form-label">Desctiption</label>
            <input type="text" class="form-control" id="register-desctiption" name="description"
                placeholder="john@example.com" aria-describedby="register-desctiption" tabindex="2" />
        </div>

        <div class="mb-1">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="register-privacy-policy" tabindex="4" />
                <label class="form-check-label" for="register-privacy-policy">
                    I agree to <a href="#">privacy policy & terms</a>
                </label>
            </div>
        </div>
        <button class="btn btn-primary w-100" tabindex="5">Sign up</button>
    </form>
@endsection
