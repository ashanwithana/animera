<template>
  <Dashboard>
    <div class="container mt-5 pt-5">
      <div class="row mx-0 pb-4 align-items-center">
        <div class="col-md-6 text-start">
          <p class="mb-0 my-pet-records">
            Pet Crossing
          </p>

        </div>
        <div class="col-md-6 text-end">
          <p class="mb-0"><span class="fw-semibold pe-3">Date</span> <span>05/07/2025</span></p>

        </div>
      </div>
      <div class="row mx-0 justify-content-center">
        <div class="col-md-5">
          <p class="dm-sans text-center crossing-heading"><i>Find Suitable breeding partners for your pet and consult a
              veterinary expert...</i></p>
        </div>
      </div>
      <div class="row mx-0 pt-4 text-center">
        <div class="col-md-2">
          <div class="img-crossing-wrapper">
            <div class="img-crossing-wrapper position-relative">
              <img src="/images/sandy.png" class="w-100" alt="">
              <div
                class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center top-0 show-records rounded rounded-3">
                <Link :href="route('view')" class="bg-secondary px-3 py-2 text-white rounded">Show Details</Link>
              </div>
            </div>
            <p class="mypet-name text-center mb-0 pt-3">Sandy</p>
            <p class="mypet-breed text-center">Golden Retriever Dog</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="img-crossing-wrapper">
            <div class="img-crossing-wrapper position-relative">
              <img src="/images/oliver.png" class="w-100" alt="">
              <div
                class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center top-0 show-records rounded rounded-3">
                <Link class="show-record-btn bg-secondary px-3 py-2 text-white rounded">Show Details</Link>
              </div>
            </div>
            <p class="mypet-name text-center mb-0 pt-3">Oliver</p>
            <p class="mypet-breed text-center">Bulldog</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="img-crossing-wrapper">
            <div class="img-crossing-wrapper position-relative">
              <img src="/images/daisy.png" class="w-100" alt="">
              <div
                class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center top-0 show-records rounded rounded-3">
                <Link class="show-record-btn bg-secondary px-3 py-2 text-white rounded">Show Details</Link>
              </div>
            </div>
            <p class="mypet-name text-center mb-0 pt-3">Daisy</p>
            <p class="mypet-breed text-center">Rottweiler Dog</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="img-crossing-wrapper">
            <div class="img-crossing-wrapper position-relative">
              <img src="/images/toby.png" class="w-100" alt="">
              <div
                class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center top-0 show-records rounded rounded-3">
                <Link class="show-record-btn bg-secondary px-3 py-2 text-white rounded">Show Details</Link>
              </div>
            </div>
            <p class="mypet-name text-center mb-0 pt-3">Toby</p>
            <p class="mypet-breed text-center">Labrado Dog</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="img-crossing-wrapper">
            <div class="img-crossing-wrapper position-relative">
              <img src="/images/boxer.png" class="w-100" alt="">
              <div
                class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center top-0 show-records rounded rounded-3">
                <Link class="show-record-btn bg-secondary px-3 py-2 text-white rounded">Show Details</Link>
              </div>
            </div>
            <p class="mypet-name text-center mb-0 pt-3">Boxer</p>
            <p class="mypet-breed text-center">German Shepherd Dog</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="img-crossing-wrapper">
            <div class="img-crossing-wrapper position-relative">
              <img src="/images/luna.png" class="w-100" alt="">
              <div
                class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center top-0 show-records rounded rounded-3">
                <Link class="show-record-btn bg-secondary px-3 py-2 text-white rounded">Show Details</Link>
              </div>
            </div>
            <p class="mypet-name text-center mb-0 pt-3">Luna</p>
            <p class="mypet-breed text-center">Shih Tzu Dog</p>
          </div>
        </div>
      </div>
    </div>
  </Dashboard>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Dashboard from '../../Layouts/Dashboard.vue';
export default {
  components: {
    Dashboard,
    Link
  }
}
</script>

<style></style>