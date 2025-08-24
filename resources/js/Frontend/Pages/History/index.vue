<template>
    <QRLayout>
        <div class="topic-wrapper mt-2 pt-3 ps-5">
            <p class="table-heading mt-4">Pet Profile</p>
        </div>
        <div class="row mx-0 px-5">

            <div class="col-md-3">
                <div class="pet-pic-wrapper position-relative pt-5">
                    <img src="/images/dog.png" class="w-100 object-fit-cover" alt="">
                </div>
            </div>
            <div class="col-9">
                <div class="add-heading pt-3 pb-3 d-flex align-items-center" style="justify-content: space-between;">
                    <p class="mb-0 pet-add-topic">Reasons when visit a clinic...</p>
                    <p class="mb-0"><span class="fw-semibold pe-2">Date:</span> <span>{{ $page.props.current_date }}</span></p>
                </div>
                <div class="scroll">


                    <table class="table text-center table-bordered pet-table table-responsive">
                        <thead>
                            <tr class="sticky-top">
                                <th class=" custom-color" scope="col" style="min-width: 80px;">Date</th>
                                <th class=" custom-color" scope="col" style="min-width: 100px;">Reason</th>
                                <th class=" custom-color" scope="col" style="min-width: 100px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" class="py-3 custom-color">01/08/2024</td>
                                <td class="py-3 custom-color">Illness or injury treatment</td>
                                <td class="py-3 custom-color">
                                    <div>
                                        <Link><i class="fa-solid fa-pen text-black mx-2"></i></Link>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="py-3 custom-color">01/02/2025</td>
                                <td class="py-3 custom-color">Routine health check-up</td>
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
                    <InputFeild label="Pet Name" type="text" placeholder="Taffy" disable="true" />
                    <InputFeild label="Type" type="text" placeholder="Dog" disable="true" />
                    <InputFeild label="Gender" type="text" placeholder="Male" disable="true" />
                    <InputFeild label="Breed" type="text" placeholder="Labrado" disable="true" />
                    <InputFeild label="DOB" type="text" placeholder="20/04/2020" disable="true" />
                    <InputFeild label="Age" type="text" placeholder="2 Years" disable="true" />
                </div>
            </div>
            <div class="col-md-5 ms-5">
                <div class="add-heading pt-3 pb-3 d-flex align-items-center" style="justify-content: space-between;">
                    <p class="mb-0 pet-add-topic">Pet Owner</p>
                    <!-- <p class="mb-0"><span class="fw-semibold pe-3">Date</span> <span>05/07/2025</span></p> -->
                </div>
                <div class="input-data-wrapper">
                    <InputFeild label="Owner Name" type="text" placeholder="Sanudi Pinnawala" disable="true" />
                    <InputFeild label="Contact No." type="text" placeholder="0715314148" disable="true" />
                    <InputFeild label="E-Mail" type="text" placeholder="sanudisarithma1999@gmail.com" disable="true" />
                    <!-- <InputFeild label="Username" type="text" placeholder="sanudi99" />
                    <InputFeild label="Password" type="text" placeholder="Taffy@S5" /> -->
                </div>
                <div class="row mx-0 justify-content-end  mt-5">
                    <div class="col-md-12 text-end">

                        <Link :href="route('index')">
                        <PrimaryButton class="qr-btn cancle-btn py-2 px-4 fw-semibold mx-2" label="Cancle" />
                        </Link>
                        <Link>
                        <PrimaryButton class="add-treatment py-2 px-4 fw-semibold mx-2" label="Add Treatment" :disabled="$page.props.user === 'amith'" />
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
    
    }
}
</script>

<style></style>