<template>
    <div class="w-full h-full">
        <div class="wrapper">
            <div class="pt-32 md:mb-20 md:px-0 px-6 md:mr-0 mr-3">
                <ButtonComponent />
                <Suspense>
                    <template #default>
                        <div class="parent-grid grid lg:grid-cols-3 grid-cols-1 lg:gap-5">
                            <UserForumPost />
                            <div v-if="response === 200"
                                class="rightContent rounded-t-md bg-white outline outline-1 outline-gray-300 mt-5 md:mb-0 mb-5 md:w-10/12 w-full h-fit md:p-2 p-5 lg:mx-0 md:mx-auto">
                                <div class="text-center uppercase text-gray-500 font-semibold space-y-5">
                                    <p>User Login</p>
                                </div>
                                <hr class="border-b border-gray-300 mt-2 mb-2">
                                <div v-for="user in users" :key="user.id"
                                    class="w-full h-auto bg-gray-50 mt-3 mb-3 rounded p-2 shadow-sm shadow-gray-400 relative">
                                    <div class="user-section flex items-center mt-2">
                                        <div class="img-user">
                                            <img v-if="user.photo_profile !== null"
                                                v-lazy="{ src: `/storage/${user.photo_profile}`, loading: 'https://i.postimg.cc/mk7RvYQk/home-forum.webp', error: 'https://i.postimg.cc/qvZq70jF/error-img-removebg-preview.webp'}"
                                                class="w-10 h-10 rounded mr-10" :alt="user.photo_profile">
                                            <img v-else-if="user.photo_profile_fb !== null"
                                                v-lazy="{ src: user.photo_profile_fb, loading: 'https://i.postimg.cc/mk7RvYQk/home-forum.webp', error: 'https://i.postimg.cc/qvZq70jF/error-img-removebg-preview.webp'}"
                                                class="w-10 h-10 rounded mr-10" :alt="user.photo_profile_fb">
                                            <img v-else :src="'/img/default-profile.webp'"
                                                class="w-10 h-10 rounded mr-10"
                                                alt="https://www.freepik.com/vectors/secret-agent">
                                        </div>
                                        <div class="username text-gray-600 hover:text-gray-500 font-semibold">
                                            <a :href="'/postingan/' + user.name">{{ user.name }}</a>
                                        </div>
                                        <div class="role-user text-center absolute -right-2 top-0">
                                            <span v-if="user.role_user === 'Super Admin'"
                                                class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900 border-b border-red-600">{{ user.role_user }}</span>
                                            <span v-else-if="user.role_user === 'Member'"
                                                class="bg-indigo-100 text-indigo-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-indigo-200 dark:text-indigo-900 border-b border-indigo-600">{{ user.role_user }}</span>
                                        </div>
                                    </div>
                                    <div class="last-login flex justify-end items-center space-x-3 text-center text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-gray-500">{{ user.last_login_at }}</span>
                                    </div>
                                </div>
                            </div>
                            <div v-else>
                                <div
                                    class="rightContent rounded-t-md bg-red-300 outline outline-1 outline-gray-300 mt-5 md:mb-0 mb-5 md:w-10/12 w-full h-fit md:p-2 p-5 lg:mx-0 md:mx-auto text-center font-semibold text-red-700">
                                    <p>{{ statusError }}</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 animate-spin mx-auto mt-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </template>
                    <template #fallback>
                        <loading-forum-component></loading-forum-component>
                    </template>
                </Suspense>
            </div>
        </div>
    </div>
</template>

<script>
    import UserForumPost from './components/forum/UserForumPostComponent.vue'
    import ButtonComponent from './components/forum/QuestionButtonComponent.vue'
    import {
        ref
    } from '@vue/reactivity'
    import {
        onMounted
    } from '@vue/runtime-core'
    export default {
        components: {
            UserForumPost,
            ButtonComponent,
        },
        setup() {
            const users = ref(null)
            const statusError = ref(null)
            const response = ref(null)

            async function getUser() {
                try {
                    const res = await axios.get('/api/get/users')

                    users.value = await res.data
                    response.value = await res.status
                } catch (error) {
                    statusError.value = await error.response.data.message
                    response.value = await error.response.status
                }

            }

            onMounted(() => {
                getUser()
            })

            return {
                users,
                statusError,
                response
            }
        }
    }

</script>

<style>
    /* .bg-img {
        overflow: hidden;
    }

    .bg-img::before {
        background-image: url('/img/navbar-img.webp');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center top;
        content: '';
        position: fixed;
        z-index: -3;
        will-change: transform;
        width: 100%;
        height: 100%;
    } */

    .show-modal {
        animation: modal 0.4s ease-in-out;
    }

    @keyframes modal {
        0% {
            opacity: 0.3;
            transform: translateY(-200px);
        }

        100% {
            opacity: 1;
            transform: translateY(0px);
        }
    }

</style>
