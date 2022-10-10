@foreach ($replies as $reply)
<div class="bg-white p-2 mb-3 shadow-md shadow-gray-500 rounded text-gray-600 mt-3 {{ !is_null($reply->parent_id) ? 'md:ml-8 ml-0 block' : '' }}">
    <div class="flex justify-between items-center space-x-2">
        <div class="left-item flex items-center space-x-3">
            @if (!is_null($reply->user->photo_profile))
            <img src="{{ asset('/storage/' . $reply->user->photo_profile) }}" class="w-10 h-10 rounded-full"
                alt="{{$reply->user->photo_profile}}">
            @elseif (!is_null($reply->user->photo_profile_fb))
            <img src="{{ asset($reply->user->photo_profile_fb) }}" class="w-10 h-10 rounded-full"
                alt="{{$reply->user->photo_profile_fb}}">
            @else
            <img src="{{ asset('/img/default-profile.webp') }}" alt="https://www.freepik.com/vectors/secret-agent"
                class="w-10 h-10 rounded-full">
            @endif
            <p class="text-gray-900 font-semibold">{{ $reply->user->name }}</p>
            @if ($reply->user->id === $post->user_id)
            <span
                class="bg-gray-200 text-gray-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Author</span>
            @elseif ($reply->user->role_user === 'Super Admin')
            <span
                class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Super
                Admin</span>
            @endif
        </div>
        <div class="right-item">
            @can('delete', $reply)
                <button id="dropdownMenuIconReplyButton" data-dropdown-toggle="dropdownDotsReply{{ $reply->id }}"
                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    type="button">
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                        </path>
                    </svg>
                </button>
            @endcan
        </div>
    </div>
    <div class="reply-section ml-12">
        <p>{{ $reply->comments }}</p>
    </div>
    <hr class="border border-gray-300 mt-3">
</div>
<!-- Dropdown menu -->
<div id="dropdownDotsReply{{ $reply->id }}"
    class="hidden z-10 w-auto bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconReplyButton">
        <li>
            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 hover:text-orange-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                </svg>
            </a>
        </li>
        <li>
            <form action="{{ route('reply.delete', $reply->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="block focus:outline-none py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 hover:text-red-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                </button>
            </form>
        </li>
</div>
@endforeach
