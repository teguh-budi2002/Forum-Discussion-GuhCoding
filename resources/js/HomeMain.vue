<template>
    <Suspense>
        <template #default>
            <body-main></body-main>
        </template>
        <template #fallback>
            <LoadingHomeMain />
        </template>
    </Suspense>
</template>

<script>
import LoadingHomeMain from './components/home/LoadingHomeMain.vue'
    export default {
        components: {
            LoadingHomeMain
        },
        setup() {

            return {

            }
        }
    }

</script>

<style lang="scss" scoped>

</style>
