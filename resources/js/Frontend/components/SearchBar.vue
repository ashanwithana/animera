<template>
    <form class="input-group">
        <span class="input-group-text filter-icon border-0"><i class="fa-solid fa-bars"></i></span>
        <input type="search" class="form-control border-0 search-bar" :placeholder="placeholder">
        <button class="input-group-text border-0 search-icon" type="submit"><i
                class="fa-solid fa-magnifying-glass"></i></button>
    </form>
</template>

<script>
export default {
    props: {
        placeholder: {
            type: String,
            required: true
        }
    }
}
</script>

<style></style>