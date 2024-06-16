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

                                <h4 class="card-title">Pengalaman Kerja</h4>
                            </div>
                            <div class="card-body">
                                <form id="work-experience-form" action="{{ route('pengalaman-kerja') }}" method="POST">
                                    @csrf
                                    <div id="work-experience-container">
                                        <div class="work-experience-entry mb-2">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="company_name">Nama Perusahaan</label>
                                                    <input type="text" class="form-control" name="company_name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="job_title">Posisi</label>
                                                    <input type="text" class="form-control" name="position" required>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <label for="start_date">Tanggal Mulai</label>
                                                    <input type="date" class="form-control" name="start_date" required>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <label for="end_date">Tanggal Selesai</label>
                                                    <input type="date" class="form-control" name="end_date">
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <label for="job_description">Deskripsi Pekerjaan</label>
                                                    <textarea class="form-control" name="description" rows="2" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
