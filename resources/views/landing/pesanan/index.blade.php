@extends('layout.landing')

@section('landing')
    <div class="container">
        @if (Auth::user()->role == 'user')
            <div class="app-content content">
                <div class="jumbotron py-3">
                    <h1 class="display-5">Daftar Lamaran Kerja</h1>
                    @if (Session::has('success'))
                        <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                            <strong>Sukses!</strong> {{ Session::get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>

                <div class="card shadow">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Luas Lahan</th>
                                        <th>Alamat</th>
                                        <th>Jasa</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->luas_lahan }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->jasa }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->keterangan }}</td>
                                            <td>
                                                @if (!$item->is_paid)
                                                    <a id="pay-button" class="btn btn-success btn-sm">Bayar</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <x-snap snapToken={{ $snapToken }} />
@endsection
