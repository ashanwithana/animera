<template>
    <Topnavigationbar />

    <div class="row mx-0">
        <div class="col px-0" style="max-width: 300px;">
            <Sidenavbar />
        </div>
        <div class="col px-0">
            <slot />
        </div>
    </div>

    <Footer />
</template>

<script>
import Topnavigationbar from './partials/Topnavigationbar.vue';
import Footer from './partials/Footer.vue';
import Sidenavbar from './partials/Sidenavbar.vue';

export default {
    components: {
        Topnavigationbar,
        Footer,
        Sidenavbar

    },
    mounted(){
         const user = sessionStorage.getItem('user');
 console.log(user);
    }
}
</script>

<style></style>