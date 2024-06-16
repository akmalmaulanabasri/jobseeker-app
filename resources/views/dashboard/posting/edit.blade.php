@extends('layout.app')

@section('dashboard')
    <div class="app-content content">
        <h1>Edit Pekerjaan</h1>

        <form action="{{ route('posting.update', $posting->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul_pekerjaan" class="form-label">Judul Pekerjaan</label>
                <input type="text" class="form-control" id="judul_pekerjaan" name="judul_pekerjaan"
                    value="{{ $posting->judul_pekerjaan }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_pekerjaan" class="form-label">Deskripsi Pekerjaan</label>
                <textarea class="form-control" id="deskripsi_pekerjaan" name="deskripsi_pekerjaan" rows="3" required>{{ $posting->deskripsi_pekerjaan }}</textarea>
            </div>
            <div class="mb-3">
                <label for="lokasi_pekerjaan" class="form-label">Lokasi Pekerjaan</label>
                <input type="text" class="form-control" id="lokasi_pekerjaan" name="lokasi_pekerjaan"
                    value="{{ $posting->lokasi_pekerjaan }}" required>
            </div>
            <div class="mb-3">
                <label for="gaji" class="form-label">Gaji</label>
                <input type="number" step="0.01" class="form-control" id="gaji" name="gaji" value="{{ $posting->gaji }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                    value="{{ $posting->tanggal_mulai }}" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai"
                    value="{{ $posting->tanggal_selesai }}">
            </div>
            <div class="mb-3">
                <label for="persyaratan_dan_kualifikasi" class="form-label">Persyaratan dan Kualifikasi</label>
                <textarea class="form-control" id="persyaratan_dan_kualifikasi" name="persyaratan_dan_kualifikasi" rows="3"
                    required>{{ $posting->persyaratan_dan_kualifikasi }}</textarea>
            </div>
            <div class="mb-3">
                <label for="jenis_pekerjaan" class="form-label">Jenis Pekerjaan</label>
                <select class="form-select" id="jenis_pekerjaan" name="jenis_pekerjaan" required>
                    <option value="kontrak" {{ $posting->jenis_pekerjaan == 'kontrak' ? 'selected' : '' }}>Kontrak</option>
                    <option value="part time" {{ $posting->jenis_pekerjaan == 'part time' ? 'selected' : '' }}>Part Time
                    </option>
                    <option value="full time" {{ $posting->jenis_pekerjaan == 'full time' ? 'selected' : '' }}>Full Time
                    </option>
                </select>
            </div>
            <div class="mb-3">
                <label for="cara_menghubungi" class="form-label">Cara Menghubungi</label>
                <input type="text" class="form-control" id="cara_menghubungi" name="cara_menghubungi"
                    value="{{ $posting->cara_menghubungi }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
@endsection
