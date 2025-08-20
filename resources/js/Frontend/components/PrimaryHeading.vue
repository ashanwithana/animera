<template>
    <div class="heading-wrapper">
        <p class="secondary-font fw-bold welcome-text">{{ label }}</p>
    </div>
</template>

<script>
export default {
    props: {
        label: {
            type: String,
            required: true
        }
    }
}
</script>

<style scoped>

</style>