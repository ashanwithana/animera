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
                    <div>
                        <div class="img-pet-wrapper">
                            <img src="/images/taffy.png" class="w-100" alt="">
                        </div>
                        <p class="mypet-name text-center mb-0 pt-3">Taffy</p>
                        <p class="mypet-breed text-center">Labrado Dog</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <div class="img-pet-wrapper">
                            <img src="/images/belly.png" class="w-100" alt="">
                        </div>
                        <p class="mypet-name text-center mb-0 pt-3">Belly</p>
                        <p class="mypet-breed text-center">Persian Cat</p>
                    </div>
                </div>
            </div>
        </div>
    </Dashboard>
</template>

<script>
import Dashboard from '../../Layouts/Dashboard.vue';
export default {
    components: {
        Dashboard
    }
}
</script>

<style></style>