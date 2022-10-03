@extends('app')
@section('content')
<div class="w-full h-screen flex justify-center items-center bg-gray-100">
    <div class="w-2/4 shadow-md shadow-gray-400">
        <div class=" text-center p-2 bg-gray-200 text-gray-700">
            <p class="text-xl uppercase">Reset Passowrd</p>
        </div>
        <div class="h-auto p-2 bg-white">
            <form action="{{ URL('auth/reset/password/' . $user->email) }}" class="space-y-3 text-gray-500"
                method="POST">
                @csrf
                {{-- @method('PUT') --}}
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                    <label for="paswrd">New Password</label>
                    <input type="password" name="password"
                        class="w-full p-2 focus:outline-none focus:border-b focus:border-blue-500" id="paswrd">
                </div>
                <div class="form-group">
                    <label for="paswrdConfirmation">New Password Confirmation</label>
                    <input type="password" name="password_confirmation"
                        class="w-full p-2 focus:outline-none focus:border-b focus:border-blue-500"
                        id="paswrdConfirmation">
                </div>
                <div class="text-center">
                    <button type="submit"
                        class="py-2.5 px-6 rounded text-white bg-blue-500 hover:bg-blue-400">RESET</button>
                </div>
            </form>
            @if ($errors->any())
            @foreach ($errors->all() as $fieldError)
            <div class="bg-red-400 mt-4 text-white text-center rounded-lg p-2 mb-1">
                <span>{{ $fieldError }}</span>
            </div>
            @endforeach
            @elseif ($mess = Session::get('invalid'))
            <div class="bg-red-400 mt-4 text-white text-center rounded-lg p-2 mb-1">
                <span>{{ $mess }}</span>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
