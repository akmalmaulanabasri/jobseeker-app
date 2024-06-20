@extends('welcome')

@section('landing')
    <div class="container mt-1 p-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0 rounded-lg overflow-hidden">
                    <div class="card-header text-center bg-dark text-white py-4">
                        @if ($user->profile_picture == null)
                            <img src="{{ asset('assets/image/profile.jpg') }}"
                                class="rounded-circle img-thumbnail border-0 shadow-sm" alt="Profile image" width="150"
                                height="150" />
                        @else
                            <img src="{{ asset('/storage/image/' . $user->profile_picture) }}"
                                class="rounded-circle img-thumbnail border-0 shadow-sm" alt="Profile image" width="150"
                                height="150" />
                        @endif
                    </div>
                    <div class="card-body bg-white text-center">
                        <h3 class="card-title">{{ $user->name }}</h3>
                        <p class="card-text text-muted">{{ $user->role }}</p>
                        <div class="text-center mb-4">
                            <form action="{{ route('edit-profile-user', $user->id) }}" method="POST">
                                @csrf
                                @method('patch')
                                <button class="btn btn-outline-dark">
                                    <i class="fas fa-edit me-2"></i>
                                    <span class="fw-bold">Edit Profile</span>
                                </button>
                            </form>
                        </div>
                        <ul class="list-group list-group-flush text-start">
                            <li class="list-group-item"><strong>Nama Lengkap:</strong> {{ $user->name }}</li>
                            <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                            <li class="list-group-item"><strong>Nomor Handphone:</strong> {{ $user->phone }}</li>
                            <li class="list-group-item"><strong>Alamat:</strong> {{ $user->address }}</li>
                            <li class="list-group-item"><strong>Deskripsi:</strong> {{ $user->description }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card-header img {
            border: 4px solid white;
        }

        .btn-outline-dark {
            border-color: #343a40;
            color: #343a40;
        }

        .btn-outline-dark:hover {
            background-color: #343a40;
            color: white;
        }
    </style>
@endsection
