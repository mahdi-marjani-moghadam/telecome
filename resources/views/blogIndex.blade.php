@extends('app')

@section('content')

<img src="{{Storage::url('blog.jpeg')}}" class="img-fluid" alt="">
<div class="container" style="padding-left: 100px; padding-right: 200px;">

    <div class="row " >
        @foreach($blogs as $item)
            <div class="col-6 p-5">

                <div class="card-group ">
                    <div class="card " style="background-color: #fff3e6eb";>
                        <img src="{{ Storage::url($item['image'])}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="text-center fs-5 fw-bold m-3 "> {{ $item['title'] ?? ''}}</h4>
                            <p class="text-center mx-3" >{{ $item['description'] ?? ''}}</p>
                            <div>
                                <a class="btn btn-light my-4" href="{{ url('blog',$item['id']) }}" >Weitere infos</a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        @endforeach
    </div>
</div>



@endsection
