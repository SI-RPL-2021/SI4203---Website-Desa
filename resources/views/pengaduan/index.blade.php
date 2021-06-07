@extends('Layout.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Layanan Pengaduan Desa</h2>
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
        <th>Jenis Masalah</th>
        <th>Bukti Pengaduan</th>
        <th>Keterangan Pengaduan</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($pengaduan as $pengaduan)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $pengaduan->Nama }}</td>
        <td>{{ $pengaduan->masalah}}</td>
        <!-- <td>{{ $pengaduan->bukti}}</td> -->
        <td>{{ $pengaduan->keterangan}}</td>
        <td>
            <form action="{{ route('pengaduan.destroy',$pengaduan->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('pengaduan.show',$aspirasi->id) }}">Show</a>

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