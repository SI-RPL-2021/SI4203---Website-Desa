@extends('Layout.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Layanan Desa Pengajuan Surat Kesehatan</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('kesehatan.create') }}"> Buat Data</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>No Identitas</th>
            <th>Name</th>
            <th>Nomor HP</th>
            <th>Alamat</th>
            <th>Keluhan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kesehatan as $kesehatan)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $kesehatan->NoIdentitas }}</td>
            <td>{{ $kesehatan->name }}</td>
            <td>{{ $kesehatan->NoHP }}</td>
            <td>{{ $kesehatan->Alamat }}</td>
            <td>{{ $kesehatan->Keluhan }}</td>
            <td>
                <form action="{{ route('kesehatan.destroy',$kesehatan->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('kesehatan.show',$kesehatan->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('kesehatan.edit',$kesehatan->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {{-- {!! $kesehatan->links() !!} --}}
      
@endsection