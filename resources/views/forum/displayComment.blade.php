@foreach ($comments as $comment)
<div class="w-full p-2 rounded-lg mt-5 bg-gray-50 shadow-md shadow-gray-400 text-white">
    <div class="user flex items-center space-x-2 mt-2 ml-2 text-gray-500">
        @if (!is_null($comment->user->photo_profile))
        <img src="{{ asset('/storage/' . $comment->user->photo_profile) }}"
            class="w-10 h-10 rounded-full"
            alt="{{$comment->user->photo_profile}}">
        @elseif (!is_null($comment->user->photo_profile_fb))
        <img src="{{ asset($comment->user->photo_profile_fb) }}"
            class="w-10 h-10 rounded-full"
            alt="{{$comment->user->photo_profile_fb}}">
        @else
        <img src="{{ asset('/img/default-profile.webp') }}" alt="https://www.freepik.com/vectors/secret-agent"
            class="w-10 h-10 rounded-full">
        @endif
        <span>{{ $comment->user->name }}</span>
        @if ($comment->user->id === $post->user_id)
        <span
            class="bg-gray-200 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Author</span>
        @elseif ($comment->user->role_user === 'Super Admin')
        <span
            class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Super
            Admin</span>
        @endif
    </div>
    <div class="user-comment leading-loose mt-3 text-gray-600">
        <span>{!! $comment->comments !!}</span>
    </div>
    <div class="comment-created flex justify-end items-center space-x-2 mt-2 text-gray-600">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                clip-rule="evenodd" />
        </svg>
        <span>{{ $comment->created_at->format('d F Y') }}</span>
    </div>
    <div class="reply-comment">
        <form method="post" action="{{ route('comment.send') }}">
            @csrf
            <div class="form-group mt-3">
                <input type="text" name="comments"
                    class="form-control w-full rounded-md text-gray-600 p-1 bg-gray-300 outline outline-2 outline-gray-500" />
                <input type="hidden" name="post_id" value="{{ $post->id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group text-end mt-5 {{ !is_null($comment->parent_id) ? 'hidden' : '' }}">
                <button type="submit" class="py-2.5 px-4 rounded bg-blue-500 text-white">Reply</button>
            </div>
        </form>
        @include('forum.commentReplies', ['replies' => $comment->replies])
    </div>
</div>
@endforeach
