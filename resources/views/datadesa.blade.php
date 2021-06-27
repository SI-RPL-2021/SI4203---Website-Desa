@extends('Layout.master') 
@section('title')
 
@endsection 

@section('content')
<div class="row">
    <div class="col-12">
         <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                       <h3 class="font-weight-bold">Data Desa</h3>
                 
                </div>

                <div class="row">
                    <div class="col-3">
                        <p>Jumlah Penduduk</p>
                    </div>
                    <div class="col-9">
                        : {{ $dataDesa->jumlah_penduduk }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p>Jumlah KK</p>
                    </div>
                    <div class="col-9">
                        : {{ $dataDesa->jumlah_kk }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p>Jumlah Penduduk Laki Laki</p>
                    </div>
                    <div class="col-9">
                        : {{ $dataDesa->jumlah_penduduk_laki }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p>Jumlah Penduduk Perempuan</p>
                    </div>
                    <div class="col-9">
                        : {{ $dataDesa->jumlah_penduduk_wanita }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p>Luas Area</p>
                    </div>
                    <div class="col-9">
                        : {{ $dataDesa->luas_area }} m2
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection