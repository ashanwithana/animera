<template>
    <div>
        <Topnavigationbar style="top: 0;" />

        <slot />

        <Footer />

    </div>

</template>
<script setup>

</script>

<script>
import Topnavigationbar from './partials/Topnavigationbar.vue';
import Footer from './partials/Footer.vue';


export default {
    components: {
        Topnavigationbar,
        Footer
    },
    mounted() {
        
    }
}
</script>

<style>

</style>