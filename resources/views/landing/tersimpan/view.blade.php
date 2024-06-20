@extends('welcome')

@section('landing')
    <div class="container-fluid px-5 py-3">
        <div class="row">
            <h3 class="title">Lowongan Disimpan</h3>
            @foreach ($simpanLamaran as $item)
                <div class="col-md-3 my-2">
                    <div class="card my-2 position-relative">
                        <form action="{{ route('simpan-lamaran-delete', $item->id) }}" method="POST"
                            class="position-absolute top-0 end-0 m-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-close" aria-label="Close"></button>
                        </form>
                        <div class="card-body">
                            <p class="card-text">{{ $item->posting->judul_pekerjaan }}</p>
                            <small>{{ $item->posting->lokasi_pekerjaan }}</small><br>
                            @if (Auth::check())
                                <a href="{{ route('detail-postingan', $item->posting->id) }}"
                                    class="btn btn-dark my-2">Detail Lamaran</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-dark my-2">Detail Lamaran</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
