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
   
    <div class="col-lg-12 mx-auto" style="max-width: 70rem;" style="max-height: 20rem">
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

<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-md-8">
            <h1 class="my-4" style="font-weight: bolder">
                Artikel Terkini
            </h1>
            <!-- Blog post-->
            <div class="card mb-4">
                <img class="card-img-top" src="https://via.placeholder.com/750x300" alt="Card image cap" />
                <div class="card-body">
                    <h2 class="card-title">Post Title</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                    <a class="btn btn-primary" href="#!">Read More →</a>
                </div>
                <div class="card-footer text-muted">
                    Posted on January 1, 2021 by
                    <a href="#!">Start Bootstrap</a>
                </div>
            </div>
            <!-- Blog post-->
            <div class="card mb-4">
                <img class="card-img-top" src="https://via.placeholder.com/750x300" alt="Card image cap" />
                <div class="card-body">
                    <h2 class="card-title">Post Title</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                    <a class="btn btn-primary" href="#!">Read More →</a>
                </div>
                <div class="card-footer text-muted">
                    Posted on January 1, 2021 by
                    <a href="#!">Start Bootstrap</a>
                </div>
            </div>
            <!-- Blog post-->
            <div class="card mb-4">
                <img class="card-img-top" src="https://via.placeholder.com/750x300" alt="Card image cap" />
                <div class="card-body">
                    <h2 class="card-title">Post Title</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                    <a class="btn btn-primary" href="#!">Read More →</a>
                </div>
                <div class="card-footer text-muted">
                    Posted on January 1, 2021 by
                    <a href="#!">Start Bootstrap</a>
                </div>
            </div>
        </div>
        <!-- Side widgets-->
        <div class="col-md-4">
            <!-- Search widget-->
            <div class="card embed-responsive-4by3 my-3">
                <h5 class="card-header">Peta Desa</h5>
                <div class="card-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7908.770215596773!2d111.5389271284629!3d-7.6416698443918545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79be97045efab1%3A0x1153b853a089ac37!2sManisrejo%2C%20Kec.%20Taman%2C%20Kota%20Madiun%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1620025420754!5m2!1sid!2sid" width="310" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card my-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!</div>
            </div>
        </div>
    </div>
</div>

@endsection
