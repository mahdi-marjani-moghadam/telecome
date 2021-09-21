@extends('admin.app')

@section('content')
    <h1>{{request()->is('*create*') ? 'Create' : 'Update'}} Form</h1>
    <div class="row">
        <div class=" col-12">
            @if ($errors->any())
                {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
            @endif

            <form action="{{request()->is('*create*') ? route('admin.news.store') : route('admin.news.edit', $news->id) }}"
                  method="post" enctype="multipart/form-data">

                @if (request()->is('*edit*'))
                    @method('PATCH')
                @endif

                @csrf {{--???--}}

                <div class="row">

                    <div class="col-md-3 form col-sm-3 form-group">
                        {{--???--}}
                        @lang('messages.title'):
                        <input class="form-control" name="title" type="text"
                               value="{{old('title') ? $news->title : ''}}" required>
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>

                    <div class="col-md-12 col-sm-12 form-group">
                        @lang('messages.description'):
                         <textarea name="description" id="description" cols="30" rows="10">
                             {{old('description') ? $company->descriptio : ''}}
                         </textarea>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <button class="but btn-success mat-btn " type="submit"
                            @if(request()->is('*create*'))
                                @lang('messages.add')
                            @else
                                @lang('messages.edit')
                            @endif
                        </button
                    </div>
                </div>


            </form>
        </div>

    </div>
@endsection
