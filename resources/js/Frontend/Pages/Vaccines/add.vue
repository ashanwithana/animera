<template>
    <Dashboard>
        <div class="topic-wrapper mt-2 pt-3 ps-5">
            <p class="table-heading mt-4">New Vaccine Stock</p>
        </div>
        <div class="row mx-0 px-5">
            <div class="col-md-6">
                <div class="inpu-data-wrapper pt-3">
                    <InputFeild label="Vaccine Code" type="text" placeholder="V001" />
                    <InputFeild label="Vaccine Name" type="text" placeholder="Distemper Vaccine" />
                    <InputFeild label="Quantity" type="text" placeholder="400" />
                    <InputFeild label="Expity Date" type="date"  />
                </div>
            </div>
            <div class="row mx-0 justify-content-end">
                <div class="col-md-8 text-end">
                    <Link :href="route('vaccines')">
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