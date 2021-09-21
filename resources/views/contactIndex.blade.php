@extends('app')

@section('content')

    <div class="container my-5" style="background-color: whitesmoke;">

        <div class="row">
            <div class="col-12">
                <h2 class="card-title fs-2 fw-bold">Haben Sie noch Fragen?</h2>
                <p><br>Dann nehme doch direkten Kontakt auf:<br>
                <h2 class="card-title fs-5 fw-bold"><br>Kundendienst</h2>
                Aus dem Festnetz und allen Mobilfunknetzen: (+49) 30 -111-1111

                <h2 class="card-title fs-5 fw-bold"><br>Service-Hotline:</h2>(+49) 30 - 222 22<br>
                <br>
                <h2 class="card-title fs-5 fw-bold">Servicezeiten Kundendienst</h2>
                Montag bis Freitag von 8.00 bis 20.00<br>
                Samstag und Sonntag von 9.00 bis 18.00</p>
            </div>
            <div class="col-8 py-5">


                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif

                @if ($errors->any())
                    {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                @endif

                <form action="{{ route('kontakt.store') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <input class="form-control" name="name"  type="text"
                            placeholder="Geben Sie Ihren Namen ein">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="email" name="email"
                            placeholder="Geben Sie eine gültige E-Mail-Adresse an">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="number"  name="mobile"
                            placeholder="Geben Sie Ihr Handynummer ein (z.B. +14155552222)">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="Textarea" name="description"
                            placeholder="Geben Sie Ihre Nachricht ein" rows="7"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary  my-3  mat-btn">absenden</button>
                </form>
            </div>
        </div>

    </div>


@endsection
