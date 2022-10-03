@extends('app')
@section('content')
@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/edit-image-styles.css') }}">
@endpush
<div class="w-full h-screen flex flex-col items-center bg-gray-100 md:px-0 px-3 overflow-hidden">
    <div class="bg-white relative container h-3/4 mt-28 p-2 shadow-md shadow-gray-500 rounded-lg">
        <form action="{{ route('send.image', ['id' => auth()->user()->id]) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="old-image p-1">
                <div class="pre-parent">
                    <div class="flex justify-center">
                        <div id="preview"></div>
                    </div>
                    <div class="box container">
                        <div class="dragBox">
                            Drag and Drop Image here
                            <input type="file" name="photo_profile" onChange="dragNdrop(event)" ondragover="drag()"
                                ondrop="drop()" id="uploadFile">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="button-upload focus:outline-none py-2.5 px-8 rounded bg-blue-500 text-white">Upload</button>
        </form>
    </div>
     @if ($errors->all())
    <div class="bg-pink-600 text-white text-center rounded-lg mb-4 mt-4 w-3/4 p-2">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif
</div>
@push('js-stack')
    <script src="{{ asset('/js/edit-image.js') }}"></script>
@endpush
@endsection
