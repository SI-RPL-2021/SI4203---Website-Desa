@extends('Layout.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Layanan Aspirasi Desa</h2>
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
        <th>Nama</th>
        <th>Deskripsi</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($aspirasi as $aspirasi)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $aspirasi->Nama }}</td>
        <td>{{ $aspirasi->Deskripsi }}</td>
        <td>
            <form action="{{ route('aspirasi.destroy',$aspirasi->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('aspirasi.show',$aspirasi->id) }}">Show</a>

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