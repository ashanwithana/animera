<template>
    <Dashboard>
        <div class="container mt-3 pt-5">
            <div class="row mx-0 pb-4">
                <div class="col-md-6 text-start">
                    <p class="mb-0 my-pet-records">
                      Pet Records
                    </p>
                </div>
            </div>
            <div class="row mx-0 pt-4">
                <div class="col-md-2">
                    <div class="">
                        <div class="img-pet-wrapper position-relative">
                            <img src="/images/taffy.png" class="w-100" alt="">
                            <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center top-0 show-records rounded rounded-3">
                              <Link class="bg-secondary px-3 py-2 text-white rounded">Show Records</Link>
                            </div>
                        </div>
                        <p class="mypet-name text-center mb-0 pt-3">Taffy</p>
                        <p class="mypet-breed text-center">Labrado Dog</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="">
                        <div class="img-pet-wrapper position-relative">
                            <img src="/images/belly.png" class="w-100" alt="">
                            <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center top-0 show-records rounded rounded-3">
                              <Link class="show-record-btn bg-secondary px-3 py-2 text-white rounded">Show Records</Link>
                            </div>
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