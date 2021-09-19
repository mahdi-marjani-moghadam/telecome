@extends('app')

@section('content')
    <div>
        @foreach($blogs as $item)
        <h2>
            {{ $item['title'] ?? ''}}
        </h2>
        <div class="p-3">

            {{ $item['description'] ?? ''}}
        </div>
            <div>
                <a class="btn  btn-success" href="{{ url('blog',$item['id']) }}">More ...</a>
            </div>
        @endforeach
    </div>
@endsection
