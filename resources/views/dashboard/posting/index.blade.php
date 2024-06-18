@extends('layout.app')

@section('dashboard')
    <div class="app-content content">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Daftar Pekerjaan</h1>
            <a href="{{ route('posting.create') }}" class="btn btn-primary">Tambah Pekerjaan Baru</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Lokasi</th>
                        <th>Gaji</th>
                        <th>Jenis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($postings as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->judul_pekerjaan }}</td>
                            <td>{{ $item->lokasi_pekerjaan }}</td>
                            <td>{{ $item->gaji }}</td>
                            <td>{{ $item->jenis_pekerjaan }}</td>
                            <td>
                                @if (!$item->is_paid)
                                    <a class="btn btn-danger btn-sm">Bayar</a>
                                @endif
                                <a href="{{ route('posting.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ route('posting.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('posting.destroy', $item->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                                <a href="{{ route('pelamar', $item->id) }}" class="btn btn-warning btn-sm">Pelamar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
