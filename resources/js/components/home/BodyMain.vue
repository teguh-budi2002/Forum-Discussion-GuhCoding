<template>
    <div
        class="nav-home w-full fixed top-0 flex justify-between items-center bg-gradient-to-bl from-slate-700 to-slate-800 p-5 px-8 border-b-4 border-slate-500 shadow-md shadow-slate-300 z-50">
        <div class="logo-web">
            <p class="text-xl text__logo">Forum GuhCoding</p>
        </div>
        <ul class="flex space-x-8 items-center font-semibold text-gray-500">
            <li>
                <a href="/" class="hover:text-white transition duration-300">HOME</a>
            </li>
            <li>
                <a href="login" class="hover:text-white transition duration-300">LOGIN</a>
            </li>
            <li>
                <a href="register"
                    class="py-2.5 px-6 rounded bg-gradient-to-tr from-blue-500 to-blue-300 text-white transition duration-300">REGISTER</a>
            </li>
        </ul>
    </div>
    <div class="content w-full xl:h-screen h-full bg-slate-600 overflow-hidden">
        <div class="wrapper-content">
            <div class="w-full h-full grid xl:grid-cols-2 grid-cols-1">
                <div class="left-text lg:mt-56 md:mt-36 mt-32 text-start text-white mx-5 leading-tight space-y-4">
                    <p class="text-5xl font-semibold">Hello Developer,</p>
                    <p class="text-lg text-white">let's discuss programming and code with other developers.</p>
                    <p>HTML,JAVASCRIPT,CSS and Any other Framework</p>
                    <p class="text-xs">Forum GuhCoding has a goal so that we can interact with other developers and make
                        it easier for us to find any information related to coding and programming.</p>
                    <div class="text-start btn__to__forum lg:w-44 md:w-44 sm:w-44 pt-3">
                        <a href="forum" class="font-semibold text-white">
                            <span class="layer">FORUM</span>
                        </a>
                    </div>
                    <!-- Step Wizard Component -->
                    <div class="w-full py-6">
                        <div class="flex">
                            <div class="w-1/4">
                                <div class="relative mb-2">
                                    <div
                                        class="w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center">
                                        <span class="ml-2 text-white w-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="5" stroke="currentColor" class="w-6 h-6 font-semibold">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M4.5 12.75l6 6 9-13.5" />
                                            </svg>

                                        </span>
                                    </div>
                                </div>

                                <div class="text-xs text-center">Security Secure</div>
                            </div>

                            <div class="w-1/4">
                                <div class="relative mb-2">
                                    <div class="absolute flex align-center items-center align-middle content-center"
                                        style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                                        <div
                                            class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                                            <div class="w-0 bg-green-300 py-1 rounded" style="width: 100%;"></div>
                                        </div>
                                    </div>

                                    <div
                                        class="w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center">
                                        <span class="ml-2 text-white w-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="5" stroke="currentColor" class="w-6 h-6 font-semibold">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M4.5 12.75l6 6 9-13.5" />
                                            </svg>

                                        </span>
                                    </div>
                                </div>

                                <div class="text-xs flex items-start justify-center ">Build With <img :src="'/img/laravel.png'" class="w-auto h-5 block ml-2 mr-2" alt="laravel-image"> & <img :src="'/img/vue.png'" class="w-auto h-5 block" alt="vue-image"></div>
                            </div>

                            <div class="w-1/4">
                                <div class="relative mb-2">
                                    <div class="absolute flex align-center items-center align-middle content-center"
                                        style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                                        <div
                                            class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                                            <div class="w-0 bg-green-300 py-1 rounded" style="width: 100%;"></div>
                                        </div>
                                    </div>

                                    <div
                                        class="w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center">
                                        <span class="ml-2 text-white w-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="5" stroke="currentColor" class="w-6 h-6 font-semibold">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M4.5 12.75l6 6 9-13.5" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <div class="text-xs text-center">Page Speed Increase</div>
                            </div>

                            <div class="w-1/4">
                                <div class="relative mb-2">
                                    <div class="absolute flex align-center items-center align-middle content-center"
                                        style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                                        <div
                                            class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                                            <div class="w-0 bg-green-300 py-1 rounded" style="width: 100%;"></div>
                                        </div>
                                    </div>

                                    <div
                                        class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
                                        <span class="text-center text-gray-600 w-full">
                                            <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="24" height="24">
                                                <path class="heroicon-ui"
                                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <div class="text-xs text-center md:text-base">Finished</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right_content w-full xl:h-36 h-auto xl:mt-56 xl:mb-0 mt-12 mb-20 flex justify-center">
                    <div class="wrapper__code__content w-11/12 h-auto shadow-2xl shadow-black">
                        <div class="header bg-gradient-to-l from-gray-200 via-gray-50 to-gray-200 rounded-t-lg p-2">
                            <div class="header__wrapper flex justify-between items-center mx-8">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4"
                                    stroke="currentColor" class="w-6 h-6 text-slate-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                </svg>
                                <div class="circle flex items-center space-x-2">
                                    <div class="w-6 h-6 rounded-full bg-blue-500 shadow-lg shadow-blue-400"></div>
                                    <div class="w-6 h-6 rounded-full bg-green-500 shadow-lg shadow-green-400"></div>
                                    <div class="w-6 h-6 rounded-full bg-red-500 shadow-lg shadow-red-400"></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="body__code__theme w-full min-h-full p-2 bg-gradient-to-t from-black via-slate-900 to-black rounded-b-lg text-2xl">
                            <div class="wrapper__body__code space-y-4">
                                <div class="open_body text-red-500">
                                    <p>&lt;body&gt;</p>
                                </div>
                                <div class="value_body indent-3 flex items-center">
                                    <p class="tag__h1 text-red-500">&lt;h1&gt;</p>
                                    <p class="content__tag__h1 text-white">Hello Developer</p>
                                    <p class="close__tag__h1 text-red-500">&lt;/h1&gt;</p>
                                </div>
                                <div class="value_body_2 indent-3 flex items-center md:space-y-0 space-y-2">
                                    <p class="text-red-500">&lt;p&gt;</p>
                                    <p class="text-white">Welcome To Forum GuhCoding</p>
                                    <p class="text-red-500">&lt;/p&gt;</p>
                                </div>
                                <div class="close_body text-red-500">
                                    <p>&lt;/body&gt;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    }

