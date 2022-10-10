@extends('app')
@section('content')
<div class="w-full h-full flex justify-center items-center flex-col md:px-0 px-3">
    <div class="md:w-3/4 w-full p-2 bg-white shadow-lg shadow-gray-400 mt-32 mb-16 rounded-lg mx-auto">
        <form action="{{ Route('profile.update', ['profile' => $user->name]) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex justify-center">
                <div class="form w-full space-y-5 mt-3 mb-5">
                    <input type="hidden" name="token">
                    <div class="form-group flex flex-col">
                        <label for="name">Nama</label>
                        <input type="text"
                            class="form-control border-b border-blue-200 focus:outline-none focus:border-b focus:border-blue-700 transition duration-300 p-1"
                            name="name" value="{{ old('name', $user->name) }}" id="name">
                    </div>
                    <div class="form-group flex flex-col">
                        <label for="email">Email</label>
                        <input type="text" name="email" readonly value="{{ old('email', $user->email) }}" id="email"
                            class="form-control border-b read-only:bg-gray-200 border-blue-200 focus:outline-none focus:border-b focus:border-blue-700 transition duration-300 p-1">
                    </div>
                    @if (!is_null($user->gender))
                    <div class="form-group flex flex-col">
                        <span>Gender</span>
                        <input type="text" readonly name="gender" value="{{ old('gender', $user->gender) }}" id="gender"
                            class="form-control read-only:bg-gray-200 border-b border-blue-200 focus:outline-none focus:border-b
                        focus:border-blue-700 transition duration-300 p-1">
                    </div>
                    @else
                    <div class="form-group flex space-x-5">
                        <span>Gender</span>
                        <label for="laki">
                            <input type="radio" name="gender" class="cursor-pointer" value="Laki-Laki"
                                id="laki">Laki-Laki</label>
                        <label for="perempuan">
                            <input type="radio" name="gender" class="cursor-pointer" value="Perempuan"
                                id="perempuan">Perempuan</label>
                    </div>
                    @endif
                    <div class="form-group flex flex-col">
                        <label for="phone">Phone</label>
                        @if ($user->phone == null)
                        <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" id="phone"
                            class="form-control border-b border-blue-200 focus:outline-none focus:border-b focus:border-blue-700 transition duration-300 p-1">
                        @else
                        <input type="text" readonly name="phone" value="{{ old('phone', $user->phone) }}" id="phone"
                            class="form-control read-only:bg-gray-200 border-b border-blue-200 focus:outline-none focus:border-b focus:border-blue-700 transition duration-300 p-1">
                        @endif
                    </div>
                    <div class="form-group flex flex-col">
                        <label for="editor">Bio:</label>
                        <textarea name="bio" id="editor">{{$user->bio}}</textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="w-52 font-semibold text-blue-500 hover:text-white py-2.5 rounded-full border-b-4 border-b-blue-700 outline outline-2 outline-blue-500 hover:bg-blue-500 transition duration-300">SIMPAN</button>
                    </div>
                </div>
            </div>
        </form>
        @if ($errors->any())
        <div class="flex justify-center">
            <div class="bg-pink-600 text-white text-center rounded-lg md:w-2/4 w-full p-2">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
