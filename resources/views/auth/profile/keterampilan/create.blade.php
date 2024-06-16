@extends('layout.app')

@section('dashboard')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <section id="skills">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Keahlian dan Keterampilan</h4>
                            </div>
                            <div class="card-body">
                                <form id="skills-form" action="{{ route('skill') }}" method="POST">
                                    @csrf
                                    <div id="skills-container">
                                        <div class="skill-entry mb-2">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="skill_name">Nama Keahlian</label>
                                                    <input type="text" class="form-control" name="title"
                                                        required>
                                                </div>
                                                {{-- <div class="col-md-6">
                                                <label for="proficiency_level">Tingkat Keahlian</label>
                                                <input type="text" class="form-control"
                                                    name="proficiency_level[]" required>
                                            </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-secondary mt-2"
                                        id="add-skill-btn">Tambah Keahlian</button>
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
