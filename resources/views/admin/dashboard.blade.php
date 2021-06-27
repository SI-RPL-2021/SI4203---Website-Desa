@extends('Layout.admin')

@section('title')
    Dashboard
@endsection

@push('styles')

@endpush

@section('content')
    <div class="container pt-5 pb-5">

        <div class="row mb-5">
            <div class="col-md-4 mb-5">
                <div class="card shadow-lg">
                    <div class="card-body pt-3 pb-3">
                        <h1 class="mb-3">
                            <i class="fas fa-user">
                            </i>
                        </h1>
                        <h5 class="font-weight-bold mb-3">Kelola Data Perangkat Desa</h5>
                        <a href="{{ url('/admin/perangkatdesa') }}" class="btn btn-sm btn-warning text-white">Akses
                            Menu</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card shadow-lg">
                    <div class="card-body pt-3 pb-3">
                        <h1 class="mb-3">
                            <i class="fas fa-book">
                            </i>
                        </h1>
                        <h5 class="font-weight-bold mb-3">Kelola Data Desa</h5>
                        <a href="{{ url('/admin/datadesa') }}" class="btn btn-sm btn-warning text-white">Akses
                            Menu</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card shadow-lg">
                    <div class="card-body pt-3 pb-3">
                        <h1 class="mb-3">
                            <i class="fas fa-calendar-alt">
                            </i>
                        </h1>
                        <h5 class="font-weight-bold mb-3">Kelola Data Kegiatan Desa</h5>
                        <a href="{{ url('/admin/kegiatandesa') }}" class="btn btn-sm btn-warning text-white">Akses
                            Menu</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card shadow-lg">
                    <div class="card-body pt-3 pb-3">
                        <h1 class="mb-3">
                            <i class="fas fa-file-invoice-dollar">
                            </i>
                        </h1>
                        <h5 class="font-weight-bold mb-3">Kelola Data Keuangan Desa</h5>
                        <a href="{{ url('/admin/keuangandesa') }}" class="btn btn-sm btn-warning text-white">Akses
                            Menu</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card shadow-lg">
                    <div class="card-body pt-3 pb-3">
                        <h1 class="mb-3">
                            <i class="fas fa-flag"></i>
                        </h1>
                        <h5 class="font-weight-bold mb-3">Reporting</h5>
                        <a href="{{ url('/admin/report') }}" class="btn btn-sm btn-warning text-white">Akses
                            Menu</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card shadow-lg">
                    <div class="card-body pt-3 pb-3">
                        <h1 class="mb-3">
                            <i class="fas fa-bookmark"></i>
                        </h1>
                        <h5 class="font-weight-bold mb-3">Buat Article</h5>
                        <a href="{{ url('/admin/article') }}" class="btn btn-sm btn-warning text-white">Akses
                            Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
