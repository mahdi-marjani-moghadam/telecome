@extends('app')

@section('content')


{{-- Carosel/Banner--}}
<div class="row px-5" >
    <div class="col"  >

        <div id="carouselExampleDark" class="carousel carousel-dark slide px-5 mx-5" data-bs-ride="carousel" >
            <div class="carousel-indicators ">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner " >

                <div class="carousel-item active  px-5" data-bs-interval="10000">
                    <div class="card align-self-center" >
                        <img src="{{ Storage::url('carosel1.jpg') }}" class="d-block w-100"  alt="">
                        <div class="card-body">
                            <h3 class="text-uppercase fw-bolder" style="color: #19bee7">Beste Unterhaltung mit uns</h3>
                            <p class="card-text">Alles aus einer Hand – unsere Kombi-Angebote zum Aktionspreis.</p>
                            <a href="#" class="card-link " style="color: #37b3d0">Zur Aktion Seite</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item px-5" data-bs-interval="2000" >
                    <img src="{{ Storage::url('carosel2.jpg') }}" class="d-block w-100 " alt="">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
</div>

{{-- Card--}}
<div class="card text-center p-5" style="background-color: #e2e7ef; height:280px" >
    <div class="card-body">
        <h4 class="card-title">Unsicher, welche Bandbreite am besten passt?</h4>
        <p class="card-text center">Unsere Speed-Berater empfielt Ihnen wenigen Schritten die passende Internet.</p>
        <a href="#" class="btn btn-secondary">Los geht´s</a>
    </div>
</div>

{{--News--}}
<div class="row g-0" >
    <div class="col-6">
        <img src="{{Storage::url ('news1.jpg')}}" class="img-thumbnail" alt="">
    </div>
    <div class="col-6 p-5" style="background-color: #badfff; ">
            <h5 class="text-title">Vernetzung</h5>
            <p class="lh-lg text-wrap py-5">Bei der Vernetzung Ihrer verschiedenen Niederlassungen unterstützen wir Sie mit zuverlässigen, redundanten Verbindungen. So sorgen wir für eine vollständige und sichere Anbindung Ihrer Standorte.</p>
    </div>

    <div class="col-6 p-5" style="background-color: #fbe9d5eb; ">
        <h5 class="text-title ">Seniorenhotline</h5>
        <p class="lh-lg text-wrap py-5">Helfer stehen speziell für Fragen von Senioren telefonisch zur Verfügung. <br>Hinweis: Diese Hotline wird den Senioreneinrichtungen direkt zur Verfügung gestellt.</p>
    </div>
    <div class="col-6">
        <img src="{{Storage::url ('news2.jpg')}}" class="img-thumbnail" alt="">
    </div>
</div>

{{--Blog Card--}}
<div class="container p-5">
    <div class="row ">

        @foreach($blogs as $item)
        <div class="col-6 ">

            <div class="card " style="width: 30rem; left:80px;">
                <div class="card-body  align-self-center ">
                    <h5 class="card-title">{{ $item['title'] }}</h5>
                    <img style="width: 100%" src="{{ Storage::url($item['image']) }}" alt="">
                    <p class="card-text p-3">{{ $item['description'] }}</p>
                    <a href="{{ url('blog',$item['id']) }}" class="btn btn-link" style="color: #37b3d0">Mehr erfahren</a>
                </div>
            </div>

        </div>
        @endforeach

    </div>
</div>



    {{-- <div class=" col-12 ">
        @foreach($news as $item)
            <div class="row ">
                <div class="col ">
                    <div class="bg-light p-1 my-1">

                        {{ $item['title'] }}
                        {{ $item['description'] }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>--}}
    {{--<div class=" col-12">
            @foreach($blogs as $item)
                {{ $item['title'] }}
                {{ $item['description'] }}
            @endforeach
        </div>--}}
@endsection
