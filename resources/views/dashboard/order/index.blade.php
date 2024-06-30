@extends('layout.app')

@section('dashboard')
    <div class="app-content content">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h1>Daftar Pekerjaan</h1>
            <a href="{{ route('order.create') }}" class="btn btn-primary">Tambah Pekerjaan Baru</a>
        </div>


        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Luas Lahan</th>
                                <th>Alamat</th>
                                <th>Jasa</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @empty($orders)
                                <tr>
                                    <td colspan="6">
                                        <div class="d-flex justify-content-center">
                                            <div class="alert bg-danger text-center px-3 py-2">
                                                <h5>Anda belum menawarkan pekerjaan apapun</h5>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endempty
                            @foreach ($orders as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->luas_lahan }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->jasa }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>
                                        @if (!$item->is_paid)
                                            <a href="{{ route('order.bayar', $item->id) }}"
                                                class="btn btn-danger btn-sm">Bayar</a>
                                        @endif
                                        <a href="{{ route('order.show', $item->id) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                        <a href="{{ route('order.edit', $item->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('order.destroy', $item->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                        <a href="{{ route('pelamar', $item->id) }}"
                                            class="btn btn-warning btn-sm">Pelamar</a>
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
