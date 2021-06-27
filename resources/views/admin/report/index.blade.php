@extends('Layout.admin')

@section('title')
    report
@endsection

@push('styles')

@endpush

@section('content')
    <div class="container pt-5 pb-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <h3 class="font-weight-bold">Report Surat Menyurat</h3>
                </div>

                <div class="row">
                    <div class="col-3">
                        <p>Aspirasi</p>
                    </div>
                    <div class="col-9">
                        : {{ $report->aspirasi }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p>Pengaduan</p>
                    </div>
                    <div class="col-9">
                        : {{ $report->pengaduan }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p>Kesehatan</p>
                    </div>
                    <div class="col-9">
                        : {{ $report->kesehatan }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p>Surat Online</p>
                    </div>
                    <div class="col-9">
                        : {{ $report->suratonline }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
