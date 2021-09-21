<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TELECOME</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ mix('css/app2.css') }}" type="text/css">
    <script src="{{ mix('js/app.js') }}"></script>

</head>

<body>

    {{-- Menu --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img src="{{ Storage::url('logo.png') }}" alt="" width="80" height="50">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">

                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Startseite</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('simkarte') }}">Sim-Karte</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('login') }}">Anmeldung</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('aboutus') }}">Über uns</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('kontakt') }}">Kontakt</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    @yield('content')


    <footer class="bg-light text-center text-lg-start bg-dark">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 bg transparent text-white">

                    <h5 class="text-uppercase">Service-Hotline</h5>
                    <p>(+49) 30 - 222 22 <br>Montag bis Freitag von 8.00 bis 20.00 <br>Samstag und Sonntag von 9.00 bis
                        18.00</p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->
    </footer>

</body>

</html>
