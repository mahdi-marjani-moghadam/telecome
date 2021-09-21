@extends('app')

@section('content')

<img src="{{Storage::url('blog.jpeg')}}" class="img-fluid" alt="">
<div class="container">

    <div class="row ">
        @foreach($blogs as $item)
            <div class="col-6 p-4">

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


            </div>
        @endforeach
    </div>
</div>



@endsection
