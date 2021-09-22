@extends('app')

@section('content')

<div class="container">
        <div class="col-6 p-4">
                <div class="card ">
                    <img src="{{ Storage::url($news['image'])}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h4 class="card-title fs-5 fw-bold "> {{ $news['title'] ?? ''}}</h4>
                        <p class="card-text mx-3" >{{ $news['description'] ?? ''}}</p>

                    </div>
                </div>
        </div>
</div>

@endsection
