@extends('Layout.master')

@section('title')
Beranda
@endsection

@section('caption')
Selamat datang di Website Desa Manisrejo
@endsection

@section('content')
{{-- Carousel --}}
<div class="container-fluid">
    <div class="card mx-auto" style="max-width: 60rem;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Logo/slide1.png" alt="First slide">
                        <div class="border-info carousel-caption d-none d-md-block mx-auto bg-shadow" style="max-width: 30rem;">
                            <h3>Musyawarah Dengan Bupati Magetan</h3>
                        </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Logo/slide2.png" alt="Second slide">
                        <div class="border-info carousel-caption d-none d-md-block mx-auto bg-shadow" style="max-width: 30rem;">
                            <h3>Rapat Karangtaruna Desa Manisrejo</h3>
                        </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Logo/slide3.png" alt="Third slide">
                        <div class="border-info carousel-caption d-none d-md-block mx-auto bg-shadow" style="max-width: 30rem;">
                            <h3>Kunjungan Desa oleh Bupati Manisrejo</h3>
                        </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        {{-- End carousel --}}
    </div>
</div>
@endsection
