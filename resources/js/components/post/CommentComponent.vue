<template>
    <div class="section-comment flex justify-center md:px-0 px-3">
        <div class="bg-white shadow-md shadow-gray-500 w-full md:w-4/5  h-auto rounded-lg p-2">
            @if (!is_null($commentCount))
            <div class="totalled-comment mb-3 mt-2">
                <span class="text-2xl">{{ $commentCount}} Jumlah Komentar</span>
            </div>
            @endif
            @if ($message = Session::get('commentAdded'))
            <div class="mb-3 bg-green-500 p-1 rounded-md text-white text-center">
                <span class="text-lg">{{ $message }}</span>
            </div>
            @endif
            <form @submit.prevent="store()" method="post">
                <div class="form-group mb-3">
                    <!-- <textarea name="comments" v-model="data.comments" id="editor"></textarea> -->
                </div>
                <div class="text-center button-submit mb-3">
                    <button class="py-2.5 px-8 rounded bg-blue-500 text-white">Add Comment</button>
                </div>
            </form>
            <hr class="mb-3">
            @foreach ($comments as $comment)
            @if ($posts->id === $comment->post_id)
            <div class="bg-gray-400 w-full p-2 rounded-lg mt-3 shadow-md shadow-gray-600 text-white">
                <div class="user flex items-center space-x-2 mt-2 ml-2">
                    <!-- @if (!is_null($comment->userComments->photo_profile))
                        <img src="{{ $comment->userComments->photo_profile }}" class="w-10 h-10 rounded-full" alt="">
                        @else
                        <img src="{{ asset('img/default-profile.webp') }}"
                            alt="https://www.freepik.com/vectors/secret-agent" class="w-10 h-10 rounded-full">
                        @endif
                        <span>{{ $comment->userComments->name }}</span> -->
                </div>
                <div class="user-comment leading-loose mt-3">
                    <span>{!! $comment->comments !!}</span>
                </div>
                <div class="comment-created flex justify-end items-center space-x-2 mt-2">
                    <span>Diposting pada: </span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd" />
                    </svg>
                    <!-- <span>{{ $comment->created_at->format('d F Y') }}</span> -->
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</template>

<script>
    import {
        reactive,
        ref
    } from 'vue';
    export default {
        props: ['getPostId'],
        setup(props) {

            const postId = ref(props.getPostId.post.id)
            const comment = ref([])
            const getId = ref([])

            const data = reactive({
                comments: ''
            })

            function store() {
                comment.value = data.comments
                getId.value = postId.value

                axios.post('/comment/send', {
                    comments: comment,
                    post_id: postId
                }).then((res) => {
                    console.log(res.data)
                }).catch((err) => {
                    console.log("ERROR", err.response.data)
                })

            }

            console.log(postId.value)
                return {
                    store,
                    data,
                    postId,
                    comment,
                    getId
                }
        }
    }

</script>

<style>

</style>
