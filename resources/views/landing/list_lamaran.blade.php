@extends('welcome')

@section('landing')
    <div class="container">
        @if (Auth::user()->role == 'user')
            <div class="app-content content">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h1>Lamaran Kerja</h1>
                </div>
                @if (Session::has('success'))
                    <div class="alert alert-warning alert-dismissible fade show p-2" role="alert">
                        <strong>Silahkan</strong> melakukan pembayaran untuk lamaran lebih lanjut.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Nomor Telepon</th>
                                <th>Email</th>
                                <th>Pesan Lamaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listLamarans as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_lengkap }}</td>
                                    <td>{{ $item->nomor_telepon }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->pesan_lamaran }}</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm">Bayar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
