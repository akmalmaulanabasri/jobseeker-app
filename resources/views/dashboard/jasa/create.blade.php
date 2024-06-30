@extends('layout.app')

@section('dashboard')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-fluid p-0">
            <div class="card">
                <div class="card-body">
                    <h1>Tambah jasa baru</h1>

                    <form action="{{ route('jasa.store') }}" method="post" class="form-group mt-3">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga">
                        </div>

                        <div class="mb-3">
                            <label for="biaya_admin" class="form-label">Biaya Admin</label>
                            <input type="number" class="form-control" id="biaya_admin" name="biaya_admin">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
