@extends('welcome')

@section('landing')
    <div class="container my-3">
        <div id="landing">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h4 class="card-title mb-0">{{ $posting->judul_pekerjaan }}</h4>
                        </div>
                        <div class="card-body mt-3">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <h5 class="card-subtitle">Lokasi</h5>
                                    <p class="card-text">{{ $posting->lokasi_pekerjaan }}</p>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="card-subtitle">Jenis Pekerjaan</h5>
                                    <p class="card-text">{{ $posting->jenis_pekerjaan }}</p>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="card-subtitle">Gaji</h5>
                                    <p class="card-text">{{ $posting->gaji }}</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <h5 class="card-subtitle">Persyaratan dan Kualifikasi</h5>
                                    <ul class="list-unstyled">
                                        <li>{{ $posting->persyaratan_dan_kualifikasi }}</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-subtitle">Cara Menghubungi</h5>
                                    <p class="card-text">{{ $posting->cara_menghubungi }}</p>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h5 class="card-subtitle">Deskripsi Pekerjaan</h5>
                                <p class="card-text">{{ $posting->deskripsi_pekerjaan }}</p>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <a href="{{ route('create-lamaran', $posting->id) }}" class="btn btn-primary ">Lamar
                                        Pekerjaan</a>
                                </div>
                                <div class="col-md-2">
                                    {{-- <a href="#" class="btn btn-primary">Simpan</a> --}}
                                    <form action="{{ route('simpan-lamaran') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="posting_id" value="{{ $posting->id }}">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan card lainnya sesuai dengan kebutuhan -->
            </div>
        </div>
    </div>
@endsection
