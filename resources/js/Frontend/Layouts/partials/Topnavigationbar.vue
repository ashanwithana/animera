<template>
  <nav class="navbar position-fixed w-100" style="background-color: transparent;">
    <div class="container-fluid nav-container">
      <Link :href="route('index')" class="navbar-brand">
        <img src="images/animera-logo.png" alt="animera-logo" width="90">
      </Link>
    </div>
  </nav>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
  components: {
    Link
  },
  data() {
    return {
      user: 1,
    }
  }
}
</script>

<style></style>