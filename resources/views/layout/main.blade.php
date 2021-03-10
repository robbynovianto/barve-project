<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- My Font! --}}

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Viga&display=swap');
        </style>

    {{-- My CSS --}}
    <script src="js/script.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


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
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between">
                <h1 class="navbar-brand" href="/">Barve Corp</a></h1>
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
                    <li>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </li>
                </nav>
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


{{-- Jumbotron --}}
<div class="jumbotron">
    <div class="container">
    <h1 class="display-4">BARVE</h1>
    <p>Aplikasi Management Rapat</p>
    </div>
  </div>
{{-- Akhir Jumbotron --}}
{{-- Featured Service --}}
<section id="featured-service">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 box">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="green" class="bi bi-info-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                  </svg>
                    <h4 class="title">Info Ruang Meeting</h4>
                    <p class="description">Sekarang Anda sudah dapat melihat seluruh jadwal ruang meeting yang tersedia secara realtime
                        dengan sangat mudah hanya dengan klik AMARA dari komputer maupun smartphone Anda.</p>
                </i>
            </div>
            <div class="col-lg-4 box-bg">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="green" class="bi bi-cart-check" viewBox="0 0 16 16">
                    <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                  </svg>
                    <h4 class="title">Pemesanan Ruangan Makin Mudah</h4>
                    <p class="description">Anda dapat melakukan pemesanan ruang meeting sesuai dengan spesifikasi,
                        kapasitas dan waktu yang tersedia. Anda dapat melakukannya kapan pun dan dimana pun Anda sedang berada.</p>
                </i>
            </div>
            <div class="col-lg-4 box">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="green" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                    <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                  </svg>
                    <h4 class="title">Proses Pemesanan 3 Langkah</h4>
                    <p class="description">Pemesanan ruang meeting hanya perlu 3 langkah. Anda hanya perlu pemesanan ruangan,
                        kemudian Admin akan melakukan persetujuan, dan terakhir Anda akan langsung mndapat konfirmasi.</p>
                </i>
            </div>
        </div>
    </div>
</section>
{{-- Akhir Featured Service --}}
    @yield('container')
    <!-- Optional JavaScript; choose one of the two! -->
    <
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
