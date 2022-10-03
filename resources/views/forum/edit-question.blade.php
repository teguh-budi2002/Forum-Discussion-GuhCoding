@extends('app')
@section('content')
<div class="w-full h-full overflow-hidden">
    <div class="md:flex md:flex-col md:px-0 px-2">
        <div class="text-header mb-5 text-center mt-28">
            <span class="md:text-3xl text-gray-600 font-semibold uppercase">Edit Pertanyaan</span>
        </div>
        <div class="md:w-3/4 w-full h-auto p-2 md:mx-auto mx-0 bg-white rounded shadow-md shadow-gray-500 mb-10">
            @foreach ($posts as $post)
            <form action="{{ route('question.edit', ['id' => $post->id]) }}" method="post">
                @csrf
                @method('PUT')
                <div id="edit-question">
                    <edit-question :get-post="{{ $post }}"></edit-question>
                </div>
                <div class="form-group mt-4">
                    <textarea name="description" id="editor">{{ $post->description }}</textarea>
                </div>
                <div class="mt-5 mb-5 text-center">
                    <button type="submit"
                        class="w-52 font-semibold text-blue-500 hover:text-white py-2.5 rounded-full hover:bg-blue-500 transition duration-300">Edit Postingan</button>
                </div>
            </form>
            @endforeach
            @if ($mess = Session::get('error'))
            <div class="bg-pink-300 text-pink-800 w-full p-2 rounded text-center">
                <p>{{ $mess }}</p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
