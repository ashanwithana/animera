<template>
    <Dashboard>
        <div class="topic-wrapper mt-2 pt-3 ps-5">
            <p class="table-heading mt-4">Pet Profile</p>
        </div>
        <div class="add-heading pt-3 d-flex pb-3 pe-5" style="justify-content: end;">

            <p class="mb-0"><span class="fw-semibold pe-3">Date</span> <span>05/07/2025</span></p>
        </div>
        <div class="row mx-0 px-5">
            <div class="col-md-5">
                <div class="pet-pic-wrapper position-relative pb-2">
                    <img src="/images/jagath.png" class="w-100 object-fit-cover" alt="">
                    <label for="petimg" type="button" class="file-btn"><i class="fa-solid fa-camera"></i></label>
                    <input type="file" class="form-control d-none" id="petimg" aria-describedby="inputGroupFileAddon04"
                        aria-label="Upload">
                </div>
                <div class="inpu-data-wrapper pt-3">
                    <InputFeild label="User Code" type="text" placeholder="P001" />
                    <InputFeild label="Name" type="text" placeholder="Jagath Fernando" />
                    <div class="row mx-0 align-items-center pb-2">
                        <div class="col-md-3 ps-0">
                            <div class="input-heading">
                                <p class="mb-0 input-heading-text">
                                    Type
                                </p>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select form-control input-data rounded-0"
                                aria-label="Default select example">
                                <option selected>Veterinarian</option>
                                <option value="1">Staff</option>
                                <option value="1">Pet Owner</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mx-0 align-items-center pb-2">
                        <div class="col-md-3 ps-0">
                            <div class="input-heading">
                                <p class="mb-0 input-heading-text">
                                    Gender
                                </p>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select form-control input-data rounded-0"
                                aria-label="Default select example">
                                <option selected>Male</option>
                                <option value="1">Female</option>
                            </select>
                        </div>
                    </div>

                    <InputFeild label="Contact No." type="text" placeholder="071-5316555" />
                    <InputFeild label="E-Mail" type="text" placeholder="drjagath@gmail.com" />
                </div>
            </div>
            <div class="col-md-5 ms-5">
                <div class="input-data-wrapper">
                    <InputFeild label="Username" type="text" placeholder="jagath" />
                    <InputFeild label="Password" type="text" placeholder="jagath@90" />
                </div>

            </div>
            <div class="row mx-0 justify-content-end">
                <div class="col-md-8 text-end">
                    <Link :href="route('users')">
                    <PrimaryButton class="qr-btn cancle-btn py-2 px-4 fw-semibold mx-2" label="Cancle" />
                    </Link>
                    <PrimaryButton class="qr-btn submit-btn py-2 px-4 fw-semibold mx-2" label="Submit" />
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