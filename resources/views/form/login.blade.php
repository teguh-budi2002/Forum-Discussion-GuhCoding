@extends('app')
@section('content')
<div class="w-full h-full flex justify-center items-center parent">
    <div
        class="w-full md:w-2/4 h-auto md:p-8 p-2 mx-3 md:mx-0 mt-28 mb-10 bg-white shadow-md  shadow-gray-500 rounded-lg">
        @if ($mess = Session::get('err'))
        <div class="bg-red-400 text-white text-center rounded-lg p-2 mb-1">
            <span>{{ $mess }}</span>
        </div>
        @elseif ($errors->any())
        @foreach ($errors->all() as $fieldError)
        <div class="bg-red-400 text-white text-center rounded-lg p-2 mb-1">
            <span>{{ $fieldError }}</span>
        </div>
        @endforeach
        @elseif ($mess = Session::get('successReset'))
        <div class="bg-green-500 text-white text-center rounded-lg p-2 mb-1">
            <span>{{ $mess }}</span>
        </div>
        @elseif ($mess = Session::get('getBanned'))
        <div class="bg-red-400 text-red-700 text-center rounded-lg p-2 mb-1">
            <span>{{ $mess }}</span>
        </div>
        @endif
        <div class="flex flex-col items-center justify-center">
            <img src="{{ asset('/img/login-pict.jpg') }}" class="h-80"
                alt="https://www.freepik.com/vectors/people-chatting">
            <form action="{{ Route('send.login') }}" method="post">
                @csrf
                <div class="space-y-3 text-lg">
                    <div class="form-group text-center">
                        <label for="user" class="uppercase font-semibold text-gray-600">Username</label>
                        <input type="text" name="name" id="user"
                            class="form-control p-1 mt-2 w-full border-b border-blue-300 focus:outline-none focus:border-b-2 focus:border-blue-500">
                    </div>
                    <div class="form-group text-center">
                        <label for="pw" class="uppercase font-semibold text-gray-600">Password</label>
                        <input type="password" name="password" id="pw"
                            class="form-control p-1 mt-2 w-full border-b border-blue-300 focus:outline-none focus:border-b-2 focus:border-blue-500">
                    </div>
                    <div class="form-group text-sm">
                        <input type="checkbox" id="remember" class="cursor-pointer" name="remember">
                        <label for="remember" class="font-semibold text-gray-600">Remember me?</label>
                    </div>
                </div>
                <div class="text-center mb-3">
                    <button type="submit"
                        class="py-2.5 px-12 outline outline-2 outline-violet-500 bg-violet-500 rounded-full mt-5 text-white hover:bg-white hover:text-violet-500 transition duration-300">LOGIN</button>
                </div>
                <div class="button-forgot-password text-center">
                    <a href="{{ URL('/auth/forgot-password') }}" class="text-sm text-blue-400 hover:text-blue-500">Lupa
                        password?</a>
                </div>
                <div class="flex justify-between items-center space-x-1 md:space-x-3 mb-3">
                    <hr class="border w-40 md:w-72 border-gray-300">
                    <p>OR</p>
                    <hr class="border w-40 md:w-72 border-gray-300">
                </div>
                <div id="btnFacebook" class="text-center uppercase mb-4 mt-3">
                    <a href="{{ route('login.fb') }}" class="mt-28 py-2.5 px-8 bg-blue-500 text-white rounded">
                        <span>Facebook</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
