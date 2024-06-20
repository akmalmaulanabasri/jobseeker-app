@extends('welcome')

@section('landing')
    <div class="container my-4 ">
        <div id="landing">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-sm border-0 rounded-lg">
                        <div class="card-header bg-dark text-white text-center py-3">
                            <h4 class="card-title mb-0">{{ $posting->judul_pekerjaan }}</h4>
                        </div>
                        <div class="card-body p-4">
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <h5 class="card-subtitle mb-2">Lokasi</h5>
                                    <p class="card-text">{{ $posting->lokasi_pekerjaan }}</p>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="card-subtitle mb-2">Jenis Pekerjaan</h5>
                                    <p class="card-text">{{ $posting->jenis_pekerjaan }}</p>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="card-subtitle mb-2">Gaji</h5>
                                    <p class="card-text">{{ $posting->gaji }}</p>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <h5 class="card-subtitle mb-2">Persyaratan dan Kualifikasi</h5>
                                    <ul class="list-unstyled">
                                        <li>{{ $posting->persyaratan_dan_kualifikasi }}</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-subtitle mb-2">Cara Menghubungi</h5>
                                    <p class="card-text">{{ $posting->cara_menghubungi }}</p>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h5 class="card-subtitle mb-2">Deskripsi Pekerjaan</h5>
                                <p class="card-text">{{ $posting->deskripsi_pekerjaan }}</p>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-md-3 mb-2">
                                    <a href="{{ route('create-lamaran', $posting->id) }}"
                                        class="btn btn-outline-dark w-100">Lamar Pekerjaan</a>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <form action="{{ route('simpan-lamaran') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="posting_id" value="{{ $posting->id }}">
                                        <button type="submit" class="btn btn-outline-dark w-100">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card-footer bg-dark text-white text-center py-2">
                            <small>&copy; 2024 Your Company</small>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
