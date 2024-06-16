@extends('layout.app')

@section('dashboard')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Profile</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <div id="user-profile">
                    <!-- profile header -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card profile-header mb-2">
                                <!-- profile cover photo -->
                                <img class="card-img-top" src="../../../app-assets/images/profile/user-uploads/timeline.jpg"
                                    alt="User Profile Image" />
                                <!--/ profile cover photo -->

                                <div class="position-relative">
                                    <!-- profile picture -->
                                    <div class="profile-img-container d-flex align-items-center">
                                        <div class="profile-img">
                                            @if ($user->profile_picture == null)
                                                <img src="{{ asset('assets/image/profile.jpg') }}" class="rounded img-fluid"
                                                    alt="Card image" width="200" />
                                            @else
                                                <img src="{{ asset('/storage/image/' . $user->profile_picture) }}"
                                                    class="rounded img-fluid" alt="Card image" width="200" />
                                            @endif
                                        </div>
                                        <!-- profile title -->
                                        <div class="profile-title ms-3">
                                            <h2 class="text-white">{{ $user->name }}</h2>
                                            <p class="text-white">{{ $user->role }}</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- tabs pill -->
                                <div class="profile-header-nav">
                                    <!-- navbar -->
                                    <nav
                                        class="navbar navbar-expand-md navbar-light justify-content-end justify-content-md-between w-100">
                                        <button class="btn btn-icon navbar-toggler" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <i data-feather="align-justify" class="font-medium-5"></i>
                                        </button>

                                        <!-- collapse  -->
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <div class="profile-tabs d-flex justify-content-between flex-wrap mt-1 mt-md-0">
                                                <!-- edit button -->
                                                <form action="{{ route('edit-profile', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('patch')
                                                    <button class="btn btn-primary">
                                                        <i data-feather="edit" class="d-block d-md-none"></i>
                                                        <span class="fw-bold d-none d-md-block">Edit</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--/ collapse  -->
                                    </nav>
                                    <!--/ navbar -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ profile header -->

                    <!-- profile info section -->
                    <section id="profile-info">
                        <div class="row">
                            <!-- left profile info section -->
                            <div class="col-lg-4 col-12 order-2 order-lg-4">
                                <!-- about -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mt-2">
                                            <h5 class="mb-75">Nama Lengkap:</h5>
                                            <p class="card-text">{{ $user->name }}</p>
                                        </div>
                                        <div class="mt-2">
                                            <h5 class="mb-75">Email:</h5>
                                            <p class="card-text">{{ $user->email }}</p>
                                        </div>
                                        <div class="mt-2">
                                            <h5 class="mb-75">Nomor Handphone:</h5>
                                            <p class="card-text">{{ $user->phone }}</p>
                                        </div>
                                        <div class="mt-2">
                                            <h5 class="mb-75">Alamat:</h5>
                                            <p class="card-text">{{ $user->address }}</p>
                                        </div>
                                        <div class="mt-2">
                                            <h5 class="mb-50">Deskripsi:</h5>
                                            <p class="card-text mb-0">{{ $user->description }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/ about -->
                            </div>
                            <!--/ left profile info section -->
                        </div>
                    </section>

                    @if (Auth::user()->role == 'user')
                        <!-- Work Experience section -->
                        <section id="work-experience">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">

                                            <h4 class="card-title">Pengalaman Kerja</h4>
                                        </div>
                                        <div class="card-body">
                                            <form id="work-experience-form" action="{{ route('pengalaman-kerja') }}"
                                                method="POST">
                                                @csrf
                                                <div id="work-experience-container">
                                                    <div class="work-experience-entry mb-2">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="company_name">Nama Perusahaan</label>
                                                                <input type="text" class="form-control"
                                                                    name="company_name" required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="job_title">Posisi</label>
                                                                <input type="text" class="form-control" name="position"
                                                                    required>
                                                            </div>
                                                            <div class="col-md-6 mt-2">
                                                                <label for="start_date">Tanggal Mulai</label>
                                                                <input type="date" class="form-control"
                                                                    name="start_date" required>
                                                            </div>
                                                            <div class="col-md-6 mt-2">
                                                                <label for="end_date">Tanggal Selesai</label>
                                                                <input type="date" class="form-control"
                                                                    name="end_date">
                                                            </div>
                                                            <div class="col-md-12 mt-2">
                                                                <label for="job_description">Deskripsi Pekerjaan</label>
                                                                <textarea class="form-control" name="description" rows="2" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-secondary mt-2"
                                                    id="add-work-experience-btn">Tambah Pengalaman Kerja</button>
                                                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Skills section -->
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
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
