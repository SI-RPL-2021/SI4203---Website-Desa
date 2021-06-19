@extends('Layout.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Lihat Detail </h2>
        </div>
        <div class="pull-right mb-3">
            <a class="btn btn-primary" href="{{ route('pengaduan.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama :</strong>
            {{ $pengaduan->Nama }}
        </div>
        <hr>
        <div class="form-group">
            <strong>Jenis Masalah :</strong>
            {{ $pengaduan->masalah }}
        </div>
        <hr>
        <div class="form-group">
            <strong>Bukti Pengaduan :</strong>
            {{ $pengaduan->bukti }}
        </div>
        <hr>
        <div class="form-group">
            <strong>Keterangan Pengaduan :</strong>
            {{ $pengaduan->keterangan }}
        </div>
    </div>
    @endsection