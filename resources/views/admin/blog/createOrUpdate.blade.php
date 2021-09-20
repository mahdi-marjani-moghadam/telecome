<x-app-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Blog {{ Request()->is('*create*') ? 'Create' : 'Update' }} Form
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


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
                                        {{ __('Title') }}:

                                        <x-input name='title' class="form-control" type="text" required>
                                            {{ old('title', $blog->title ?? '') }}
                                        </x-input>
                                        <span class="text-danger">{{ $errors->first('title') }}</span>

                                        {{-- <input class="form-control" name="title" type="text"
                                            value="{{ old('title', $blog->title ?? '') }}" required>
                                        <span class="text-danger">{{ $errors->first('title') }}</span> --}}
                                    </div>


                                    <div class="col-md-12  col-sm-12 form-group">
                                        {{ __('Description') }}:

                                        <x-textarea name="description" cols="30" class="form-control">
                                            {{ old('description', $company->description ?? '') }}
                                        </x-textarea>

                                        {{-- <textarea id="description" name="description" class="form-control" cols="30"
                                            rows="10">{{ old('description', $company->description ?? '') }}</textarea> --}}

                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-12">

                                        <button type="submit" class="btn btn-success   mat-btn ">

                                            @if (Request()->is('*create*'))
                                                {{ __('Add') }}
                                            @else
                                                {{ __('Edit') }}

                                            @endif
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
