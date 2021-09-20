@extends('app')

@section('content')
<div class="container">
    <div class="row ">
        @foreach($blogs as $item)
            <div class="col-6 p-4">

                <div class="card-group ">
                    <div class="card ">
                        <img src="{{ Storage::url($item['image'])}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4 class="card-title"> {{ $item['title'] ?? ''}}</h4>
                            <p class="card-text" >{{ $item['description'] ?? ''}}</p>
                            <div>
                                <a class="btn btn-primary" href="{{ url('blog',$item['id']) }}" style="color: #37b3d0">Weitere infos</a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        @endforeach
    </div>
</div>



@endsection
