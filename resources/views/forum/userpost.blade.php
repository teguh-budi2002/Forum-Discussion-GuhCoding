@extends('app')
@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('/css/userpost-styles.css') }}">
@endpush
<div class="w-full h-full z-10 overflow-hidden">
    <div class="img-user mt-28 mb-4">
        <div class="grid-cols-1">
            <div class="flex justify-center">
                <div class="image-container">
                    @if (!is_null($user->photo_profile))
                    <img src="{{ asset('/storage/' . $user->photo_profile) }}"
                        class="img-profile mx-auto w-52 h-52 cursor-pointer rounded-md" alt="{{$user->photo_profile}}">
                    @elseif (!is_null($user->photo_profile_fb))
                    <img src="{{ asset($user->photo_profile_fb) }}"
                        class="img-profile mx-auto w-52 h-52 cursor-pointer rounded-md"
                        alt="{{$user->photo_profile_fb}}">
                    @else
                    <img src="{{ asset('/img/default-profile.webp') }}"
                        alt="https://www.freepik.com/vectors/secret-agent"
                        class="img-profile mx-auto w-52 h-52 cursor-pointer rounded-md">
                    @endif
                </div>
            </div>
        </div>
        <div class="item-info">
            <div class="w-full text-center">
                <div class="name-info">
                    <p class="name text-gray-50 mt-2 mb-2">{{ $user->name }}</p>
                </div>
                <center>
                    <hr class="border border-slate-400 w-48">
                </center>
            </div>
            <div class="bio text-gray-50 text-sm mt-2 text-center">
                {!! !is_null($user->bio) ? $user->bio : "Belum ada bio" !!}
            </div>
        </div>
    </div>
    <div class="button-for-super-admin flex place-items-center place-content-center mb-4 space-x-4">
        @can('ban user', Post::class)
        <button type="button" data-modal-toggle="popup-modal"
            class="py-2.5 px-6 rounded text-red-800 bg-red-400 hover:bg-red-500 hover:text-red-200">BAN
            USER</button>
        <form action="{{ URL('ban/user/' . $user->email) }}" method="post">
            @csrf
            @method('PUT')
            <div id="popup-modal" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
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
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin
                                untuk mem-banned user ini?</h3>
                            <button type="submit"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                Yes, Banned User!
                            </button>
                            <button data-modal-toggle="popup-modal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @endcan
        @can('unban user', Post::class)
        <button type="button" data-modal-toggle="popup-modal-unban"
            class="py-2.5 px-6 rounded text-yellow-800 bg-yellow-400 hover:bg-yellow-500 hover:text-yellow-200">UNBAN
            USER</button>
        <form action="{{ URL('unban/user/' . $user->email) }}" method="post">
            @csrf
            @method('PUT')
            <div id="popup-modal-unban" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="popup-modal-unban">
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
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin
                                untuk meng-aktifkan lagi user ini?</h3>
                            <button type="submit"
                                class="text-white bg-yellow-600 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                Yes, UnBanned User!
                            </button>
                            <button data-modal-toggle="popup-modal-unban" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @endcan
    </div>
    @if ($mess = Session::get('banned'))
    <div class="flex justify-center">
        <div class="bg-red-400 text-red-800 rounded w-96 text-center p-2 mb-3">
            <p>{{ $mess }}</p>
        </div>
    </div>
    @elseif ($mess = Session::get('alreadyBan'))
    <div class="flex justify-center">
        <div class="bg-red-400 text-red-800 rounded w-96 text-center p-2 mb-3">
            <p>{{ $mess }}</p>
        </div>
    </div>
    @elseif ($mess = Session::get('unBanned'))
    <div class="flex justify-center">
        <div class="bg-yellow-400 text-yellow-800 rounded w-96 text-center p-2 mb-3">
            <p>{{ $mess }}</p>
        </div>
    </div>
    @elseif ($mess = Session::get('alreadyUnban'))
    <div class="flex justify-center">
        <div class="bg-yellow-400 text-yellow-800 rounded w-96 text-center p-2 mb-3">
            <p>{{ $mess }}</p>
        </div>
    </div>
    @endif
    <div class="text-header text-center uppercase font-semibold
    mb-8 text-4xl text-gray-50 space-y-2">
        <p>Post By</p>
        <p>{{ $user->name }}</p>
    </div>
    <div class="flex justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 mb-5">
            @foreach ($userposts as $post)
            <div class="container-box bg-white rounded p-2 shadow-md shadow-gray-400">
                <div class="title-content text-center text-gray-700">
                    <p class="text-xl">{{ $post->judul }}</p>
                </div>
                <div class="text-start button-read">
                    <a href="{{ URL('/forum/postingan/' . $post->slug) }}"
                        class="py-3 px-40 bg-blue-500 hover:bg-blue-400 rounded text-white">Read</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="mb-14 mt-10">
        <div class="paginate">
            {{ $userposts->links() }}
        </div>
    </div>
</div>
@endsection
