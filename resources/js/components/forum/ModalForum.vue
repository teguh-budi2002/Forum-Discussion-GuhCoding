<template>
<Teleport to="#modal-regis">
<!-- Main Modal -->
        <div id="defaultModal" data-modal-show="false" aria-hidden="true"
            class="hidden show-modal overflow-x-hidden overflow-y-auto fixed h-modal md:h-full md:top-8 left-0 right-0 z-50 justify-center items-center">
            <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
                <!-- Modal content -->
                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-3 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-gray-900 text-xl lg:text-2xl font-semibold dark:text-white">
                            FORUM GUHCODING
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="defaultModal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-1">
                        <div class="img ml-20">
                            <img :src="'/img/home-forum.webp'" class="h-60 w-auto" alt="modal image">
                        </div>
                        <p class="text-gray-700 text-xl text-center leading-relaxed dark:text-gray-400">
                            Kamu Belum Login!
                        </p>
                        <p class="text-gray-500 text-base text-center leading-relaxed dark:text-gray-400">
                            Silahkan daftarkan akun anda agar dapat menggunakan
                            fitur pada Forum GuhCoding
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex space-x-2 items-center p-3 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <a href="auth/register" type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">REGISTER</a>
                        <button data-modal-toggle="defaultModal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Not
                            Now!</button>
                    </div>
                </div>
            </div>
        </div>
</Teleport>
</template>

<script>
export default {

}
</script>

<style>

</style>