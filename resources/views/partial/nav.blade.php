<nav
    class="p-5 {{ request()->route()->named('forum-home') ? '' : 'shadow-md shadow-blue-500' }} {{ request()->route()->named('home.main') ? 'hidden' : '' }}">
    <div class="flex justify-between items-center space-x-2">
        <div onclick="openMenu(event)" class="toggle-bar cursor-pointer text-lg text-white">
            <div class="ham-menu"></div>
            <div class="ham-menu"></div>
            <div class="ham-menu"></div>
        </div>
        @if(Auth::check())
        <div class="side-menu flex items-center space-x-3 bg-blue-500 rounded shadow-md shadow-blue-500 py-1 px-2">
            <span class="text-white">{{ auth()->user()->name }}</span>
            @if (!is_null(auth()->user()->photo_profile))
            <img src="{{ asset('/storage/' . auth()->user()->photo_profile) }}"
                class="w-10 h-10 rounded-full"
                alt="{{auth()->user()->photo_profile}}">
            @elseif (!is_null(auth()->user()->photo_profile_fb))
            <img src="{{ asset(auth()->user()->photo_profile_fb) }}"
                class="w-10 h-10 rounded-full"
                alt="{{auth()->user()->photo_profile_fb}}">
            @else
            <img src="{{ asset('/img/default-profile.webp') }}" alt="https://www.freepik.com/vectors/secret-agent"
                class="w-10 h-10 rounded-full">
            @endif
        </div>
        @endif
    </div>
</nav>
<div class="flex flex-col menu-sidebar h-full shadow-xl py-8">
    <div class="flex flex-col px-4 justify-between">
        <div class="flex justify-end font-bold text-white text-xl cursor-pointer" onclick="closeMenu(event)">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        <h2 class="text-3xl font-semibold text-center mb-5 text-white">GuhCoding</h2>
        <aside>
            <ul>
                @guest
                <li>
                    <a href="/" class="flex items-center px-4 py-2 text-gray-700 bg-gray-100 rounded-md ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>

                        <span class="mx-4 font-medium">Home</span>
                    </a>
                </li>
                <li class="border-t-2 border-t-gray-200">
                    <a href="{{ url('forum') }}"
                        class="flex items-center px-4 py-2 mt-7 text-gray-600 bg-gray-50 rounded-md hover:bg-gray-100 hover:scale-105 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                        </svg>
                        <span class="mx-4 font-medium">Forum</span>
                    </a>
                </li>
                <li class="border-t-2 border-t-gray-200">
                    <a href="{{ url('auth/register') }}"
                        class="flex items-center px-4 py-2 mt-2 text-gray-600 bg-gray-50 rounded-md hover:bg-gray-100 hover:scale-105 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="mx-4 font-medium">Register</span>
                    </a>
                </li>
                <li>
                    <a href="/auth/login"
                        class="flex items-center px-4 py-2  text-gray-600 mt-2 bg-gray-50 rounded-md hover:bg-gray-100 hover:scale-105 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        <span class="mx-4 font-medium">Login</span>
                    </a>
                </li>
                @endguest
                @auth
                <li>
                    <a href="/home" class="flex items-center px-4 py-2 text-gray-700 bg-gray-100 rounded-md ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>

                        <span class="mx-4 font-medium">Home</span>
                    </a>
                </li>
                <li class="border-t-2 border-t-gray-200 mt-7">
                    <a href="{{ url('forum') }}"
                        class="flex items-center px-4 py-2 mt-5 text-gray-600 bg-gray-50 rounded-md hover:bg-gray-100 hover:scale-105 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                        </svg>
                        <span class="mx-4 font-medium">Forum</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.index') }}"
                        class="flex items-center px-4 py-2 mt-2 text-gray-600 bg-gray-50 rounded-md hover:bg-gray-100 hover:scale-105 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="mx-4 font-medium">Profile</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ URL('postingan/' . auth()->user()->name) }}"
                        class="flex items-center px-4 py-2 mt-2 text-gray-600 bg-gray-50 rounded-md hover:bg-gray-100 hover:scale-105 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                        <span class="mx-4 font-medium">My Post</span>
                    </a>
                </li>
                <li>
                    <button type="button" data-modal-toggle="default-modal" id="logout"
                        class="flex items-center w-full px-4 py-2 mt-2 text-gray-600 rounded-md bg-gray-100 hover:bg-gray-200 cursor-pointer focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <span class="mx-4 font-medium">Logout</span>
                    </button>
                </li>
                @endauth
            </ul>
        </aside>
        {{-- Main Modal --}}
        <div id="default-modal" data-modal-show="false" aria-hidden="true"
            class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-gray-900 text-xl lg:text-2xl font-semibold dark:text-white">
                            Apakah anda yakin ingin logout?
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="default-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <p class="text-gray-500 text-base leading-relaxed dark:text-gray-400">
                            Dengan meng-klik logout maka anda akan meng akses Forum GuhCoding dengan Guest Account!
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex space-x-2 items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <form action="{{ Route('send.logout') }}" method="post">
                            @csrf
                            <button data-modal-toggle="default-modal" type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Logout!</button>
                        </form>
                        <button data-modal-toggle="default-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Tidak
                            sekarang!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
