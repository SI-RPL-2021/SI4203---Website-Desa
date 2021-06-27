@extends('Layout.admin')

@section('title')
    Data Kegiatan
@endsection

@push('styles')

@endpush

@section('content')
    <div class="container pt-5 pb-5">
        <div class="card">
            <div class="card-body">
                <h3 class="font-weight-bold">Tambah Data Kegiatan Desa</h3>

                <form action="{{ url('/admin/kegiatandesa') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3 mt-5">
                        <label class="mb-2" for="image">Gambar Kegiatan</label><br>
                        <input type="file" name="image" class="form-control-file" id="image">
                    </div>
                    <hr>
                    <div class="form-group mb-3">
                        <label class="mb-2" for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2" for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2" for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2" for="waktu">Waktu</label>
                        <input type="time" name="waktu" class="form-control" id="waktu">
                    </div>

                    <div class="form-group mb-3">
                        <label class="mb-2" for="lembaga">Lembaga</label>
                        <select name="lembaga" id="lembaga" class="form-control">
                            <option value="LPM">LPM</option>
                            <option value="PKK">PKK</option>
                            <option value="Karang Taruna">Karang Taruna</option>
                        </select>
                    </div>



                    <button class="btn btn-success mt-3 w-100">Tambahkan Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
