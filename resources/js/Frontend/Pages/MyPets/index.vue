<template>
    <Dashboard>
        <div class="container mt-3 pt-5">
            <div class="row mx-0 justify-content-center">
                <div class="col-md-6 text-center">
                    <p class="mb-0 fanwood my-pet-heading">
                        Where every pet’s story begins
                        with care...
                    </p>
                </div>
            </div>
            <div class="row mx-0 pt-4" style="justify-content: space-evenly;">
                <div class="col-md-3">
                    <Link :href="route('details')">
                        <div class="img-pet-wrapper">
                            <img src="/images/taffy.png" class="w-100" alt="">
                        </div>
                        <p class="mypet-name text-center mb-0 pt-3">Taffy</p>
                        <p class="mypet-breed text-center">Labrado Dog</p>
                    </Link>
                </div>
                <div class="col-md-3">
                    <Link>
                        <div class="img-pet-wrapper">
                            <img src="/images/belly.png" class="w-100" alt="">
                        </div>
                        <p class="mypet-name text-center mb-0 pt-3">Belly</p>
                        <p class="mypet-breed text-center">Persian Cat</p>
                    </Link>
                </div>
            </div>
        </div>
    </Dashboard>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Dashboard from '../../Layouts/Dashboard.vue';
export default {
    components: {
        Dashboard,
        Link
    }
}
</script>

<style></style>