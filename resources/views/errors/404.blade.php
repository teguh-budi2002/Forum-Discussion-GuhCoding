@extends('app')
@section('content')
    <div class="w-full h-screen flex justify-center items-center">
        <div class="w-2/3 h-auto p-2 pb-4 bg-red-300 outline outline-2 outline-red-500 rounded space-y-6">
            <div class="image-error">
                <img src="{{ asset('/img/404-image.webp') }}" class="w-96 h-52 mx-auto" alt="error-404">
            </div>
            <div class="text-error text-center text-red-700">
                <p class="text-7xl">404</p>
                <p class="text-xl">Halaman Yang Anda Cari Tidak Ditemukan</p>
            </div>
            <div class="button-back text-center mt-4 mb-3">
                <a href="{{ URL('/forum') }}" class="py-2.5 px-6 bg-red-600 hover:bg-red-500 text-white rounded">Back</a>
            </div>
        </div>
    </div>
@endsection