<template>
    <QRLayout>
        <div class="topic-wrapper mt-2 pt-3 ps-5">
            <p class="table-heading mt-4">Pet Vaccines</p>
        </div>
        <div class="row mx-0 px-5">

            <div class="col-md-3">
                <div class="pet-pic-wrapper position-relative pt-5">
                    <img :src="pets.media[0].original_url" class="w-100 object-fit-cover" alt="">
                </div>
            </div>
            <div class="col-9">
                <div class="add-heading pt-3 pb-3 d-flex align-items-center" style="justify-content: space-between;">
                    <p class="mb-0 pet-add-topic">Vaccines the pet received....</p>
                    <p class="mb-0"><span class="fw-semibold pe-2">Date:</span> <span>{{ $page.props.current_date }}</span></p>
                </div>
                <div class="scroll">


                    <table class="table text-center table-bordered pet-table table-responsive">
                        <thead>
                            <tr class="sticky-top">
                                <th class=" custom-color" scope="col" style="min-width: 80px;">Date</th>
                                <th class=" custom-color" scope="col" style="min-width: 100px;">Vaccine Name</th>
                                <th class=" custom-color" scope="col" style="min-width: 100px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" class="py-3 custom-color">01/08/2024</td>
                                <td class="py-3 custom-color">Rabies Vaccine</td>
                                <td class="py-3 custom-color">
                                    <div>
                                        <Link><i class="fa-solid fa-pen text-black mx-2"></i></Link>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="py-3 custom-color">01/02/2025</td>
                                <td class="py-3 custom-color">Parvovirus Vaccine</td>
                                <td class="py-3 custom-color">
                                    <div>
                                        <Link><i class="fa-solid fa-pen text-black mx-2"></i></Link>
                                    </div>
                                </td>
                            </tr>
                            <tr v-if="data == 0">
                                <td colspan="7" class="text-muted">No records found</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-5">

                <div class="add-heading pt-3 pb-3">
                    <p class="mb-0 pet-add-topic">Pet</p>
                </div>
                <div class="inpu-data-wrapper">
                    <InputFeild label="Pet Name" type="text" :placeholder="pets.pet_name" disable="true" />
                    <InputFeild label="Type" type="text" :placeholder="pets.type" disable="true" />
                    <InputFeild label="Gender" type="text" :placeholder="pets.gender" disable="true" />
                    <InputFeild label="Breed" type="text" :placeholder="pets.breed" disable="true" />
                    <InputFeild label="DOB" type="text" :placeholder="pets.dob" disable="true" />
                    <InputFeild label="Age" type="text" :placeholder="pets.age" disable="true" />
                </div>
            </div>
            <div class="col-md-5 ms-5">
                <div class="add-heading pt-3 pb-3 d-flex align-items-center" style="justify-content: space-between;">
                    <p class="mb-0 pet-add-topic">Pet Owner</p>
                    <!-- <p class="mb-0"><span class="fw-semibold pe-3">Date</span> <span>05/07/2025</span></p> -->
                </div>
                <div class="input-data-wrapper">
                    <InputFeild label="Owner Name" type="text" :placeholder="pets.pet_owner" disable="true" />
                    <InputFeild label="Contact No." type="text" :placeholder="pets.p_no" disable="true" />
                    <InputFeild label="E-Mail" type="text" :placeholder="pets.email" disable="true" />
                    <!-- <InputFeild label="Username" type="text" placeholder="sanudi99" />
                    <InputFeild label="Password" type="text" placeholder="Taffy@S5" /> -->
                </div>
                <div class="row mx-0 justify-content-end  mt-5">
                    <div class="col-md-12 text-end">

                        <Link :href="route('pets.view', $page.props.pets.id)">
                        <PrimaryButton class="qr-btn cancle-btn py-2 px-4 fw-semibold mx-2" label="Cancle" />
                        </Link>
                        <Link>
                        <PrimaryButton class="add-treatment py-2 px-4 fw-semibold mx-2 text-white" label="Add Treatment" :disabled="$page.props.user === 'amith'" />
                        </Link>

                    </div>
                </div>
            </div>

        </div>
    </QRLayout>

</template>

<script>
import QRLayout from '../../Layouts/QRLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';
import InputFeild from '../../components/InputFeild.vue';
import PrimaryButton from '../../components/PrimaryButton.vue';
import Dashboard from '../../Layouts/Dashboard.vue';

export default {
    components: {
        QRLayout,
        Dashboard,
        InputFeild,
        PrimaryButton,
        Link
    
    },
    props:{
        pets:Object
    }
}
</script>

<style></style>