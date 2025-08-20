<template>
    <AppLayout>
    <div class="container-fluid">
        <Welcome />
    </div>
    </AppLayout>
</template>
<script>
import Welcome from './partials/welcome.vue';
import AppLayout from '../../Layouts/AppLayout.vue';



export default {

    components: {
        AppLayout,
        Welcome
    },
    data() {
        return {

        }
    },
    methods: {

    }
};
</script>

<style scoped>

</style>
