@extends('Layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Lihat Detail </h2>
            </div>
            <div class="pull-right mb-3">
                <a class="btn btn-primary" href="{{ route('kesehatan.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Identitas :</strong>
                {{ $kesehatan->NoIdentitas }}
            </div>
            <hr>
            <div class="form-group">
                <strong>Nama :</strong>
                {{ $kesehatan->name }}
            </div>
            <hr>
            <div class="form-group">
                <strong>Nommor HP:</strong>
                {{ $kesehatan->noHP }}
            </div>
            <hr>
            <div class="form-group">
                <strong>Alamat:</strong>
                {{ $kesehatan->Alamat }}
            </div>
            <hr>
            <div class="form-group">
                <strong>Detail Keluhan:</strong>
                {{ $kesehatan->Keluhan }}
            </div>
        </div>
@endsection