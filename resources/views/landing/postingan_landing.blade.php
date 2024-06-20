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
    <div class="container py-3">
        <div class="row">
            <div
                class="
                @auth col-md-6 @endauth
                @guest col-md-4 @endguest
                ">
                <h3 class=" title">Lowongan Kerja</h3>
                @foreach ($postings as $item)
                    <div class="card my-2">
                        <div class="card-body">
                            <p class="card-text">
                                {{ $item->judul_pekerjaan }}
                                <br />
                                <small>{{ $item->lokasi_pekerjaan }}</small>
                            </p>
                            @if (Auth::check())
                                <a href="{{ route('detail-postingan', $item->id) }}" class="btn btn-primary">Detail
                                    Lamaran</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary">Detail
                                    Lamaran</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            @auth
                <div class="col-md-6">
                    <h3 class="title">Lowongan Kerja tersimpan</h3>
                    @foreach ($simpan as $item)
                        <div class="card my-2">
                            <div class="card-body">
                                <p class="card-text">
                                    {{ $item->posting->judul_pekerjaan }}
                                    <br />
                                    <small>{{ $item->posting->lokasi_pekerjaan }}</small>
                                </p>
                                @if (Auth::check())
                                    <a href="{{ route('detail-postingan', $item->posting->id) }}" class="btn btn-primary">Detail
                                        Lamaran</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-primary">Detail
                                        Lamaran</a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endauth
        </div>
    </div>
@endsection
