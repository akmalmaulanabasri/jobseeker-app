@extends('layout.app')

@section('dashboard')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <section id="work-experience">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">

                                <h4 class="card-title">Lamaran Kerja</h4>
                            </div>
                            <div class="card-body">
                                <form id="lamarankerja" action="{{ route('auth-pekerjaan') }}" method="POST">
                                    @csrf
                                    <div id="lamarankerja">
                                        <div class="work-experience-entry mb-2">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="company_name">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="nama_lengkap" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="job_title">Nomor Telpon</label>
                                                    <input type="number" class="form-control" name="nomor_telpon" required>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" name="email" required>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <label for="end_date">Pesan Lamaran</label>
                                                    <input type="text" class="form-control" name="pesan_lamaran">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
