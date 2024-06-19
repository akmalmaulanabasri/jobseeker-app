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
                                <h4 class="card-title">Penilaian Pekerja</h4>
                            </div>
                            <div class="card-body">
                                <form id="lamarankerja" action="{{ route('create-review') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="lamaran_id" value="{{ $lamaran->id }}">
                                    {{-- @dd($posting->id) --}}
                                    <div id="lamarankerja">
                                        <div class="work-experience-entry mb-2">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="company_name">Nama Lengkap</label>
                                                    <textarea type="text" class="form-control" name="comment" required></textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <label for="rating">Rating</label>
                                                    <div class="form-check mx-1 form-check-inline">
                                                        <input type="radio" id="rating1" name="rating" value="1"
                                                            class="form-check-input" required>
                                                        <label for="rating1" class="form-check-label">1</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="rating2" name="rating" value="2"
                                                            class="form-check-input">
                                                        <label for="rating2" class="form-check-label">2</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="rating3" name="rating" value="3"
                                                            class="form-check-input">
                                                        <label for="rating3" class="form-check-label">3</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="rating4" name="rating" value="4"
                                                            class="form-check-input">
                                                        <label for="rating4" class="form-check-label">4</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" id="rating5" name="rating" value="5"
                                                            class="form-check-input">
                                                        <label for="rating5" class="form-check-label">5</label>
                                                    </div>
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
