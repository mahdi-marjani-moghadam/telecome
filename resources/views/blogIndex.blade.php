@extends('app')

@section('content')

<img src="{{Storage::url('blog.jpeg')}}" class="img-fluid" alt="">
<div class="container" style="padding-left: 100px; padding-right: 200px;">

    <div class="row ">
        @foreach($blogs as $item)
            {{--<div class="col-6 p-4">

                <div class="card-group ">
                    <div class="card ">
                        <img src="{{ Storage::url($item['image'])}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title fs-5 fw-bold "> {{ $item['title'] ?? ''}}</h4>
                            <p class="card-text mx-3" >{{ $item['description'] ?? ''}}</p>
                            <div>
                                <a class="btn btn-primary my-4" href="{{ url('blog',$item['id']) }}" >Weitere infos</a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>--}}
            <div class="row bg-light position-center m-5 rounded-3">
                <div class="col-md-6 mb-md-0 p-md-4">
                    <img src="{{ Storage::url($item['image'])}}" class="rounded-3 w-100" style="object-fit: cover; " alt="">
                </div>
                <div class="col-md-6 p-4 ps-md-0">
                    <h5 class="mt-0 fs-3 pb-4">{{ $item['title'] ?? ''}}</h5>
                    <p>{{ $item['description'] ?? ''}}</p>
                    <a class="btn btn-primary my-4" href="{{ url('blog',$item['id']) }}" >Weitere infos</a>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection
