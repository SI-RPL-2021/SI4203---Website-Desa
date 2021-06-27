@extends('Layout.master')

@section('title')
Transparansi Keuangan
@endsection

@section('content')
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Keuangan Desa Manisrejo</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="Keunangan" class="table table-bordered">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                  <th>Tanggal</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($finances as $finance)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$finance->judul}}
                    </td>
                    <td>{{$finance->tanggal}}</td>
                    <td><a target="_blank" href="/storage/{{$finance->file}}" class="btn btn-success">Lihat Keuangan</button></td>
                  </tr>
                @endforeach
                </tfoot>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
@endsection