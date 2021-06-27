@extends('Layout.admin')

@section('title')
    Data Desa
@endsection

@push('styles')

@endpush

@section('content')
    <div class="container pt-5 pb-5">
        <div class="card">
            <div class="card-body">
                <h3 class="font-weight-bold">Data Desa</h3>

                <form action="{{ url('/admin/datadesa/' . $dataDesa->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label class="mb-2" for="jumlah_penduduk">Jumlah Penduduk</label>
                        <input type="text" name="jumlah_penduduk" class="form-control" id="jumlah_penduduk"
                            value="{{ $dataDesa->jumlah_penduduk }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2" for="jumlah_kk">Jumlah KK</label>
                        <input type="text" name="jumlah_kk" class="form-control" id="jumlah_kk"
                            value="{{ $dataDesa->jumlah_kk }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2" for="jumlah_penduduk_laki">Jumlah Penduduk Laki-Laki</label>
                        <input type="text" name="jumlah_penduduk_laki" class="form-control" id="jumlah_penduduk_laki"
                            value="{{ $dataDesa->jumlah_penduduk_laki }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2" for="jumlah_penduduk_wanita">Jumlah Penduduk Perempuan</label>
                        <input type="text" name="jumlah_penduduk_wanita" class="form-control" id="jumlah_penduduk_wanita"
                            value="{{ $dataDesa->jumlah_penduduk_wanita }}">
                    </div>

                    <div class="form-group mb-3">
                        <label class="mb-2" for="luas_area">Luas Area</label>
                        <input type="text" name="luas_area" class="form-control" id="luas_area"
                            value="{{ $dataDesa->luas_area }}">
                    </div>
                    <button class="btn btn-success mt-3 w-100">Edit Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
