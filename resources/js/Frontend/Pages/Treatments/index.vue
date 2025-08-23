<template>
    <QRLayout>
        <div class="topic-wrapper mt-2 pt-3 ps-5">
            <p class="table-heading mt-4">Today's Treatment</p>
        </div>
        <div class="row mx-0 px-5">

            <div class="col-md-3">
                <div class="pet-pic-wrapper position-relative pt-5">
                    <img src="/images/dog.png" class="w-100 object-fit-cover" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <p class="mb-0 pet-add-topic">Reasons</p>
                <div class="form-check pb-3 pt-4">
                    <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked :disabled="$page.props.user === 'amith'">
                    <label class="form-check-label" for="checkChecked">
                        Illness or injury treatment
                    </label>
                </div>
                <div class="form-check pb-3">
                    <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked :disabled="$page.props.user === 'amith'">
                    <label class="form-check-label" for="checkChecked">
                        Routine health check-up
                    </label>
                </div>
                <div class="form-check pb-3">
                    <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked :disabled="$page.props.user === 'amith'">
                    <label class="form-check-label" for="checkChecked">
                        Emergency care
                    </label>
                </div>
                <div class="form-check pb-3">
                    <input class="form-check-input" type="checkbox" value="" id="checkChecked" checked :disabled="$page.props.user === 'amith'">
                    <label class="form-check-label" for="checkChecked">
                        Preventive treatments (deworming, flea/tick control)
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <p class="mb-0 text-end"><span class="fw-semibold pe-2">Date:</span> <span>{{ $page.props.current_date
                }}</span></p>
                <div class="inpu-data-wrapper pt-3">

                    <InputFeild label="Age" type="text" placeholder="2 Years" disable="true" />
                    <InputFeild label="Weight" type="text" placeholder="38 Kg" disable="true" />
                </div>
            </div>
            <div class="col-6">
                <div class="add-heading mt-5 pb-3 d-flex align-items-center" style="justify-content: space-between;">
                    <p class="mb-0 pet-add-topic">Vaccine Name</p>
                </div>
                <div class="scroll">
                    <table class="table text-center table-bordered pet-table table-responsive">
                        <thead>
                            <tr class="sticky-top">
                                <th class=" custom-color" scope="col" style="min-width: 80px;">Code</th>
                                <th class=" custom-color" scope="col" style="min-width: 100px;">Vaccine Name</th>
                                <th class=" custom-color" scope="col" style="min-width: 100px;">Qty.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" class="py-3 custom-color">V001</td>
                                <td class="py-3 custom-color">Rabies Vaccine</td>
                                <td class="py-3 custom-color">
                                    1
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="py-3 custom-color">V002</td>
                                <td class="py-3 custom-color">Parvovirus Vaccine</td>
                                <td class="py-3 custom-color">
                                    1
                                </td>
                            </tr>
                            <tr v-if="data == 0">
                                <td colspan="7" class="text-muted">No records found</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-5 ms-5 mt-5">
                <div class="pb-4">
                    <p class=" pet-add-topic">Next Treatment Date</p>
                    <input type="date" class="form-control w-100 input-data rounded-0 shadow" :disabled="$page.props.user === 'amith'" v-model="date">
                </div>
                <div>
                    <p class=" pet-add-topic">Medicine Prescription</p>
                    <textarea class="form-control w-100 input-data rounded-0 shadow"
                        :disabled="$page.props.user === 'amith'" rows="3">Medicine Details</textarea>
                </div>
                <div class="row mx-0 justify-content-end  mt-5">
                    <div class="col-md-12 text-end">

                        <Link :href="route('history')">
                        <PrimaryButton class="qr-btn cancle-btn py-2 px-4 fw-semibold mx-2" label="Cancle" />
                        </Link>
                        <Link>
                        <PrimaryButton class="add-treatment py-2 px-4 fw-semibold mx-2 text-white" label="Submit"
                            :disabled="$page.props.user === 'amith'" />
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
    data() {
        return {
            date: this.formatDate('20/12/2025')
        }
    },
    methods: {
        formatDate(d) {
            const [day, month, year] = d.split('/')
            return `${year}-${month}-${day}`
        }
    }
}
</script>

<style>
.form-check-input {
    box-shadow: none !important;
}

.form-check-input:checked {
    background-color: black !important;
    border-color: black !important;
}
</style>