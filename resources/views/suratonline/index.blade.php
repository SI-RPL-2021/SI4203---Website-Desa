@extends('Layout.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Layanan Desa Pengajuan Surat Surat Online</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('suratonline.create') }}"> Buat Data</a>
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
            <th>Email</th>
            <th>Nomor HP</th>
            <th>Alamat</th>
            <th>Jenis Surat</th>
            <th>Pesan</th>
            <th width="150px">Action</th>
        </tr>
        @foreach ($suratonline as $suratonline)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $suratonline->NoIdentitas }}</td>
            <td>{{ $suratonline->name }}</td>
            <td>{{ $suratonline->email }}</td>
            <td>{{ $suratonline->NoHP }}</td>
            <td>{{ $suratonline->Alamat }}</td>
            <td>{{ $suratonline->Jenis }}</td>
            <td>{{ $suratonline->Pesan }}</td>
            <td>
                <form action="{{ route('suratonline.destroy',$suratonline->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('suratonline.show',$suratonline->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('suratonline.edit',$suratonline->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {{-- {!! $suratonline->links() !!} --}}
      
@endsection