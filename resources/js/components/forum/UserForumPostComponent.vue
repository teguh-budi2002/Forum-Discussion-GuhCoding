<template>
    <div class="content lg:col-span-2">
        <div class="w-full md:w-3/4 h-auto md:mx-auto bg-blue-200 outline outline-2 outline-blue-500 shadow-md shadow-blue-500 mt-5 rounded p-2"
            v-for="post in posts" :key="post.id" v-memo="[post]">
            <div class="md:flex md:items-center md:justify-between flex-none">
                <div class="left-item flex items-center space-x-3 text-blue-500">
                    <img v-if="post.users.photo_profile !== null"
                        v-lazy="{ src: `/storage/${post.users.photo_profile}`, loading: 'https://i.postimg.cc/mk7RvYQk/home-forum.webp', error: 'https://i.postimg.cc/qvZq70jF/error-img-removebg-preview.webp'}"
                        class="w-10 h-10 rounded-full" :alt="post.users.photo_profile">
                    <img v-else-if="post.users.photo_profile_fb !== null"
                        v-lazy="{ src: post.users.photo_profile_fb, loading: 'https://i.postimg.cc/mk7RvYQk/home-forum.webp', error: 'https://i.postimg.cc/qvZq70jF/error-img-removebg-preview.webp'}"
                        class="w-10 h-10 rounded-full" :alt="post.users.photo_profile_fb">
                    <img v-else :src="'/img/default-profile.webp'" class="w-12 h-12 rounded-full"
                        alt="https://www.freepik.com/vectors/secret-agent">
                    <p class="font-semibold">{{ post.users.name }}</p>
                </div>
                <div class="right-item lg:flex lg:items-center flex justify-center space-x-2">
                    <div class="tag-category md:block hidden text-blue-500">
                        <span class="text-sm font-semibold">Category</span>
                    </div>
                    <div v-for="categories in post.categories" :key="categories.id"
                        class="categories flex items-center space-x-1 rounded bg-blue-500 hover:bg-blue-400 cursor-pointer text-white p-1 uppercase">
                        <a :href="'forum/postingan/categories/' +  categories.slug">{{ categories.name_category }}</a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="post-text mt-2 text-gray-700">
                <a :href="'/forum/postingan/' + post.slug" class="text-lg hover:text-blue-500">{{ post.judul }}</a>
            </div>
        </div>
        <infinite-loading @infinite="load">
            <template #spinner>
                <div class="flex justify-center mt-5 mb-3">
                    <div class="loader"></div>
                </div>
            </template>
            <template #complete>
                <div class="flex justify-center mt-5">
                    <div
                        class="cursor-pointer bg-blue-300 hover:bg-blue-200 outline outline-2 outline-blue-600 text-blue-700 hover:text-blue-500 p-2 rounded-md transition duration-300">
                        <p>Postingan Tidak Ditemukan</p>
                    </div>
                </div>
            </template>
            <template #error="{retry}">
                <div class="text-center space-y-2 mt-5">
                    <p class="text-xl font-semibold text-blue-800">Ooopps,,, Sepertinya Ada Kesalahan</p>
                    <button
                        class="py-2.5 px-6 rounded bg-blue-400 hover:bg-blue-600 text-blue-800 hover:text-white focus:outline-none"
                        @click="retry">Muat Ulang</button>
                </div>
            </template>
        </infinite-loading>
    </div>
</template>
<script>
    import {
        ref
    } from 'vue'
    import 'v3-infinite-loading/lib/style.css'
    export default {
        async setup() {
            let posts = ref([])
            let page = 1

            await new Promise((r) => setTimeout(r, 2000))

            const load = async ($state) => {
                try {
                    const res = await axios.get('/api/get/post?page=' + page)

                    const json = await res.data.posts.data

                    if (json.length) {
                        setTimeout(() => {
                            posts.value.push(...json)
                            $state.loaded()
                        }, 1500)
                    } else {
                        $state.complete()
                    }
                    page++
                } catch (error) {
                    $state.error()
                }
            }

            return {
                posts,
                load,
            }
        }
    }

</script>
<style scoped>
    .loader {
        border: 8px solid #f3f3f3;
        border-radius: 50%;
        border-top: 8px solid #3498db;
        width: 50px;
        height: 50px;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

</style>
