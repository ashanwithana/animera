<template>
    <Dashboard>
        <div class="topic-wrapper mt-5 pt-4 ps-5 d-flex align-items-center" style="justify-content: space-between;">
            <p class="table-heading mt-4">Pet Profile</p>
            <p class="mb-0 pe-5"><span class="fw-semibold pe-3">Date</span> <span>05/07/2025</span></p>
        </div>
        <div class="">
            <div class="row mx-0 px-5">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="crossing-pet-img">
                                <img src="/images/sandy.png" class="w-100" alt="">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <p class="mypet-name text-center mb-0 pt-3">Taffy</p>
                            <p class="mypet-breed text-center">Labrado Dog</p>
                            <Link :href="route('owner')">
                            <PrimaryButton class="qr-btn py-2 px-4 fw-semibold w-100" label="Pet Owner Details" />
                            </Link>
                        </div>
                    </div>
                    <div class="add-heading pt-5 pb-3">
                        <p class="mb-0 pet-add-topic">Pet Details</p>
                    </div>
                    <div class="inpu-data-wrapper">
                        <InputFeild label="Pet ID" type="text" placeholder="PET-001" :disable="true" />
                        <InputFeild label="Pet Name" type="text" placeholder="Sandy" :disable="true" />
                        <InputFeild label="Pet Type" type="text" placeholder="Dog" :disable="true" />
                        <InputFeild label="Breed" type="text" placeholder="Golden Retriever" :disable="true" />
                        <InputFeild label="Color" type="text" placeholder="Goldern Yellow" :disable="true" />
                        <InputFeild label="DOB" type="text" placeholder="20/07/2024" :disable="true" />
                        <InputFeild label="Weight" type="text" placeholder="40 Kg" :disable="true" />
                        <InputFeild label="Vaccination Status" type="text"
                            placeholder="Rabies ,Parvovirus  - Up to date 05/06/2025" :disable="true" />
                        <InputFeild label="Medical History" type="text"
                            placeholder="Minor Skin allergy already treated. " :disable="true" class="pb-5" />

                    </div>
                </div>
                <div class="col-md-6 ps-5">

                    <div class="input-data-wrapper">
                        <InputFeild label="Crossing History" type="text" placeholder="Not crossed yet"
                            :disable="true" />
                        <div class="row mx-0 align-items-center pb-2">
                            <div class="col-md-3 ps-0">
                                <div class="input-heading">
                                    <p class="mb-0 input-heading-text">
                                        Certifications
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <textarea class="form-control w-100 input-data rounded-0 shadow" rows="3" disabled>Pedigree Certificate - Registered with Sri Lanka
Kennel Club, Reg No. SLKC-LAB-2023-1234</textarea>
                            </div>
                        </div>
                        <div class="row mx-0 align-items-center pb-2">
                            <div class="col-md-3 ps-0">
                                <div class="input-heading">
                                    <p class="mb-0 input-heading-text">
                                        Microchip Regi.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <textarea class="form-control w-100 input-data rounded-0 shadow" disabled>Microchip No: 985141001234567  
Registered under Gayan Kumara </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0 justify-content-end  mt-5">
                        <div class="col-md-8">
                            <Link :href="route('crossing')">
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