@extends('Layout.master')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Buat Surat Sehat</h2>
        </div>
        <div class="pull-right mb-2">
            <a class="btn btn-primary" href="{{ route('suratonline.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('suratonline.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <strong>No Identitas :</strong>
                <input type="text" name="NoIdentitas" id="NoIdentitas" class="form-control" value="{{ Auth::user()->NoIdentitas }}">
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <strong>Nama :</strong>
                <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <strong>Email :</strong>
                <input type="text" name="email" id="email" class="form-control" value="{{ Auth::user()->email }}">
            </div>
        </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>No HP :</strong>
                    <input type="text" name="NoHP" id="NoHP" class="form-control" placeholder="08XXXX">
                </div>
            </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <Strong>Jenis Surat :</Strong>
                    <select name="jenis" id="jenis" class="form-control">
                        <Strong>Jenis Surat :</Strong>
                        <option value="" hidden selected>-- Pilih Surat --</option>
                        <option value="SuratKeteranganTidakMampu">Surat Keterangan Tidak Mampu</option>
                        <option value="SuratPenunjangKTP/SIM"> Surat Penunjang KTP/SIM</option>
                        <option value="SuratKeteranganKematian"> Surat Keterangan Kematian</option>
                        <option value="SuratKelahiran"> Surat Kelahiran</option>
                    </select>
                    </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat :</strong>
                <input type="text" name="Alamat" id="Alamat" class="form-control" placeholder="Jl. XXXXXX">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pesan :</strong>
                <textarea class="form-control" style="height:150px" name="pesan" id="pesan" placeholder="Pesan"></textarea>
            </div>
        </div>      

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection