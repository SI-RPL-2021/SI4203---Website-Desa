@extends('Layout.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Sampaikan Pengaduan Anda Pada Desa</h2>
        </div>
        <div class="pull-right mb-2">
            <a class="btn btn-primary" href="{{ route('pengaduan.index') }}"> Back</a>
        </div>
    </div>
</div>

<!-- @if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif -->

<form action="{{ route('pengaduan.store') }}" method="POST">
    @csrf

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama :</strong>
                <input type="text" name="Nama" id="Nama" class="form-control" value="{{ Auth::user()->name }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Masalah :</strong>
                <input type="text" name="masalah" id="masalah" class="form-control" value=" ">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bukti Pengaduan :</strong>
                <!-- <textarea class="form-control" style="height:150px" name="masalah" id="masalah"
                    placeholder=" "></textarea> -->
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan Pengaduan :</strong>
                <textarea class="form-control" style="height:150px" name="keterangan" id="keterangan"
                    placeholder=" "></textarea>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection