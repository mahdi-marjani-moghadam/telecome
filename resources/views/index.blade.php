@extends('app')

@section('content')


{{-- Carosel/Banner--}}

<div class="center " >
    <style>
        *{
            padding: 0;
        }
        .col-background{
            background-image: linear-gradient(180deg ,#229dd4, #dbe7f3);
            height: 290px;
            position: absolute;
            padding: 0;
        }
        .row{
            --bs-gutter-x: 0;
        }
        .carousel{
            padding-left: 150px;
            padding-right: 150px;
            height: 600px;
        }
        .card1, .img2{
            height: 560px;
        }
    </style>
    <div class="row align-items-center " >
        <div class="col col-background " ></div>

        <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel" >
            <div class="carousel-indicators ">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner" >

                <div class="carousel-item active " data-bs-interval="10000">
                    <div class="card align-self-center card1" >
                        <img src="{{ Storage::url('carosel1.jpg') }}" class="d-block w-100"  alt="">
                        <div class="card-body">
                            <h4 class="text-uppercase fw-bolder fs-4 " style="color: #19bee7">Beste Unterhaltung mit uns</h4>
                            <span class="card-text">Alles aus einer Hand – unsere Kombi-Angebote zum Aktionspreis.</span>

                            <a href="{{ route('simkarte') }}" class="card-link " style="color: #37b3d0">Zur Aktion Seite</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item item2" data-bs-interval="2000" >
                    <img src="{{ Storage::url('carosel2.jpg') }}" class="d-block w-100 img2" alt="">
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

<div class="col p-5" style="background-color: #e2e7ef; height:230px" >
    <div class="text-center ">
        <h1 class=" fs-3 m-2">Unsicher, welche Bandbreite am besten passt?</h1>
        <p class="text-center">Unsere Speed-Berater empfielt Ihnen wenigen Schritten die passende Internet.</p>
    </div>
</div>


{{--News--}}
<div class="row g-0" >
    @foreach($news as $item)

        @if($item['id']==1)
            <div class="col-6">
                <img src="{{ Storage::url($item['image']) }}"  alt="">
            </div>
            <div class="col-6 p-5" style="background-color: #badfff; ">
                <h1 class="text-title fs-4">{{ $item['title'] }}</h1>
                <p class="lh-lg text-wrap py-5">{{ $item['description'] }}</p>
                <a href="{{ url('news',$item['id']) }}" class="btn btn-link" style="color: #37b3d0">Weitere Infos</a>
            </div>

        @elseif($item['id']==2)

            <div class="col-6 p-5" style="background-color: #fbe9d5eb; ">
                <h1 class="text-title fs-4">{{ $item['title'] }}</h1>
                <p class="lh-lg text-wrap py-5">{{ $item['description'] }}</p>
                <a href="{{ url('news',$item['id']) }}" class="btn btn-link" style="color: #37b3d0">Weitere Infos</a>
            </div>
            <div class="col-6">
                <img src="{{ Storage::url($item['image']) }}"  alt="">
            </div>
        @endif

    @endforeach
</div>

{{--Blog Card--}}
<div class="container p-5 ">
    <div class="row ">

        <div class=" d-flex justify-content-center">
            <div class="row px-5">


                @foreach($blogs as $item)
                    <div class="col">
                        <div class=" center">
                            <div class="card">
                                <div class="card-body" >
                                    <h1 class="card-title text-center fs-5">{{ $item['title'] }}</h1>
                                    <img  class="ratio ratio-1x1" src="{{ Storage::url($item['image']) }}" style="object-fit: cover; height: 300px;" alt="">
                                    <p class="card-text p-3 ">{{ $item['description'] }}</p>
                                    <a href="{{ url('blog',$item['id']) }}" class="btn btn-link" style="color: #37b3d0">Mehr erfahren</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                </div>
            </div>
        </div>
    </div>


     {{--<div class=" col-12 ">
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
    </div>
    <div class=" col-12">
            @foreach($blogs as $item)
                {{ $item['title'] }}
                {{ $item['description'] }}
            @endforeach
        </div>--}}
@endsection
