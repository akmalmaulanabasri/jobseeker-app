@extends('welcome')

@section('landing')
    <div class="container-fluid bg-custom">
        <div class="search-container">
            <div class="row text-center p-5">
                <div class="col-md-6 offset-md-3">
                    <form action="{{ route('cari-lowongan') }}" method="GET" class="d-flex">
                        <input type="text" class="form-control me-2" name="search" placeholder="Cari Lowongan"
                            value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-5 py-3">
        <div class="row">
            <h3 class="title">Lowongan Kerja</h3>
            @foreach ($postings as $item)
                <div class="col-md-3 my-2">
                    <div class="card my-2">
                        <div class="card-body">
                            <p class="card-text">{{ $item->judul_pekerjaan }}</p>
                            <small>{{ $item->lokasi_pekerjaan }}</small><br>
                            @if (Auth::check())
                                <a href="{{ route('detail-postingan', $item->id) }}" class="btn btn-dark my-2">Detail
                                    Lamaran</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-dark my-2">Detail Lamaran</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- <div class="col-md-6">
                    <h3 class="title">Lowongan Kerja tersimpan</h3>
                    @foreach ($simpan as $item)
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">{{ $item->posting->judul_pekerjaan }}</p>
                                <small>{{ $item->posting->lokasi_pekerjaan }}</small><br>
                                @if (Auth::check())
                                    <a href="{{ route('detail-postingan', $item->posting_id) }}" class="btn btn-primary my-2">Detail
                                        Lamaran</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-primary my-2">Detail
                                        Lamaran</a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div> --}}
        {{-- </div>
        </div> --}}
    </div>
@endsection
