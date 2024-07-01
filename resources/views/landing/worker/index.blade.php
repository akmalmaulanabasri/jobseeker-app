@extends('layout.landing')

@section('landing')
    <div class="container-fluid bg-custom">
        <div class="search-container">
            <div class="row text-center p-5">
                <div class="col-md-6 offset-md-3">
                    <h1 class="text-white">E-FARMER</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-5 py-3">
        <h3 class="title">Pekerja tersedia</h3>
        <div class="row">
            @foreach ($workers as $item)
                <div class="col-md-6 my-2">
                    <div class="card my-2 position-relative">
                        <div class="row no-gutters">
                            <!-- Gambar Pekerja -->
                            <div class="col-md-4">
                                <img src="{{ asset('storage/image/' . $item->profile_picture) }}"
                                    class="rounded-start square" alt="{{ $item->name }}">
                            </div>

                            <!-- Detail Pekerja -->
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column justify-content-between h-100">
                                    <div>
                                        <h2 class="card-text">{{ $item->name }}</h2>
                                        <p>{{ $item->address }}</p>
                                        <p>{{ $item->phone }}</p>
                                        <p>{{ $item->description }}</p>
                                    </div>

                                    <!-- Tombol Tindakan -->
                                    <div class="mt-3 d-flex justify-content-between align-items-center">
                                        @auth
                                            <a href="{{ route('pesan-pekerja', $item->id) }}" class="btn btn-dark">Pesan</a>
                                        @endauth

                                        @guest
                                            <a href="{{ route('login') }}" class="btn btn-dark">Masuk untuk menghubungi</a>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tombol Like dan Rating di Kanan Atas -->
                        <div
                            class="btn-container position-absolute top-0 end-0 m-2 p-2 bg-white rounded shadow d-flex align-items-center">
                            <i class="bi bi-star-fill text-warning icon-large me-2"></i>
                            <span class="text-muted fs-5">5</span>
                            <i class="bi bi-heart-fill text-danger icon-large ms-3"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
