@extends('layout.landing')

@section('landing')
    <div class="container mt-1 p-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0 rounded-lg overflow-hidden">
                    <div class="card-header text-center bg-dark text-white py-4">
                        @if ($worker->profile_picture == null)
                            <img src="{{ asset('assets/image/profile.jpg') }}"
                                class="rounded-circle border-0 object-fit-cover shadow-sm" alt="Profile image" width="150"
                                height="150" />
                        @else
                            <img src="{{ asset('/storage/image/' . $worker->profile_picture) }}"
                                class="rounded-circle object-fit-cover border-0 shadow-sm" alt="Profile image"
                                width="150" height="150" />
                        @endif
                    </div>
                    <div class="card-body bg-white text-center">
                        <h3 class="card-title">{{ $worker->name }}</h3>
                        <p class="card-text text-muted">{{ $worker->role }}</p>

                        <ul class="list-group list-group-flush text-start">
                            <li class="list-group-item"><strong>Nama Lengkap:</strong> {{ $worker->name }}</li>
                            <li class="list-group-item"><strong>Email:</strong> {{ $worker->email }}</li>
                            <li class="list-group-item"><strong>Nomor Handphone:</strong> {{ $worker->phone }}</li>
                            <li class="list-group-item"><strong>Alamat:</strong> {{ $worker->address }}</li>
                            <li class="list-group-item"><strong>Deskripsi:</strong> {{ $worker->description }}</li>
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
