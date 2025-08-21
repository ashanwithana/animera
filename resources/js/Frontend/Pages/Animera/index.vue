<template>
  <Dashboard>
    <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
      <div class="feature-wrapper">
        <PrimaryHeading class="text-center animera-heading" label="Welcome to Animera!" />
        <div class="secondary-text-wrapper text-center">
          <p class="dm-sans welcome-sub-text animera-sub-heading"><i>Transforming veterinary care with smarter
              pet health management...</i></p>
          <div class="row justify-content-center">
            <div class="col-md-4">
              <img src="images/cat-dog.png" alt="" class="cat-dog-image w-100 h-100">
            </div>
          </div>
        </div>
      </div>
    </div>
  </Dashboard>
</template>

<script>
import Dashboard from '../../Layouts/Dashboard.vue';
import PrimaryHeading from '../../components/PrimaryHeading.vue';

export default {
  components: {
    Dashboard,
    PrimaryHeading
  }
}
</script>

<style></style>