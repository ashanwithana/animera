<template>
    <Dashboard>
        <div class="topic-wrapper mt-5 pt-4 ps-5 d-flex align-items-center" style="justify-content: space-between;">
            <p class="table-heading mt-4">Pet Crossing</p>
            <p class="mb-0 pe-5"><span class="fw-semibold pe-3">Date</span> <span>05/07/2025</span></p>
        </div>
        <div class="">
            <div class="row mx-0 px-5">
                <div class="col-md-6">

                    <div class="add-heading pt-2 pb-3">
                        <p class="mb-0 pet-add-topic">Pet Owner Details</p>
                    </div>
                    <div class="inpu-data-wrapper">
                        <InputFeild label="OWner Name" type="text" placeholder="Gayan Kumara" :disable="true" />
                        <InputFeild label="Owner Contact" type="text" placeholder="077-5522331" :disable="true" />
                        <InputFeild label="Owner Address" type="text"
                            placeholder="No.23, Galle Road, Panadura, Sri Lanka" :disable="true" />
                        <InputFeild label="Owner E-Mail" type="text" placeholder="gayan123@gmail.com" :disable="true" />
                    </div>
                    <p class="dm-sans text-center pt-5"><i>For any additional details or clarifications, feel free to
                            reach
                            out directly to our veterinary consultant...</i>
                    </p>
                    <div class="text-center">
                        <button class="btn border-0 qr-btn py-2 px-4 fw-semibold w-50 text-center"><i
                                class="fa-solid fa-phone-volume pe-3"></i>Veterinarian Consultant</button>
                    </div>
                </div>
                <div class="col-md-6 ps-5">
                    <div class="row justify-content-center">
                        <div class="col-md-5 text-center">
                            <div class="crossing-pet-img">
                                <img src="/images/sandy.png" class="w-100" alt="">
                            </div>
                            <p class="mypet-name text-center mb-0 pt-3">Taffy</p>
                            <p class="mypet-breed text-center">Labrado Dog</p>
                        </div>
                    </div>
                    <div class="row mx-0 justify-content-end  mt-5">
                        <div class="col-md-8">
                            <Link :href="route('view')">
                            <PrimaryButton class="qr-btn cancle-btn py-2 px-4 fw-semibold mx-2" label="Go Back" />
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Dashboard>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import InputFeild from '../../components/InputFeild.vue';
import PrimaryButton from '../../components/PrimaryButton.vue';
import Dashboard from '../../Layouts/Dashboard.vue';


export default {
    components: {
        Dashboard,
        InputFeild,
        PrimaryButton,
        Link

    }
}
</script>

<style></style>