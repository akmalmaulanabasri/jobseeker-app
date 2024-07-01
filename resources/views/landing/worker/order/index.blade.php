@extends('layout.landing')

@section('landing')
    <div class="container-fluid bg-custom">
        <div class="search-container">
            <div class="row text-center p-5">
                <div class="col-md-6 offset-md-3">
                    <h1 class="text-white">E-FARMER</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-5 py-3">
        <h3 class="title">Pesan</h3>
        <div class="row">
            <div class="col-md-3 my-2">
                <div class="card my-2">
                    <img src="{{ asset('storage/image/' . $worker->profile_picture) }}" class="square" alt="...">
                    <div class="card-body">
                        <a class="h2 text-decoration-none" href="/profile-farmer/{{ $worker->id }}">{{ $worker->name }}</a>
                        <br>
                        <small>{{ $worker->address }}</small><br>
                    </div>
                </div>
            </div>
            <div class="col-md-9 my-2">
                <div class="card my-2">
                    <div class="card-body">
                        <h3 class="card-text">Silahkan isi formulir pesanan</h3>

                        <form method="POST" action="{{ route('pesan-pekerja', $id) }}" class="form-group mt-3"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-2
                            ">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control">
                            </div>

                            <div class="form-group mt-2
                            ">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control">
                            </div>

                            <div class="form-group mt-2
                            ">
                                <label for="luas">Luas lahan</label>
                                <input type="number" placeholder="Meter persegi" name="luas" id="luas"
                                    class="form-control">
                            </div>

                            <div class="form-group mt-2
                            ">
                                <label for="foto_lahan">Upload foto lahan</label>
                                <input type="file" name="foto_lahan" id="foto_lahan" class="form-control">
                            </div>

                            <div class="form-group mt-2
                            ">
                                <label for="jasa">Jasa</label>
                                <select name="jasa" id="jasa" class="form-control">
                                    <option value="">Pilih jasa</option>
                                    @foreach ($jasa as $item)
                                        <option value="{{ $item['nama'] }}">{{ $item['nama'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mt-2
                            ">
                                <label for="jam">Jam</label>
                                <input type="time" name="jam" id="jam" class="form-control">
                            </div>

                            <div class="form-group mt-2
                            ">
                                <label for="keterangan">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
                            </div>

                            <button type="submit" class="btn btn-app mt-3">Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
