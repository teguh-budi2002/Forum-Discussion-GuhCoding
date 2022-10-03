@extends('app')
@section('content')
<div class="w-full h-full">
    <div class="main-section sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
        <div class="body-section">
            <div class="parent-grid pt-28">
                @foreach ($categories as $category)
                <div class="main-text text-3xl text-center mb-5">
                    <span>Category: {{ $category->name_category }}</span>
                </div>
                <div class="grid grid-cols-1 md:grid md:grid-cols-3 gap-5 mx-auto px-2 md:ml-16">
                    @foreach ($category->posts as $post)
                    <div class="bg-white rounded p-2">
                        <div class="header-text text-center cursor-pointer">
                            <a href="{{ URL('forum/postingan/' . $post->slug) }}" class="font-medium text-lg hover:text-blue-500 transition duration-300">{!! $post->judul !!}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
