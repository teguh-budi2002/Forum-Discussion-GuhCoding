<template>
    <div class="w-full h-screen overflow-hidden relative">
        <div class="bg-main">
            <div class="nav-menu flex justify-between items-center mx-16 pt-7">
                <div class="logo-web cursor-pointer text-2xl flex space-x-3">
                    <p class="text-teal-100 font-medium">FORUM</p>
                    <p class="font-semibold text-teal-700">GUHCODING</p>
                </div>
                <div class="menu-nav sm:block hidden">
                    <ul class="flex items-center space-x-10 font-semibold">
                        <li>
                            <a href="" class="text-white">HOME</a>
                        </li>
                        <li>
                            <a href="auth/register" class="text-white">REGISTER</a>
                        </li>
                        <li>
                            <a href="auth/login"
                                class="menu-login py-2 px-6 rounded-full outline outline-2 outline-white text-white transition duration-300">LOGIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="left-section grid grid-cols-1 md:mt-72 mt-52 md:ml-16 ml-0 md:px-0 px-3">
             <div class="wrapper-main-content z-20 w-full md:w-96 h-fit p-7 md:p-0  md:bg-transparent md:outline-none outline outline-2 outline-teal-400 rounded">
            <div class="text-teal-700">
                <div class="mb-5 space-y-2 text-center">
                    <h1 class="text-4xl font-semibold">Hallo Developer</h1>
                    <h2 class="text-lg">Temukan Ilmu dan Relasi Dengan Join Forum GuhCoding</h2>
                </div>
            </div>
            <div class="btn-forum text-center">
                <a href="forum"
                    class="button-forum py-2.5 px-12 rounded-full text-white border-b-4 border-teal-500">FORUM</a>
            </div>
             </div>
        </div>
    </div>
</template>

<style>
    .bg-main {
        position: absolute;
        z-index: 2;
        width: 100%;
        height: 100%;
        background-image: url('/img/bg-main2.png');
        background-position: top right;
        background-size: 60vmax;
        background-repeat: no-repeat;
    }

    .logo-web {
        position: relative;
        width: auto;
        height: 100%;
        padding: 8px;
        border-radius: 8px;
        transform: rotate(5deg);
        background-color: #16acc3;
        border-bottom: 4px solid #1a7e8d;
        transition: transform 0.3s ease-in-out;
        animation: wiggle 0.3s ease-in-out alternate-reverse infinite;
    }

    .logo-web::before {
        content: "";
        position: absolute;
        bottom: 10%;
        left: -1%;
        z-index: -3;
        width: 230px;
        height: 38px;
        transform: rotate(-3deg);
        border-radius: 5px;
        background-color: #1dcbe6;
        border-bottom: 3px solid #03323a;
        animation: wiggle2 0.4s ease-in-out alternate-reverse infinite;
    }

    .logo-web:hover {
        animation: none;
        transform: rotate(0deg);
    }

    .logo-web:hover::before {
        animation: none;
        transform: rotate(0deg);
    }

    @keyframes wiggle {
        0% {
            transform: rotate(-2deg);
        }

        100% {
            transform: rotate(2deg);
        }
    }

    @keyframes wiggle2 {
        0% {
            transform: rotate(6deg);
        }

        100% {
            transform: rotate(-6deg);
        }
    }

    .menu-login:hover {
        background-color: #0093AA;
        outline: 2px solid #0093AA;
    }

    .button-forum {
        background-color: #0093AA;
    }

   @media screen and (max-width: 768px) {
        .bg-main {
            background-size: cover;
        }

        .logo-web {
            width: auto;
            position: relative;
            bottom: 40%;
            left: 10%;
        }

        .btn-forum {
            text-align: center;
        }

        .wrapper-main-content {
            background-color: rgba(21, 236, 184, 0.6);
        }
    }

</style>
