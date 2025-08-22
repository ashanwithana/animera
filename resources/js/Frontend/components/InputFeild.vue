<template>
    <div class="row mx-0 align-items-center pb-2">
        <div class="col-md-3 ps-0">
            <div class="input-heading">
                <p class="mb-0 input-heading-text">
                    {{label}}
                </p>
            </div>
        </div>
        <div class="col-md-9">
            <input :type="type" :placeholder="placeholder" :disabled="disable" class="form-control w-100 input-data rounded-0 shadow">
        </div>
    </div>
</template>

<script>
export default {
    props: {
        label: {
            type: String,
            required: true
        },
         type: {
            type: String,
            required: true
        },
         placeholder: {
            type: String,
            required: false
        },
         disable: {
            type: [Boolean, String],
            required: false,
            default:false
        }
    }
}
</script>

<style></style>