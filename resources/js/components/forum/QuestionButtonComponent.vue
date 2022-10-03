<template>
    <div class="wrapper md:flex md:justify-start  flex justify-center">
        <div class="md:ml-5 m-0" v-if="isLoggin === true">
            <a href="forum/buat/pertanyaan"
                class="py-2.5 px-6 rounded bg-blue-500 hover:bg-blue-700 border-b-2 hover:border-blue-400 border-blue-800 text-white p-2">Buat
                Pertanyaan</a>
        </div>
        <div class="md:ml-5 m-0" v-else>
            <button type="button" data-modal-toggle="defaultModal" id="buttonModal"
                class="py-2 px-6 rounded bg-blue-500 hover:bg-blue-700 border-b-2 hover:border-blue-400 border-blue-800 text-white p-2 focus:outline-none">Buat
                Pertanyaan</button>
        </div>
        <modal-forum></modal-forum>
    </div>
</template>

<script>
    import {
        ref,
        onMounted
    } from 'vue'
    export default {
        setup() {
            const isLoggin = ref(null)

            onMounted(async () => {
                try {
                    const res = await axios.get('/user/status')
                    isLoggin.value = res.data.isLoggedIn
                } catch (err) {
                    console.log("err", err)
                }
            })

            return {
                isLoggin
            }
        },
    }

</script>

<style>

</style>
