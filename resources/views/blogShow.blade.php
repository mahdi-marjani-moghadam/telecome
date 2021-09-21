@extends('app')

@section('content')
    <div>
        <img src="{{ $blog['image'] ?? ''}}" alt="">
        <h1>
            {{ $blog['title'] ?? ''}}
        </h1>
        <div class="p-3">

            {{ $blog['description'] ?? ''}}
        </div>
    </div>
@endsection
