@extends('layout.app')

@section('dashboard')
    <div class="app-content content">
        <div class="card">
            <div class="card-header">
                <h1>{{ $posting->judul_pekerjaan }}</h1>
            </div>
            <div class="card-body">
                <p>{{ $posting->deskripsi_pekerjaan }}</p>
                <p>Lokasi: {{ $posting->lokasi_pekerjaan }}</p>
                <p>Gaji: Rp. {{ number_format($posting->gaji, 0, ',', '.') }}</p>
                <p>Tanggal Mulai: {{ $posting->tanggal_mulai }}</p>
                <p>Tanggal Selesai: {{ $posting->tanggal_selesai ? $posting->tanggal_selesai : 'Tidak Ditentukan' }}</p>
                <p>Persyaratan dan Kualifikasi: {{ $posting->persyaratan_dan_kualifikasi }}</p>
                <p>Jenis Pekerjaan: {{ $posting->jenis_pekerjaan }}</p>
                <p>Cara Menghubungi: {{ $posting->cara_menghubungi }}</p>
                <a href="{{ route('posting.index') }}" class="btn btn-secondary">Kembali ke Daftar Pekerjaan</a>
            </div>
        </div>
    </div>
@endsection
