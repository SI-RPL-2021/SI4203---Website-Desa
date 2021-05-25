@extends('Layout.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Lihat Detail </h2>
        </div>
        <div class="pull-right mb-3">
            <a class="btn btn-primary" href="{{ route('aspirasi.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama :</strong>
            {{ $aspirasi->Nama }}
        </div>
        <hr>
        <div class="form-group">
            <strong>Deskripsi :</strong>
            {{ $aspirasi->Deskripsi }}
        </div>
    </div>
    @endsection