@extends('app')
@section('content')
<div class="w-full h-full">
    <div class="main-section">
        <div class="body-section">
            <div class="parent-grid pt-28 mb-8">
                @foreach ($categories as $category)
                <div class="main-text text-3xl font-semibold text-center text-white mb-5">
                    <span>Category: {{ $category->name_category }}</span>
                </div>
                <div class="w-full grid grid-cols-1 md:grid md:grid-cols-3 gap-5 mx-auto">
                    @foreach ($category->posts as $post)
                    <div class="flex justify-center mx-5">
                        <div class="bg-white rounded p-2 w-full min-h-max">
                            <div class="header-text text-center cursor-pointer">
                                <a href="{{ URL('forum/postingan/' . $post->slug) }}" class="font-medium text-lg hover:text-blue-500 transition duration-300">{!! $post->judul !!}</a>
                            </div>
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
