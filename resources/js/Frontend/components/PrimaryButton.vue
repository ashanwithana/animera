<template>
    <button class="btn border-0" :disabled="disabled">{{ label }}</button>
</template>

<script>
export default {
    props: {
        label: {
            type: String,
            required: true
        },
        disabled:{
            type: [Boolean, String],
            required: false,
            default:false
        }
    }
}
</script>

<style>
.btn:disabled{
    color: white !important;
}
</style>