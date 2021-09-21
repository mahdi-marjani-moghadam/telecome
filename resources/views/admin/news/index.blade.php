@extends('admin.app')

@section('content')
    <h1>News List</h1>
    <div class="row">
        <div class=" col-12">
            <a class="btn btn-success" href="{{ route('admin.news.create') }}">Add</a>

            @foreach($news as $item)
                <div class="row ">
                    <div class="col ">
                        <div class="bg-light p-1 my-1">

                            {{$item['title']}}
                            {{$item['description']}}

                        </div>
                    </div>
                </div>
    </div>
@endsection
