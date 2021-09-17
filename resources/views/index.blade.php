@extends('app')

@section('content')

    <div class="container" >
        <div class="row align-items-center p-5">
        <div class="col">
            <div id="carouselExampleDark" class="carousel carousel-dark slide p-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner p-5">
                    <div class="carousel-item active p-5" data-bs-interval="10000">
                        <img src="" class="d-block w-100" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item p-5" data-bs-interval="2000">
                        <img src="" class="d-block w-100" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Gemeinsam Digital.</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
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


        <div class="card text-center p-5">
        <div class="card-body">
            <h4 class="card-title">Unsicher, welche Bandbreite am besten passt?</h4>
            <p class="card-text">Unsere Speed-Berater empfielt Ihnen wenigen Schritten die passende Internet.</p>
            <a href="#" class="btn btn-primary">Los geht´s</a>
        </div>
    </div>


        <div class="row g-0" >
            <div class="col-6">
                <div class="p-3 border bg-light">Custom column padding</div>
            </div>
            <div class="col-6">
                <div class="p-3 border bg-light">Custom column padding</div>
            </div>
            <div class="col-6">
                <div class="p-3 border bg-light">Custom column padding</div>
            </div>
            <div class="col-6">
                <div class="p-3 border bg-light">Custom column padding</div>
            </div>
        </div>


        <div class="row  p-5">
            <div class="col ">
                <div class="card align-content-lg-center" style="width: 25rem;">
                    <div class="card-body p-5">
                    <h5 class="card-title">Card title</h5>
                    <img src="" class="card-img-top" alt="">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Mehrere Infos</a>
                </div>
                </div>
            </div>
            <div class="col ">
                    <div class="card align-content-lg-center" style="width: 25rem;">
                        <div class="card-body p-5">
                <h5 class="card-title">Card title</h5>
                <img src="" class="card-img-top" alt="">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Mehrere Infos</a>
            </div>
                    </div>
            </div>
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
