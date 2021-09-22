@extends('app')

@section('content')

<img src="{{Storage::url('news.jpg')}}" class="img-fluid" alt="">
<div class="container" style="padding-left: 100px; padding-right: 200px;">

    <div class="row ">
        @foreach($news as $item)
            <div class="row bg-light position-center m-5 rounded-3">
                <div class="col-md-6 mb-md-0 p-md-4">
                    <img src="{{ Storage::url($item['image'])}}" class="rounded-3 w-100" style="object-fit: cover; " alt="">
                </div>
                <div class="col-md-6 p-4 ps-md-0">
                    <h5 class="mt-0 fs-3 pb-4">{{ $item['title'] ?? ''}}</h5>
                    <p>{{ $item['description'] ?? ''}}</p>
                    <a class="btn btn-secondary my-4" href="{{ url('news',$item['id']) }}" >Weitere infos</a>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection
