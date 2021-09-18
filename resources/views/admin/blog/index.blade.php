@extends('admin.app')

@section('content')
    <h1>Blog list</h1>
    <div class="row">
        <div class=" col-12">
            <a class="btn btn-success" href="{{ route('admin.blog.create') }}">Add</a>
            @foreach($blog as $item)
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
    </div>
@endsection
