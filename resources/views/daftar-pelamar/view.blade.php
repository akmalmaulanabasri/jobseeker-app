@extends('layout.app')

@section('dashboard')
    @if (Auth::user()->role == 'recruiter')
        <div class="app-content content">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h1>Daftar Pelamar</h1>
            </div>
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
                        @foreach ($lamarans as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->nomor_telepon }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->pesan_lamaran }}</td>
                                <td>
                                    {{-- @if (!$item->is_paid)
                                <a class="btn btn-danger btn-sm">Bayar</a>
                                @endif --}}
                                    <a href="{{ route('review', $item->id) }}" class="btn btn-success btn-sm">Review</a>
                                    {{-- <a href="{{ route('posting.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('posting.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
