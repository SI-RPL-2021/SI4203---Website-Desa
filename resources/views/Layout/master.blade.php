<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <title>WEBSITE DESA MANISREJO</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset('Admin/dist/css/adminlte.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        {{-- Script JS Carousel --}}
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            @include('Layout.navbar')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                @include('Layout.sidebar')
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-md" style="text-align: center">
                                <h1 style="font-weight: bolder">@yield('title')</h1>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="title" style="text-align: center">@yield('caption')</h3>

                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Anak Desa Community</b> v.69
                </div>
                <strong>Made By<a href="#"> TIM A </a> . </strong>SI 42 03
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <scri src="{{asset('Admin/plugins/jquery/jquery.min.js')}}"></scri>
        <!-- Bootstrap 4 -->
        <script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('Admin/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('Admin/dist/js/demo.js')}}"></script>
    </body>
</html>