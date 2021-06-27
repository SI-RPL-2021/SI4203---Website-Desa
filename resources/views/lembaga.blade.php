@extends('Layout.master') 
@section('title')
    <h3 class="font-weight-bold">Data Kegiatan Desa</h3> 
@endsection 

@section('content')
<style>
    @charset "utf-8";
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Open Sans:400,600,800');
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    div,
    input,
    p,
    a {
        font-family: "Open Sans";
        margin: 0px;
    }
    a,
    a:hover,
    a:focus {
        color: inherit;
    }
    body {
        background-color: #F1F2F3;
    }
    .container-fluid,
    .container {
        max-width: 1200px;
    }
    .card-container {
        padding: 100px 0px;
        -webkit-perspective: 1000;
        perspective: 1000;
    }
    .profile-card-2 {
        max-width: 300px;
        background-color: #FFF;
        box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
        background-position: center;
        overflow: hidden;
        position: relative;
        margin: 10px auto;
        cursor: pointer;
        border-radius: 10px;
    }
    .profile-card-2 img {
        transition: all linear 0.25s;
    }
    .profile-card-2 .profile-name {
        position: absolute;
        left: 30px;
        bottom: 70px;
        font-size: 30px;
        color: #FFF;
        text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
        font-weight: bold;
        transition: all linear 0.25s;
    }
    .profile-card-2 .profile-icons {
        position: absolute;
        bottom: 30px;
        right: 30px;
        color: #FFF;
        transition: all linear 0.25s;
    }
    .profile-card-2 .profile-username {
        position: absolute;
        bottom: 50px;
        left: 30px;
        color: #FFF;
        font-size: 13px;
        transition: all linear 0.25s;
    }
    .profile-card-2 .detail {
        position: absolute;
        bottom: 20px;
        left: 30px;
        color: #FFF;
        font-size: 15px;
        transition: all linear 0.25s;
    }
    .profile-card-2 .profile-icons .fa {
        margin: 5px;
    }
    .profile-card-2:hover img {
        filter: grayscale(100%);
    }
    .profile-card-2:hover .profile-name {
        bottom: 80px;
    }
    .profile-card-2:hover .profile-username {
        bottom: 60px;
    }
    .profile-card-2:hover .profile-icons {
        right: 40px;
    }
    </style>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="profile-card-2"><img src="Logo/image 3.jpg" class="img img-responsive">
				<div class="profile-name">LPM</div>
				<div class="profile-username">Lembaga Pemberdayaan Masyarakat</div>
                <div class="detail"><a href="#">Detail</a></div>
			</div>
		</div>

        <div class="col-md-4">
			<div class="profile-card-2"><img src="Logo/image 4.jpg" class="img img-responsive">
				<div class="profile-name">PKK</div>
				<div class="profile-username">Pemberdayaan Kesejahteraan Keluarga</div>
                <div class="detail"><a href="#">Detail</a></div>
			</div>
		</div>

        <div class="col-md-4">
			<div class="profile-card-2"><img src="Logo/image 5.jpg" class="img img-responsive">
				<div class="profile-name">Karang Taruna</div>
				<div class="profile-username">Perkumpulan Sosial Masyarakat</div>
                <div class="detail"><a href="#">Detail</a></div>
			</div>
		</div>
	</div>
</div>
<br>
<hr>
<br>
<h1>Kegiatan Desa</h1>
<br>

<div class="row">
    <div class="col-12">
        <div class="row">
            @foreach ($activities as $activity)
            <div class="col-md-4 mb-5">
                <div class="card">
                    <div class="card-body">
                        <img src="/storage/{{ $activity->gambar }}" alt="Kegiatan" style="width:100%; object-fit: cover">
                        <p class="font-weight-bold mb-2">{{ $activity->nama }}</p>
                        <p><i class="fas fa-calendar me-3"></i> {{ $activity->tanggal }}</p>
                        <p><i class="fas fa-clock me-3"></i>{{ $activity->waktu }}</p>
                        <hr>
                        <div class="d-flex justify-content-end">
                            <p class="text-muted">Kegiatan dari {{ $activity->lembaga }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection