@extends('Layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Lihat Detail </h2>
            </div>
            <div class="pull-right mb-3">
                <a class="btn btn-primary" href="{{ route('suratonline.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Identitas :</strong>
                {{ $suratonline->NoIdentitas }}
            </div>
            <hr>
            <div class="form-group">
                <strong>Nama :</strong>
                {{ $suratonline->name }}
            </div>
            <hr>
            <div class="form-group">
                <strong>Nommor HP:</strong>
                {{ $suratonline->noHP }}
            </div>
            <hr>
            <div class="form-group">
                <strong>Alamat:</strong>
                {{ $suratonline->Alamat }}
            </div>
            <hr>
            <div class="form-group">
                <strong>Detail Keluhan:</strong>
                {{ $suratonline->Keluhan }}
            </div>
        </div>
@endsection