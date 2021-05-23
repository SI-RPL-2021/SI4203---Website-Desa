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
                <tr>
                  <td>1. </td>
                  <td>Anggaran Desa BLT 2020
                  </td>
                  <td>20 Januari 2021</td>
                  <td><button type="button" class="btn btn-success">Lihat Keuangan</button></td>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
@endsection