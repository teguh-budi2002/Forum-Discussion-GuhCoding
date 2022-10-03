@foreach ($replies as $reply)
<div class="text-gray-600 mt-3 {{ !is_null($reply->parent_id) ? 'md:ml-8 ml-0 block' : '' }}">
    <div class="flex items-center space-x-2">
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
        <p class="text-gray-900">{{ $reply->user->name }}</p>
        @if ($reply->user->id === $post->user_id)
        <span
            class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Author</span>
        @elseif ($reply->user->role_user === 'Super Admin')
        <span
            class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Super
            Admin</span>
        @endif
    </div>
    <div class="reply-section ml-12">
        <p>{{ $reply->comments }}</p>
    </div>
    <hr class="border border-gray-300 mt-3">
</div>
@endforeach
