@extends('app')
@section('content')
<div class="w-full h-full">
    <div id="user-post">
        <user-post :get-post="{{ $post }}"></user-post>
        <modal-forum></modal-forum>
    </div>
    @can('update', $post)
    <div class="right-item absolute lg:top-28 lg:right-20 md:right-24 md:top-28 sm:right-5 sm:top-28 top-28 right-3 flex items-center space-x-2">
        <a href="{{ URL('forum/edit/pertanyaan/' . $post->slug) }}"
            class="rounded text-center font-semibold bg-orange-500 hover:bg-orange-400 transition duration-300 text-white p-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
            </svg>
        </a>
    </div>
    @endcan
    <div class="section-comment flex justify-center md:px-0 px-3 mt-5">
        <div class="bg-white shadow-md shadow-gray-500 w-full md:w-4/5 h-auto rounded-lg p-2 mb-10">
            <div class="totalled-comment mb-3 mt-2 ml-3">
                <span class="text-2xl">{{ $post->comments->count() }} Jumlah Komentar</span>
            </div>
            @if ($errors->any())
            <div class="bg-red-300 text-red-700 w-full mb-3 p-2 rounded-md">
                <ul>
                    @foreach ($errors->all() as $err)
                    <li class="text-center">{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('comment.send') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <textarea name="comments" id="editor"></textarea>
                </div>
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <div class="text-center button-submit mb-3">
                    @auth
                    <button type="submit" class="py-2 px-6 rounded bg-blue-500 hover:bg-blue-700 border-b-2 hover:border-blue-400 border-blue-800 text-white p-2 focus:outline-none">Add Comment</button>
                    @else
                    <button type="button" data-modal-toggle="defaultModal" id="buttonModal"
                        class="py-2 px-6 rounded bg-blue-500 hover:bg-blue-700 border-b-2 hover:border-blue-400 border-blue-800 text-white p-2 focus:outline-none">Add Comment</button>
                    @endauth
                </div>
            </form>
            <hr class="mb-3">
            @include('forum.displayComment', ['comments' => $post->comments, 'post' => $post])
        </div>
    </div>
</div>
@endsection
