@extends('layout.app')

@section('dashboard')
    @if (Auth::user()->role == 'user')
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
                <div id="landing">
                    <div class="row">
                        @foreach ($postings as $item)
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        <h4 class="card-title mb-0">{{ $item->judul_pekerjaan }}</h4>
                                    </div>
                                    <div class="card-body mt-3">
                                        <div class="mb-3">
                                            <h5 class="card-subtitle">Lokasi</h5>
                                            <p class="card-text">{{ $item->lokasi_pekerjaan }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <h5 class="card-subtitle">Jenis Pekerjaan</h5>
                                            <p class="card-text">{{ $item->jenis_pekerjaan }}</p>
                                        </div>
                                        <div class="mb-3">
                                            <h5 class="card-subtitle">Syarat</h5>
                                            <ul class="list-unstyled">
                                                <li>{{ $item->persyaratan_dan_kualifikasi }}</li>
                                            </ul>
                                        </div>
                                        <form action="{{ route('show-pekerjaan', $item->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Detail Lamaran</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- Tambahkan card lainnya sesuai dengan kebutuhan -->
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
