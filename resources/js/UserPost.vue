<template>
    <Suspense>
        <template #default>
            <div class="flex justify-center md:px-0 px-3">
             <post-component :show-post="{ post }"></post-component>
            </div>
        </template>
        <template #fallback>
            <loading-component></loading-component>
        </template>
    </Suspense>
</template>

<script>
    import {
        ref
    } from 'vue'
    export default {
        props: ['getPost'],
        setup(props) {
            let post = ref(props.getPost)

            return {
                post,
            }
        }
    }

</script>

<style>

</style>
