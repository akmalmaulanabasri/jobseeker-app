@extends('layout.app')

@section('dashboard')
    <div class="app-content content">
        <div class="card">
            <div class="card-header">
                <h1>{{ $order->jasa }}</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Kolom untuk Teks -->
                    <div class="col-md-8">
                        <div class="mb-3">
                            <strong>Keterangan :</strong>
                            <p>{{ $order->keterangan }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Lokasi :</strong>
                            <p>{{ $order->alamat }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Tanggal :</strong>
                            <p>{{ \Carbon\Carbon::parse($order->tanggal)->format('d F Y') }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Jam :</strong>
                            <p>{{ $order->jam }}</p>
                        </div>
                        <div class="mb-3">
                            <strong>Status :</strong>
                            <p>{{ $order->status }}</p>
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ route('order.index') }}" class="btn btn-secondary">Kembali ke Daftar Pekerjaan</a>
                        </div>
                    </div>
            
                    <div class="col-md-4">
                        <div class="mb-3">
                            <strong>Foto Lahan :</strong>
                            @if ($order->foto_lahan)
                                <div class="text-center mt-2">
                                    <img src="{{ asset('/foto_lahan/' . $order->foto_lahan) }}" alt="Foto Lahan" class="img-fluid">
                                </div>
                            @else
                                <p>Tidak ada foto tersedia.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
