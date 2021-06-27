@extends('Layout.admin')

@section('title')
    Data Perangkat Desa
@endsection

@push('styles')

@endpush

@section('content')
    <div class="container pt-5 pb-5">
        <div class="card">
            <div class="card-body">
                <h3 class="font-weight-bold">Edit Perangkat Desa</h3>

                <form action="{{ url('/admin/perangkatdesa/' . $perangkatDesa->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class ="form-group mb-3">
                        <label for="image">Foto</label>
                        <input type="file" name="image" id="image">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2" for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $perangkatDesa->nama }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2" for="nip">Nip</label>
                        <input type="text" name="nip" class="form-control" id="nip" value="{{ $perangkatDesa->nip }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2" for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" id="jabatan"
                            value="{{ $perangkatDesa->jabatan }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2" for="telepon">No.Telepon</label>
                        <input type="text" name="telepon" class="form-control" id="telepon"
                            value="{{ $perangkatDesa->telepon }}">
                    </div>

                    <button class="btn btn-success mt-3 w-100">Edit Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
