@extends('welcome')

@section('landing')
    <div class="container-fluid bg-custom">
        <div class="search-container">
            <div class="row text-center p-5">
                <div class="col-12 ">
                    <input type="text" class="search-input" placeholder="Cari Lowongan">
                </div>
                {{-- <div class="col-12 col-md-4 mb-3 mb-md-0">
                <input type="text" class="search-input" placeholder="Search term 2">
            </div>
            <div class="col-12 col-md-4">
                <input type="text" class="search-input" placeholder="Search term 3">
            </div> --}}
            </div>
        </div>
    </div>
    <div class="container-fluid px-5 py-3">
        <div class="col">
            <div class="row">
                <div class="col-md-6">
                    <h3 class=" title">Lowongan Kerja</h3>
                    @foreach ($postings as $item)
                        <div class="card my-2">
                            <div class="card-body">
                                <p class="card-text">{{ $item->judul_pekerjaan }}</p>
                                <small>{{ $item->lokasi_pekerjaan }}</small><br>
                                @if (Auth::check())
                                    <a href="{{ route('detail-postingan', $item->id) }}" class="btn btn-primary my-2">Detail
                                        Lamaran</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-primary my-2">Detail
                                        Lamaran</a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-6">
                    <h3 class="title">Lowongan Kerja tersimpan</h3>
                    @foreach ($simpan as $item)
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">{{ $item->posting->judul_pekerjaan }}</p>
                                <small>{{ $item->posting->lokasi_pekerjaan }}</small><br>
                                <a href="#" class="btn btn-primary my-2">Detail
                                    Lamaran</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
