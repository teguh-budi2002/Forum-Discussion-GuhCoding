@extends('app')
@section('content')
<div class="w-full h-screen flex justify-center items-center bg-gray-100">
    <div class="wrapper md:w-2/3 w-full h-auto md:mt-10 mt-28 mb:mb-0 mb-10 md:px-0 px-4">
        <div class="p-2 pb-4 bg-orange-300 outline outline-2 outline-orange-500 rounded space-y-4">
            <div class="image-error">
                <img src="{{ asset('/img/403-error.webp') }}" class="w-96 h-52 mx-auto" alt="https://www.freepik.com/free-photo/yellow-triangle-warning-sign-symbol-danger-caution-risk-traffic-icon-background-3d-rendering_22405841.htm#query=403&position=25&from_view=search">
            </div>
            <div class="text-error text-center text-orange-700 space-y-3">
                <p class="text-7xl">403</p>
                <p class="text-3xl">Invalid Statement</p>
                <p class="text-xl">Silahkan Kirim Ulang Link Email Verifikasi</p>
            </div>
            <div class="button-back text-center mt-4 mb-3">
                <a href="{{ URL('/email/verify') }}" class="py-2.5 px-6 bg-orange-600 hover:bg-orange-500 text-white rounded">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
