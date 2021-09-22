@extends('app')

@section('content')

       {{-- <img src="{{ $blog['image'] ?? ''}}" alt="">
        <h1>
            {{ $blog['title'] ?? ''}}
        </h1>
        <div class="p-3">

            {{ $blog['description'] ?? ''}}
        </div>--}}
    <div class="container">
        <div class="col align-self-center p-5">


            <img src="{{ Storage::url($blog['image'])}}" class="rounded mx-auto d-block" alt="...">
            <h5 class="card-title fs-2 py-5">{{ $blog['title'] ?? ''}}</h5>
{{--                    <img src="{{ Storage::url($blog['image'])}}"  style="object-fit: cover; position: center; height: 50%;" alt="">--}}
            <p class="text-start">{{ $blog['description'] ?? ''}}</p>

        </div>
    </div>
@endsection
