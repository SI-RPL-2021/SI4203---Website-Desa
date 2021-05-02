@extends('Layout.master')
@section('content')

<!-- Default box -->
<div class="card">
    <div class="card-header">
    </div>

    <div class="card-body">
        <form action="{{route('article.create')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul</label>
                <input name="judul" type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Konten</label>
                <textarea name="konten_singkat" class="form-control" id="exampleFormControlTextarea1"
                    rows="3"></textarea>
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file" name="img_path" id="img_path">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
    <!-- /.card-body -->
    <!-- /.card-footer-->
</div>
<!-- /.card -->

@endsection