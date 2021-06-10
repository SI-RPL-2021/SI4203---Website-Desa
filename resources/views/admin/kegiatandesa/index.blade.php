@extends('Layout.admin')

@section('title')
    Data Kegiatan
@endsection

@push('styles')

@endpush

@section('content')
    <div class="container pt-5 pb-5">
        <div class="d-flex justify-content-between">

            <h3 class="font-weight-bold">Data Kegiatan Desa</h3>

            <a href="{{ url('/admin/kegiatandesa/create') }}" class="btn btn-md btn-success text-white font-weight-bold">
                <i class="fas fa-plus me-3"></i>Tambah
                Kegiatan</a>
        </div>

        <div class="row">
            @foreach ($activities as $activity)
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <img src="/storage/{{ $activity->gambar }}" alt="Kegiatan"
                                style="width:100%; object-fit: cover">
                            <p class="font-weight-bold mb-2">{{ $activity->nama }}</p>
                            <p><i class="fas fa-calendar me-3"></i> {{ $activity->tanggal }}</p>
                            <p><i class="fas fa-clock me-3"></i>{{ $activity->waktu }}</p>
                            <hr>
                            <div class="d-flex justify-content-end">
                                <p class="text-muted">{{ $activity->lembaga }}</p>
                            </div>
                            <div class="d-flex justify-content-around">
                                <a href="{{ url('/admin/kegiatandesa/' . $activity->id . '/edit') }}"
                                    class="btn btn-warning btn-sm text-white me-2 w-100">
                                    Edit</a>
                                <form action="{{ url('/admin/kegiatandesa/' . $activity->id) }}" method="post"
                                    class="w-100">
                                    <button class="btn btn-sm btn-danger text-white w-100">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
@endsection
