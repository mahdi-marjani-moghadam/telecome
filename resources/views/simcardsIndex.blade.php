@extends('app')

@section('content')


    <div class="container-xl">
        <div class="row">
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
    </div>

    <div class="container p-5 m-5">

        <div class="row">
                <div class="col-6">

                    <div class="card" >
                        <div class="card-header">
                            World Startpacket
                        </div>
                        <div class="card-body p-5">
                            <p class="card-text">
                                ✔ 20 GB Highspeed-Datenvolumen (max.300 MBit/s)<br>
                                ✔ 4G LTE/5G<br>
                                ✔ Allnet-Flat<br>
                                ✔ Telefon- & SMS-Flat in alle dt. Netze<br></p>
                            <p class="text-end p-3 fw-bold">mtl. 45,00 €</p>
                        </div>
                    </div>
                </div>


            <div class="col-6">
                <div class="card">
                    <div class="card-header ">
                        Internet Startpacket
                    </div>
                    <div class="card-body p-5">
                        <p class="card-text">
                            ✔ 4 GB Internet<br>
                            ✔ Surfen in der EU<br>
                            ✔ Internettelefonie (VoIP)<br>
                            ✔ keine Vertragsbindung<br>
                        </p>
                        <p class="text-end p-3 fw-bold ">mtl. 25,00 €</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
