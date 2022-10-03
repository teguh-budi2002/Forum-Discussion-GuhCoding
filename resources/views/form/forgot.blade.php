@extends('app')
@section('content')
<div class="w-full h-screen bg-gray-100">
    <div class="flex justify-center">
        <div class="w-2/4 h-auto bg-white shadow-md shadow-gray-500 p-2 mt-28">
            <div class="header text-center">
                <p class="text-xl font-semibold text-gray-500">Forgot Password</p>
            </div>
            <form action="{{ route('forget.password.post') }}" method="POST">
                @csrf
                <div class="form-group text-gray-600">
                    <label for="emailConfirmation">Email:</label>
                    <input type="email" name="email"
                        class="w-full p-2 focus:outline-none focus:border-b focus:border-blue-500 shadow-sm shadow-gray-300"
                        id="emailConfirmation">
                </div>
                <div class="text-center mt-3 mb-2">
                    <button class="py-2.5 px-6 rounded bg-blue-500 hover:bg-blue-400 text-white">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
    @if (Session::has('message'))
    <div class="flex justify-center mt-3">
        <div class="w-2/4 p-2 rounded bg-green-500 text-white text-center" role="alert">
            {{ Session::get('message') }}
        </div>
    </div>
    @elseif ($message = Session::get('notFound'))
    <div class="flex justify-center mt-3">
        <div class="w-2/4 p-2 rounded bg-red-500 text-white text-center" role="alert">
            {{ $message }}
        </div>
    </div>
    @endif
</div>
@endsection
