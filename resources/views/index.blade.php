@extends('app')

@section('content')
    <div class="row">
        <div class=" col-12">
            @foreach($banners as $item)
                <img src="{{ $item }}" alt="">
            @endforeach
        </div>
        <div class=" col-12 ">
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
        </div>
    </div>
@endsection
