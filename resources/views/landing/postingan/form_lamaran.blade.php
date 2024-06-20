@extends('welcome')

@section('landing')
    <div class="container my-5">
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
                <section id="work-experience">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card shadow-lg border-0 rounded-lg">
                                <div class="card-header bg-dark text-white text-center py-4">
                                    <h4 class="card-title mb-0">Lamaran Kerja</h4>
                                </div>
                                <div class="card-body p-4">
                                    <form id="lamarankerja" action="{{ route('auth-pekerjaan') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="posting_id" value="{{ $posting->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <div class="form-group mb-3">
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                                required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="nomor_telepon">Nomor Telepon</label>
                                            <input type="number" class="form-control" id="nomor_telepon"
                                                name="nomor_telepon" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="pesan_lamaran">Pesan Lamaran</label>
                                            <textarea class="form-control" id="pesan_lamaran" name="pesan_lamaran" rows="4"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-dark w-100">Kirim</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
