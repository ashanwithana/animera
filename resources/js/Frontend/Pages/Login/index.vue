<template>
  <AppLayout2>
    <section class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
      <div class="login-wrapper w-100">

        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="img-wrapper text-center">
              <img src="images/cat-dog.png" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <h1 class="login-welcome-text text-center pb-5">Welcome to Animera!</h1>
            <h3 class="card-subtitle-login mb-5 text-center">Log In</h3>
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="mb-4">
                 
                  <input type="email" class="form-control input-field py-2" id="FormControlInput1" placeholder="Username">
                </div>
                <div class="mb-4">
                  <div class="w-100 position-relative">
                    <input :type="showPassword ? 'text' : 'password'" class="form-control input-field"
                      id="password" v-model="password" placeholder="Password">
                    <span class="position-absolute show-hide-btn" style="background-color: transparent;">
                      <label type="button" class="input-group-text border-0" for="checkbox1"
                        style="background-color: transparent;"><i
                          :class="showPassword ? 'fa-regular fa-eye' : 'fa-regular fa-eye-slash'" class="pe-2"
                          style="color: #D885A3; background-color:transparent; font-size:12px"></i></label>
                      <input type="checkbox" class="d-none" id="checkbox1" v-model="showPassword">
                    </span>
                  </div>
                  <Link class="forgot-pwd">Forgot Password ?</Link>
                </div>
                <div class="login-btn-wrapper">
                  <PrimaryButton class="home-btn w-100 rounded-0" label="Login" />
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </AppLayout2>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import PrimaryHeading from '../../components/PrimaryHeading.vue';
import AppLayout2 from '../../Layouts/AppLayout2.vue';
import PrimaryButton from '../../components/PrimaryButton.vue';

export default {
  components: {
    AppLayout2,
    PrimaryHeading,
    Link,
    PrimaryButton
  },
  data() {
    return {
      showPassword: false
    }
  },
  mounted() {

  },
}
</script>

<style>
.input-field:focus {
  background-color: white !important;
  border-color: white !important;
}
</style>