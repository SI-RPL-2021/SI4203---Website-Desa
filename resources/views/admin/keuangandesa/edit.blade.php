@extends('Layout.admin')

@section('title')
    Data Keuangan Desa
@endsection

@push('styles')

@endpush

@section('content')
    <div class="container pt-5 pb-5">
        <div class="card">
            <div class="card-body">
                <h3 class="font-weight-bold">Edit Data Keuangan Desa</h3>

                <form action="{{ url('/admin/keuangandesa') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label class="mb-2" for="file">File Laporan Keuangan</label><br>
                        <input type="file" name="file" class="form-control" id="file">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2" for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" required
                            value="{{ $financeData->judul }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2" for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" required
                            value="{{ $financeData->tanggal }}">
                    </div>


                    <button class="btn btn-success mt-3 w-100">Update Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
