@extends('admin.app')

@section('content')
    <h1> {{ Request()->is('*create*') ? 'Create':'Update'}} Form</h1>
    <div class="row">
        <div class=" col-12">
            @if ($errors->any())
                {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
            @endif
            <form
                action="{{ Request()->is('*create*') ? route('admin.blog.store') : route('admin.blog.edit', $blog->id) }}"
                method="POST" enctype="multipart/form-data">
                @if (Request()->is('*edit*'))
                    @method('PATCH')
                @endif

                @csrf




                <div class="row">

                    <div class="col-md-3  col-sm-3 form-group">
                        @lang('messages.title'):
                        <input class="form-control" name="title" type="text"
                            value="{{ old('title', $blog->title ?? '') }}" required>
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>


                    <div class="col-md-12  col-sm-12 form-group">@lang('messages.description'):
                        <textarea id="description" name="description" class="form-control" cols="30"
                            rows="10">{{ old('description', $company->description ?? '') }}</textarea>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <button type="submit" class="btn btn-success   mat-btn ">

                            @if (Request()->is('*create*'))
                                @lang('messages.add')
                            @else
                                @lang('messages.edit')
                            @endif
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
