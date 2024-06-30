@extends('layout.app')

@section('dashboard')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-fluid p-0">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items center">
                        <h1>Daftar jasa</h1>
                        <a href="{{ route('jasa.create') }}" class="btn btn-primary">Tambah</a>
                    </div>

                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Biaya Admin</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jasa as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->nama }}</td>
                                    <td>Rp{{ number_format($item->harga, 2) }} Permeter persegi</td>
                                    <td>
                                        {{ $item->biaya_admin }}%
                                        (Rp{{ number_format(($item->harga * $item->biaya_admin) / 100, 2) }} Permeter
                                        persegi)
                                    </td>
                                    <td>
                                        <a href="{{ route('jasa.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('jasa.destroy', $item->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
