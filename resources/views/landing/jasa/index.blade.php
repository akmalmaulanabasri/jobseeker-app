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
            @foreach ($jasa as $item)
                <div class="col-md-3 my-2">
                    <div class="card my-2">
                        <div class="card-body">
                            <h2 class="card-text">{{ $item['nama'] }}</h2>
                            <h4>Rp{{ number_format($item['harga'], 0) }} / Meter</h4>
                            <a href="{{ route('cari-pekerja') }}" class="btn btn-dark my-2">Cari pekerja</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
