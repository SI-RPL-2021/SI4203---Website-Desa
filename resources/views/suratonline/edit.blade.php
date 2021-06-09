@extends('Layout.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Surat Surat Online</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('suratonline.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada masalah penginputan<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('suratonline.update',$suratonline->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>No Identitas :</strong>
                        <input type="text" name="NoIdentitas" id="NoIdentitas" class="form-control" value="{{ Auth::user()->NoIdentitas }}">
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama :</strong>
                        <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}">
                    </div>
                </div>
        
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>No. HP :</strong>
                        <input type="text" name="NoHP" id="NoHP" class="form-control" placeholder="08XXXXXXXXX">
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
                        <strong>Keterangan Keluhan :</strong>
                        <textarea class="form-control" style="height:150px" name="Keluhan" id="Keluhan" placeholder="Apa keluhan yang anda rasakan"></textarea>
                    </div>
                </div>      
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection 