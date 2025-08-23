<template>
    <Topnavigationbar />

    <div class="row mx-0">
        <div class="col px-0" style="max-width: 300px;">
            <Sidenavbar2 />
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
import Sidenavbar2 from './partials/Sidenavbar2.vue';

export default {
    components: {
        Topnavigationbar,
        Footer,
        Sidenavbar2

    }
}
</script>

<style></style>