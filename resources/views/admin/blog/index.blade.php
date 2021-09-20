<x-app-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog list') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

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

                </div>
            </div>
        </div>
    </div>
</x-app-layout>