</script>

<style scoped>
    .text__logo {
        color: #fff;
        text-shadow: 0 0 5px #fff,
            0 0 10px #fff,
            0 0 20px #fff,
            0 0 40px #0ff,
            0 0 80px #0ff,
            0 0 90px #0ff,
            0 0 100px #0ff,
            0 0 150px #0ff;
    }

    .btn__to__forum {
        background: hsl(214, 89%, 25%);
        border-radius: 8px;
        border: none;
        padding: 0;
        cursor: pointer;
        outline-offset: 4px;
        text-align: center;
    }

    .layer {
        display: block;
        padding: 8px 24px;
        border-radius: 5px;
        font-size: 1.25rem;
        background: hsl(233, 86%, 66%);
        color: white;
        transform: translateY(-5px);
    }

    .btn__to__forum:active .layer {
        transform: translateY(-2px);
    }

    .open_body {
        overflow: hidden;
        animation:
            typing-open-body 2s steps(7, end) forwards,
            blink-caret-open 1s step-end 2;
    }

    /* Animation For Open Body */
    @keyframes typing-open-body {
        from {
            width: 0%;
        }

        to {
            width: 18%;
        }
    }

    @keyframes blink-caret-open {

        0% {
            border-right: 4px solid rgb(224, 223, 222);
        }

        100% {
            border-right: none;
        }
    }

    .value_body {
        overflow: hidden;
        width: 0;
        white-space: nowrap;
        animation:
            typing-value-body 4s steps(27, end) 2000ms forwards,
            blink-caret-body 1s step-end 4 2000ms;
    }

    /* Animation For Value Body */

    @keyframes typing-value-body {
        from {
            width: 3%;
        }

        to {
            width: 65%;
        }
    }

    @keyframes blink-caret-body {

        0% {
            border-right: 4px solid rgb(224, 223, 222);
        }

        100% {
            border-right: none
        }
    }

    .value_body_2 {
        overflow: hidden;
        width: 0;
        white-space: nowrap;
        border-right: none;
        animation:
            typing-value-body2 4s steps(36, end) 6350ms forwards,
            blink-caret-body2 1s step-end 4 6350ms;
    }

    /* Animation For Value Body */
    @keyframes typing-value-body2 {
        from {
            width: 3%;
        }

        to {
            width: 85%;
        }
    }

    @keyframes blink-caret-body2 {

        0% {
            border-right: 4px solid rgb(224, 223, 222);
        }

        100% {
            border-right: none;
        }
    }

    .close_body {
        overflow: hidden;
        width: 0%;
        animation:
            typing-close-body 2s steps(7, end) 10300ms forwards,
            blink-caret-close 0.7s step-end infinite 10300ms;
    }

    /* Animation For Close Body */
    @keyframes typing-close-body {
        from {
            width: 0%
        }

        to {
            width: 18%;
        }
    }

    @keyframes blink-caret-close {

        from,
        to {
            border-color: transparent
        }

        18% {
            border-right: 4px solid rgb(224, 223, 222);
        }
    }

    @media screen and (max-width: 1280px) {
        .open_body {
            width: 100%;
            white-space: pre-wrap;
            overflow: visible;
            animation: none;
        }
        .value_body {
            flex-wrap: wrap;
            width: 100%;
            white-space: pre-wrap;
            overflow: visible;
            animation: none;
        }

        .value_body_2 {
            flex-wrap: wrap;
            width: 100%;
            white-space: pre-wrap;
            overflow: visible;
            animation: none;
        }

        .close_body {
            width: 100%;
            white-space: pre-wrap;
            overflow: visible;
            animation: none;
        }
    }

</style>
