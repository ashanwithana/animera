<template>
  <nav class="navbar position-fixed w-100">
    <div class="container-fluid position-relative">
      <a class="navbar-brand" href="#">
        <img src="images/animera-logo.png" alt="Bootstrap" width="90">
      </a>
      <div class="login-btn-wrapper">
        <div class="position-absolute" style="top: 10px; right:20px;">
          <div v-if="user == 1">
            <Link type="button" class="text-black" :href="route('login')">Login <i
              class="fa-solid fa-right-to-bracket ps-1"></i></Link>
          </div>
          <div v-else>
            <Link type="button" class="text-black">Logout <i class="fa-solid fa-arrow-right-from-bracket ps-1"></i></Link>
          </div>
        </div>
      </div>
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