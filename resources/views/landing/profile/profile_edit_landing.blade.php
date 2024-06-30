@extends('layout.landing')

@section('landing')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-dark text-white text-center py-3">
                        <h4 class="card-title mb-0">Edit Profile</h4>
                    </div>
                    <div class="card-body p-4">
                        <form class="auth-register-form" action="{{ route('update-profile', $user->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="mb-3">
                                <label for="register-profile" class="form-label">Foto Profile</label>
                                <input type="file" class="form-control" id="register-profile" name="profile_picture"
                                    accept="image/*">
                            </div>

                            <div class="mb-3">
                                <label for="register-name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="register-name" name="name"
                                    value="{{ $user->name }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="register-email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="register-email" name="email"
                                    value="{{ $user->email }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="register-phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="register-phone" name="phone"
                                    value="{{ $user->phone }}">
                            </div>

                            <div class="mb-3">
                                <label for="register-address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="register-address" name="address"
                                    value="{{ $user->address }}">
                            </div>

                            <div class="mb-3">
                                <label for="register-password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" class="form-control form-control-merge" id="register-password"
                                        name="password" value="{{ $user->password }}">
                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="register-description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="register-description" name="description"
                                    value="{{ $user->description }}">
                            </div>

                            {{-- <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" id="register-privacy-policy" required>
                                <label class="form-check-label" for="register-privacy-policy">
                                    I agree to <a href="#">privacy policy & terms</a>
                                </label>
                            </div> --}}

                            <button type="submit" class="btn btn-dark w-100">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
