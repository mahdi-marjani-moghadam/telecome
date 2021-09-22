@extends('app')

@section('content')


    <div class="row g-5">
        <div class="col-6 ">
            <h1 class="fs-1 mt-5 pt-5 " style="padding-left:120px; color:#329dc3 ">Unsere Prepaid-SIM-Karten</h1>
            <p class="text-body text-wrap" style="padding-left: 120px">
                <br>Um Tarife zu buchen benötigst Du zunächst eine Telecome-Sim-Karte!<br>
                1- SIM-Karte kaufen<br>
                2- SIM-Karte freischalten<br>
                3- Prepaid Tarife buchen<br>
                Hinweis: Diese Hotline wird den Senioreneinrichtungen direkt zur Verfügung gestellt.
            </p>
        </div>
        <div class="col-6">
            <img src="{{ Storage::url('simcards.jpg') }}" alt="" />
        </div>
    </div>

    <div class="container p-5 m-5">

        <div class="row">



                <div class="col-6">

                    <div class="card" style="background-color: #e6f6ff; ">
                        <div class="card-header">
                            World Startpacket
                        </div>
                        <div class="card-body">
                            <p class="card-text">✔20 GB Highspeed-Datenvolumen (max.300 MBit/s)<br>
                                ✔4G LTE/5G<br>
                                ✔Allnet-Flat<br>
                                ✔Telefon- & SMS-Flat in alle dt. Netze<br></p>
                            <p class="card-text p-5">mtl. 45,00 €</p>
                            <a href="{{ url('news', 1) }}" class="btn btn-primary">Zum Angebot</a>
                        </div>
                    </div>
                </div>


            <div class="col-6">

                <div class="card" style="background-color: #e6f6ff; ">
                    <div class="card-header ">
                        Internet Startpacket
                    </div>
                    <div class="card-body p-5">
                        <p class="card-text">
                            <span class="fs-4 " 4 GB Internet /><br>
                            ✔Surfen in der EU<br>
                            ✔Internettelefonie (VoIP)<br>
                            ✔keine Vertragsbindung<br>
                        </p>
                        <p class="text-end p-3 fw-bold ">mtl. 25,00 €</p>
                        <a href="{{ url('news', 2) }}" class="btn btn-primary justify-content-center">Zum Angebot</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
