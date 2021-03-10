<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- My Font! --}}

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Viga&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
        </style>

    {{-- My CSS --}}
    <script src="js/script.js" type="text/javascript"></script>
    <link rel="stylesheet" href="asset/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />


    <script>
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 100) {
                //clearHeader, not clearheader - caps H
                $("#header").addClass("header-scrolled");
            } else {
                $("#header").removeClass("header-scrolled");
            }
        }); //missing );
    </script>
    <title>@yield('title')</title>
  </head>
  <body>
{{-- Awal Navbar --}}
<div class="mobile-container">
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between">
                <h1 class="navbar-brand">
                    <a id="logo" style="text-decoration:none" href="{{url ('/')}}">Barve Corp</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </h1>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li>
                            <a class="nav-link active" href="{{url ('/')}}">Beranda</a>
                        </li>
                        <li>
                            <a class="nav-link " href="{{url ('/about')}}">Tentang</a>
                        </li>
                        <li>
                            <a class="nav-link " href="{{url ('/jadwal')}}">Jadwal Harian</a>
                        </li>
                        <li>
                            <a class="nav-link " href="{{url ('/pesan')}}">Pesan Ruangan</a>
                        </li>
                        <li>
                            <a class="nav-link " href="{{url ('/login')}}">Masuk</a>
                         </li>
                    </ul>
                    {{-- <li>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </li> --}}
                </nav>
            </div>
        </div>
    </div>
</div>
</header>

<script>
    window.addEventListener('scroll', function(){
        let header = document.querySelector('header');

        header.classList.toggle('header-scrolled')
    }
</script>
{{-- Akhir Navbar --}}
