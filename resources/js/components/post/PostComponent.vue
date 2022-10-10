<template>
    <div class="w-full md:w-4/5 h-full mt-28 mb-10 shadow-lg shadow-gray-600 lg:bg-gray-300 lg:hover:bg-white lg:hover:shadow-gray-300 bg-white rounded-md p-2 transition duration-500">
        <div class="user-auth flex items-center justify-between mt-2">
            <div class="left-item flex items-center space-x-3">
                <img v-if="post.users.photo_profile !== null"
                    v-lazy="{ src: `/storage/${post.users.photo_profile}`, loading: 'https://i.postimg.cc/mk7RvYQk/home-forum.webp', error: 'https://i.postimg.cc/qvZq70jF/error-img-removebg-preview.webp'}"
                    class="w-12 h-12 rounded-full shadow-md shadow-gray-500" :alt="post.users.photo_profile">
                <img v-else-if="post.users.photo_profile_fb !== null"
                    v-lazy="{ src: post.users.photo_profile_fb, loading: 'https://i.postimg.cc/mk7RvYQk/home-forum.webp', error: 'https://i.postimg.cc/qvZq70jF/error-img-removebg-preview.webp'}"
                    class="w-12 h-12 rounded-full shadow-md shadow-gray-500" :alt="post.users.photo_profile_fb">
                <img v-else :src="'/img/default-profile.webp'" class="w-12 h-12 rounded-full shadow-md shadow-gray-500"
                    alt="https://www.freepik.com/vectors/secret-agent">
                <a :href="'/postingan/' + post.users.email"
                    class="text-xl text-gray-500 border-b-2 border-gray-500">{{ post.users.name }}</a>
            </div>
        </div>
        <div class="judul-section text-center mt-5">
            <span class="text-3xl font-medium text-gray-700">{{ post.judul }}</span>
        </div>
        <div class="tags-section flex justify-center items-center space-x-3 mt-2">
            <span class="font-semibold text-gray-600">Tags:</span>
            <div v-for="cat in post.categories" :key="cat.id"
                class="categories cursor-pointer flex items-center space-x-1 rounded bg-blue-500 hover:bg-blue-400 transition duration-300 text-white p-1 uppercase">
                <a :href="'/forum/postingan/categories/' + cat.slug">{{ cat.name_category }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </div>
        <div class="flex justify-center items-center space-x-2 mt-3 font-semibold">
            <span class="text-gray-700">Diposting pada: </span>
            <span class="text-gray-500">{{ post.created_at }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mb-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                    clip-rule="evenodd" />
            </svg>
        </div>
        <div class="px-3">
            <hr class="mt-5 mb-5">
        </div>
        <article class="description-section indent-4 px-5 space-y-3 leading-relaxed break-words" v-html="post.description">
        </article>
    </div>
</template>

<script>
    import {
        ref,
        toRef
    } from 'vue'
    export default {
        props: ['showPost'],
        async setup(props) {
            const post = ref(props.showPost.post)

            return {
                post,
            }
        }
    }

</script>

<style>

</style>
