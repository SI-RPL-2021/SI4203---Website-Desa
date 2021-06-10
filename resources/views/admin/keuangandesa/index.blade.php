@extends('Layout.admin')

@section('title')
    Data Keuangan
@endsection

@push('styles')

@endpush

@section('content')
    <div class="container pt-5 pb-5">
        <div class="d-flex justify-content-between">

            <h3 class="font-weight-bold">Data Keuangan Desa</h3>

            <a href="{{ url('/admin/keuangandesa/create') }}" class="btn btn-md btn-success text-white font-weight-bold">
                <i class="fas fa-plus me-3"></i>Tambah
                Data</a>
        </div>

        <table class="table-striped table table-bordered text-center text-light mt-5">

            <thead>
                <th>No</th>
                <th>Judul</th>
                <th>File</th>
                <th>Aksi</th>
            </thead>

            <tbody class="text-light">
                @foreach ($financeDatas as $financeData)
                    <tr class="text-light">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $financeData->judul }}</td>
                        <td><a href="/storage/{{ $financeData->file }}">
                                Download File</a>
                        </td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-sm btn-warning text-white me-3"
                                    href="{{ url('/admin/keuangandesa/' . $financeData->id . '/edit') }}">
                                    <i class="fas fa-edit"></i></a>

                                <form action="{{ url('/admin/keuangandesa/' . $financeData->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger text-white">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
