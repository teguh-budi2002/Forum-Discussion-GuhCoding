@extends('app')
@section('content')
@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/home-auth-styles.css') }}">
@endpush
<div class="main">
    <div class="main-section"></div>
        <div class="px-2">
            <div class="heading-text pt-28 pb-10 text-center text-white leading-relaxed space-y-5">
                <p class="font-extrabold text-6xl break-words">Forum GuhCoding </p>
                <p class="text-xl">berdiskusi mengenai Coding dan Programming dengan sesama</p>
                <p class="text-5xl">DEVELOPER</p>
            </div>
            <div class="button-section text-center">
                <a href="{{ route('forum-home') }}" class="py-4 px-10 border-2 inline-block border-white text-white hover:bg-blue-700 rounded transition duration-300 text-forum">FORUM</a>
            </div>
            <div class="header-section flex flex-col mt-10 md:mt-36">
                <div class="img-header mx-auto">
                    <img src="https://source.unsplash.com/800x600" class="rounded-lg shadow-md shadow-blue-500" alt="">
                </div>
                <div class="mt-5 flex justify-center">
                    <div class="w-full bg-blue-200 outline outline-2 outline-blue-600 text-center h-auto p-2 md:w-2/4 md:h-auto md:p-2 text-blue-700 rounded main-text">
                        <p>Developer GuhCoding menciptakan website forum bertujuan untuk sharing dengan sesama web
                            developer lainya dan sekaligus menambah portofolio project yang saya buat. Dengan
                            dibuatnya
                            website forum ini, selaku developer GuhCoding mengucapkan terimakasih terhadap visitor
                            dan
                            semoga ilmu yang diperoleh menjadi bermanfaat.</p>
                    </div>
                </div>
            </div>
            <div class="body-section mt-7 pb-5">
                <div class="flex justify-center md:flex md:justify-center">
                    <div class="w-3/4 h-auto p-4 bg-blue-400 shadow-md shadow-blue-500 rounded">
                        <div class="flex flex-col justify-center md:flex md:flex-row md:justify-evenly md:space-x-7 text-center">
                            <div class="img-1 space-y-5">
                                <img src="{{ asset('img/bubble-img-removebg.png') }}" class="w-40 h-auto m-auto" alt="https://www.freepik.com/vectors/design">
                                <p class="shadow-md p-2 bg-white rounded shadow-blue-700 text-blue-600 font-semibold">Manfaatkan Forum Dengan Chat Secara Real Time Dengan User(Comming Soon)</p>
                            </div>
                            <div class="img-2 space-y-5">
                                <img src="{{ asset('img/pict-box-2.webp') }}" class="w-60 h-40 m-auto" alt="https://www.freepik.com/vectors/design">
                                <p class="shadow-md p-2 bg-white rounded shadow-blue-700 text-blue-600 font-semibold">Saling Terhubung dan Sharing Ilmu Dengan Sesama Developer</p>
                            </div>
                            <div class="img-3 space-y-5">
                                <img src="{{ asset('img/bubble-img-removebg.png') }}" class="w-40 h-auto m-auto" alt="https://www.freepik.com/vectors/design">
                                <p class="shadow-md p-2 bg-white rounded shadow-blue-700 text-blue-600 font-semibold">Manfaatka Forum Dengan Chat Secara Real Time Dengan User</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection