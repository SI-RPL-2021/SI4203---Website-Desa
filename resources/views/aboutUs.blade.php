@extends('Layout.master') @section('caption') About Us @endsection @section('content')
<section class="content">
    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row">
                @foreach($peoples as $people)
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            {{$people->jabatan}}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h4 class="lead"><b>{{$people->nama}}</b></h4>
                                    <p class="text-muted text-sm"><b>NIP: </b> {{$people->nip}}</p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="medium"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> {{$people->telepon}}</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="/storage/{{$people->image}}" alt="user-avatar" class="img-bordered shadow img-circle" height="100" width="100" style="object-fit:cover;">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>


@endsection