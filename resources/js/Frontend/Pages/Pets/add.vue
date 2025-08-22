<template>
  <Dashboard>
    <div class="topic-wrapper mt-2 pt-3 ps-5">
      <p class="table-heading mt-4">Pet Profile</p>
    </div>
    <div class="row mx-0 px-5">
      <div class="col-md-5">
        <div class="pet-pic-wrapper position-relative">
          <img src="/images/dog.png" class="w-100 object-fit-cover" alt="">
          <label for="petimg" type="button" class="file-btn"><i class="fa-solid fa-camera"></i></label>
          <input type="file" class="form-control d-none" id="petimg" aria-describedby="inputGroupFileAddon04"
            aria-label="Upload">
        </div>
        <div class="add-heading pt-3 pb-3">
          <p class="mb-0 pet-add-topic">Pet</p>
        </div>
        <div class="inpu-data-wrapper">
          <InputFeild label="Pet Code" type="text" placeholder="P001" />
          <InputFeild label="Pet Name" type="text" placeholder="Taffy" />
          <div class="row mx-0 align-items-center pb-2">
            <div class="col-md-3 ps-0">
              <div class="input-heading">
                <p class="mb-0 input-heading-text">
                  Type
                </p>
              </div>
            </div>
            <div class="col-md-9">
              <select class="form-select form-control input-data rounded-0" aria-label="Default select example">
                <option selected>Dog</option>
                <option value="1">Cat</option>
              </select>
            </div>
          </div>
          <div class="row mx-0 align-items-center pb-2">
            <div class="col-md-3 ps-0">
              <div class="input-heading">
                <p class="mb-0 input-heading-text">
                  Gender
                </p>
              </div>
            </div>
            <div class="col-md-9">
              <select class="form-select form-control input-data rounded-0" aria-label="Default select example">
                <option selected>Male</option>
                <option value="1">Female</option>
              </select>
            </div>
          </div>
          <div class="row mx-0 align-items-center pb-2">
            <div class="col-md-3 ps-0">
              <div class="input-heading">
                <p class="mb-0 input-heading-text">
                  Breed
                </p>
              </div>
            </div>
            <div class="col-md-9">
              <select class="form-select form-control input-data rounded-0" aria-label="Default select example">
                <option selected>Labrado</option>
                <option value="1">German Shepherd</option>
              </select>
            </div>
          </div>
          <InputFeild label="DOB" type="date" />
          <InputFeild label="Age" type="text" placeholder="2 Years" />
        </div>
      </div>
      <div class="col-md-5 ms-5">
        <div class="add-heading pt-3 pb-3 d-flex align-items-center" style="justify-content: space-between;">
          <p class="mb-0 pet-add-topic">Pet Owner</p>
          <p class="mb-0"><span class="fw-semibold pe-3">Date</span> <span>05/07/2025</span></p>
        </div>
        <div class="input-data-wrapper">
          <InputFeild label="Owner Code" type="text" placeholder="Q001" />
          <InputFeild label="Owner Name" type="text" placeholder="Sanudi Pinnawala" />
          <InputFeild label="Contact No." type="text" placeholder="0715314148" />
          <InputFeild label="E-Mail" type="text" placeholder="sanudisarithma1999@gmail.com" />
          <InputFeild label="Username" type="text" placeholder="sanudi99" />
          <InputFeild label="Password" type="text" placeholder="Taffy@S5" />
        </div>
       <div class="row mx-0 justify-content-center  mt-5">
        <div class="col-md-8">
           <PrimaryButton class="qr-btn py-2 px-4 fw-semibold w-75" label="Generate QR Code" />
        </div>
       </div>
       <div class="row mx-0 justify-content-end  mt-5">
        <div class="col-md-8">
          <Link :href="route('pets')">
           <PrimaryButton class="qr-btn cancle-btn py-2 px-4 fw-semibold mx-2" label="Cancle" />
          </Link>
           <PrimaryButton class="qr-btn submit-btn py-2 px-4 fw-semibold mx-2" label="Submit" />
        </div>
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