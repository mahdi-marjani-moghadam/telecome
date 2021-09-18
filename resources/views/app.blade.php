<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <script src="{{ mix('js/app.js') }}"></script>

</head>

<body>

    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <img src="{{ asset('\images\logo.png') }}" class="logo"/>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0" >

                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="/">Startseite</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/simkarte">Sim-Karte</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/anmeldung">Anmeldung</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/aboutus">Über uns</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/news">News</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href="/kontakt">Kontakt</a>
                    </li>


                    </ul>
                </div>

            </div>
        </nav>

        @yield('content')




    </div>

    <footer class="bg-light text-center text-lg-start bg-dark">
        <!-- Grid container -->
        <div class="container p-4">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            {{--<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase">Footer text</h5>

              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                aliquam voluptatem veniam, est atque cumque eum delectus sint!
              </p>
            </div>--}}
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0 bg transparent text-white">
              <h5 class="text-uppercase">Service-Hotline</h5>

              <p>
                  (+49) 30 - 222 22 <br>
                  Montag bis Freitag von 8.00 bis 20.00 <br>
                  Samstag und Sonntag von 9.00 bis 18.00
              </p>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      </footer>

</body>

</html>
