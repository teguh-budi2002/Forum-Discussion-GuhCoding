@extends('app')
@section('content')
@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/profile-styles.css') }}">
@endpush
<div class="sec-temp shadow-xl overflow-hidden"></div>
<div class="w-full h-full md:px-0 px-3">
    <div
        class="relative overflow-hidden bg-white shadow-md shadow-gray-600 rounded-lg md:w-3/4 w-full mt-28 mb-9 md:mx-auto h-full main-temp">
        <div class="wrapper">
            <div class="flex justify-center">
                @if (!is_null(auth()->user()->photo_profile))
                <div class="wrapper-img w-44 h-auto">
                    <img src="{{ asset('/storage/' . auth()->user()->photo_profile) }}"
                        class="w-44 h-44 rounded border-2 shadow-md shadow-black border-slate-500 mt-5 md:mt-20"
                        alt="{{'/storage/' . auth()->user()->photo_profile}}">
                    <button type="button" data-modal-toggle="popup-modal"
                        class="del-btn focus:outline-none hover:bg-red-700 hover:text-white transition duration-300">DELETE</button>
                    <div class="overlay"></div>
                </div>
                @elseif (!is_null(auth()->user()->photo_profile_fb))
                <div class="wrapper-img w-44 h-auto">
                    <img src="{{ asset(auth()->user()->photo_profile_fb) }}"
                        class="rounded border-2 shadow-md shadow-black border-slate-500 mt-5 md:mt-20"
                        alt="{{auth()->user()->photo_profile_fb}}">
                    <button type="button" data-modal-toggle="popup-modal"
                        class="del-btn focus:outline-none hover:bg-red-700 hover:text-white transition duration-300">DELETE</button>
                    <div class="overlay"></div>
                </div>
                @else
                <img src="{{ asset('/img/default-profile.webp') }}" alt="https://www.freepik.com/vectors/secret-agent"
                    class="w-44 h-44 rounded border-2 shadow-md shadow-black border-slate-500 mt-5 md:mt-20 z-20">
                @endif
            </div>
            {{-- MODAL --}}
            <div id="popup-modal" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed md:top-0 top-28 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="popup-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-6 text-center">
                            <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Yakin mau hapus
                                profile?</h3>
                            <form method="post" action="{{ URL('delete-image/' . auth()->user()->id) }}">
                                @csrf
                                @method('DELETE')
                                <button data-modal-toggle="popup-modal" type="submit"
                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    Hapus Photo
                                </button>
                            </form>
                            <button data-modal-toggle="popup-modal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-5 md:mx-20 mt-5 mb-5">
                <div
                    class="mb-5 flex flex-col justify-center text-center md:flex md:flex-row md:justify-center md:items-center md:space-x-5">
                    <a href="{{ url('profile/' . auth()->user()->name . '/edit') }}"
                        class="py-2.5 px-5 rounded-lg md:py-2.5 md:px-8 mb-3 md:m-0 md:rounded-full outline outline-2 outline-violet-500 text-violet-500 hover:bg-violet-500 hover:text-white transition duration-300">
                        Edit Profile
                    </a>
                    <a href="{{ url('edit-image') }}"
                        class="py-2.5 px-5 rounded-lg md:py-2.5 md:px-8 md:rounded-full outline outline-2 outline-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white transition duration-300">Edit
                        Image</a>
                </div>
                <div class="1 space-y-3">
                    <p>Nama : {{ auth()->user()->name }}</p>
                    <p>Nomor : {{ auth()->user()->phone }}</p>
                    <p>Email : {{ auth()->user()->email }}</p>
                    <p>Gender : {{ auth()->user()->gender }}</p>
                    <p>Status Account : {{ auth()->user()->isActive ? "ACTIVE" : "NON-AKTIF" }}</p>
                    <p>Role : {{ auth()->user()->role_user }}</p>
                    <p>Bio :</p>
                    <div class="w-full min-h-fit border-2 border-gray-600 p-2 rounded-lg shadow-md shadow-violet-500">
                        <p>{!! auth()->user()->bio ? auth()->user()->bio : 'Bio belum di isi' !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
