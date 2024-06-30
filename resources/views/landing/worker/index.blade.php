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
        <div class="row">
            <h3 class="title">Pekerja tersedia</h3>
            @foreach ($workers as $item)
                <div class="col-md-3 my-2">
                    <div class="card my-2">
                        {{-- .card-img --}}
                        <img src="{{ asset('storage/image/' . $item->profile_picture) }}" class="square" alt="...">
                        <div class="card-body">
                            <h2 class="card-text">{{ $item->name }}</h2>
                            <small>{{ $item->address }}</small><br>
                            @auth
                                <a href="{{ route('pesan-pekerja', $item->id) }}" class="btn btn-dark my-2">Pesan</a>
                            @endauth

                            @guest
                                <a href="{{ route('login') }}" class="btn btn-dark my-2">Masuk untuk menghubungi</a>
                            @endguest
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
