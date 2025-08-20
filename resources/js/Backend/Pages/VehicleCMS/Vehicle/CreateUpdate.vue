<template>
  <AppLayout>
    <div class="row">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h5>Vehicle Manufacture</h5>
          <p>Manage Vehicle Manufacture.</p>
        </div>
        <hr />
        <div class="card-body">
          <form id="formAccountSettings" @submit.prevent="submit">
            <div class="row">
              <!-- <div class="mb-3 col-md-6">
                <label for="type" class="form-label">Vehicle type</label>
                <input
                  class="form-control"
                  type="text"
                  id="vehicle_type"
                  name="vehicle_type"
                  v-model="form.vehicle_type"
                />
                <div class="text-danger">
                  {{ form.errors.vehicle_type }}
                </div>
              </div> -->

              <div class="mb-3 col-md-6">
                <SelectInputComponentVue class="w-100" id="vehicle_type" label="Vehicle type"
                  v-model="form.vehicle_type" :options="type" />
              </div>

              <!-- <div class="mb-3 col-md-6">
                <label for="manufacture" class="form-label"
                  >Manufacture Name</label
                >
                <input
                  class="form-control"
                  type="text"
                  id="manufacture_name"
                  name="manufacture_name"
                  v-model="form.manufacture_name"
                />
                <div class="text-danger">
                  {{ form.errors.manufacture_name }}
                </div>
              </div> -->

              <div class="mb-3 col-md-6">
                <SelectInputComponentVue class="w-100" id="manufacture_name" label="Manufacture Name"
                  v-model="form.manufacture_name" :options="manufacture" @change="getModels" />
              </div>

              <!-- <div class="mb-3 col-md-6">
                <label for="ex_color" class="form-label">Ex color</label>
                <input
                  class="form-control"
                  type="text"
                  id="ex_color"
                  name="ex_color"
                  v-model="form.ex_color"
                />
                <div class="text-danger">
                  {{ form.errors.ex_color }}
                </div>
              </div> -->
              
              <div class="mb-3 col-md-6">
                <SelectInputComponentVue
                  class="w-100"
                  id="model"
                  label="Model"
                  v-model="form.model"
                  :options="model"
                />
              </div>

              <div class="mb-3 col-md-6">
                <SelectInputComponentVue class="w-100" id="ex_color" label="Ex color" v-model="form.ex_color"
                  :options="color" />
              </div>

              <!-- <div class="mb-3 col-md-6">
                <label for="in_color" class="form-label">In color</label>
                <input
                  class="form-control"
                  type="text"
                  id="in_color"
                  name="in_color"
                  v-model="form.in_color"
                />
                <div class="text-danger">
                  {{ form.errors.in_color }}
                </div>
              </div> -->



              <div class="mb-3 col-md-6">
                <SelectInputComponentVue class="w-100" id="in_color" label="In color" v-model="form.in_color"
                  :options="color" />
              </div>
              <!-- <div class="mb-3 col-md-12">
                <label for="url" class="form-label">SEO URL</label>
                <input class="form-control" type="text" id="seo_url" name="seo_url" v-model="form.seo_url" />
                <div class="text-danger">
                  {{ form.errors.seo_url }}
                </div>
              </div> -->

              <!-- checkboxes  -->
              <div class="mb-3 col-md-12">
                <label class="form-label">Features</label>
                <div class="features-container">
                  <div v-for="(feature, index) in features" :key="index" class="checkbox-container">
                    <input type="checkbox" :id="'feature-' + feature.id" :value="feature.id" v-model="form.features" />
                    <label :for="'feature-' + feature.id">{{
                      feature.name
                    }}</label>
                  </div>
                </div>
              </div>

              <SelectInputComponentVue id="transmission" label="Transmission" :error="form.errors.transmission"
                :options="[
                  {
                    id: '0',
                    name: 'Auto',
                  },
                  {
                    id: '1',
                    name: 'Manual',
                  },
                  {
                    id: '2',
                    name: 'Triptonic',
                  },
                ]" v-model="form.transmission" />

              <div class="mb-3 col-md-6">
                <label for="year" class="form-label">Year</label>
                <input class="form-control" type="number" id="year" name="year" v-model="form.year" />
                <div class="text-danger">
                  {{ form.errors.year }}
                </div>
              </div>

              <div class="mb-3 col-md-6">
                <label for="chassis_no" class="form-label">Chassis No</label>
                <input class="form-control" type="text" id="chassis_no" name="chassis_no" v-model="form.chassis_no" />
                <div class="text-danger">
                  {{ form.errors.chassis_no }}
                </div>
              </div>

              <div class="mb-3 col-md-6">
                <label for="condition" class="form-label">Condition</label>
                <input class="form-control" type="text" id="condition" name="condition" v-model="form.condition" />
                <div class="text-danger">
                  {{ form.errors.condition }}
                </div>
              </div>

              <div class="mb-3 col-md-6">
                <label for="seats" class="form-label">Seats</label>
                <input class="form-control" type="number" id="seats" name="seats" v-model="form.seats" />
                <div class="text-danger">
                  {{ form.errors.seats }}
                </div>
              </div>

              <div class="mb-3 col-md-6">
                <label for="doors" class="form-label">Doors</label>
                <input class="form-control" type="number" id="doors" name="doors" v-model="form.doors" />
                <div class="text-danger">
                  {{ form.errors.doors }}
                </div>
              </div>

              <div class="mb-3 col-md-6">
                <label for="passengers" class="form-label">Passengers</label>
                <input class="form-control" type="number" id="passengers" name="passengers" v-model="form.passengers" />
                <div class="text-danger">
                  {{ form.errors.passengers }}
                </div>
              </div>

              <div class="mb-3 col-md-6">
                <label for="engine_capacity" class="form-label">Engine Capacity</label>
                <input class="form-control" type="text" id="engine_capacity" name="engine_capacity"
                  v-model="form.engine_capacity" />
                <div class="text-danger">
                  {{ form.errors.engine_capacity }}
                </div>
              </div>

              <div class="mb-3 col-md-6">
                <label for="mileage" class="form-label">Mileage</label>
                <input class="form-control" type="number" id="mileage" name="mileage" v-model="form.mileage" />
                <div class="text-danger">
                  {{ form.errors.mileage }}
                </div>
              </div>

              <SelectInputComponentVue id="fuel_type" label="Fuel Type" :error="form.errors.fuel_type" :options="[
                {
                  id: '0',
                  name: 'Diesel',
                },
                {
                  id: '1',
                  name: 'Petrol',
                },
                {
                  id: '2',
                  name: 'Hybrid',
                },
                {
                  id: '3',
                  name: 'Electric',
                },
              ]" v-model="form.fuel_type" />

              <div class="mb-3 col-md-6">
                <label for="drive_type" class="form-label">Drive Type</label>
                <input class="form-control" type="text" id="drive_type" name="drive_type" v-model="form.drive_type" />
                <div class="text-danger">
                  {{ form.errors.drive_type }}
                </div>
              </div>

              <div class="mb-3 col-md-6">
                <label for="auction_grade" class="form-label">Auction Grade</label>
                <input class="form-control" type="text" id="auction_grade" name="auction_grade"
                  v-model="form.auction_grade" />
                <div class="text-danger">
                  {{ form.errors.auction_grade }}
                </div>
              </div>

              <div class="mb-3 col-md-6">
                <label for="interior_condition" class="form-label">Interior Condition</label>
                <input class="form-control" type="text" id="interior_condition" name="interior_condition"
                  v-model="form.interior_condition" />
                <div class="text-danger">
                  {{ form.errors.interior_condition }}
                </div>
              </div>

              <SelectInputComponentVue id="availability" label="Availability" :error="form.errors.availability" :options="[
                {
                  id: '0',
                  name: 'Available',
                },
                {
                  id: '1',
                  name: 'Arriving',
                },
                {
                  id: '2',
                  name: 'Sold',
                },
              ]" v-model="form.availability" />

              <!-- TinyMCE Editor -->
              <div>
                <Editor v-model="form.editorContent" :api-key="apiKey" :init="{
                  plugins: 'lists link image table code help wordcount',
                }" />
              </div>

              <div class="mb-3 col-md-6">
                <label for="image" class="form-label me-3">Image</label>
                <br />
                <FileInputComponent :isRequired="false" id="vehicle_image" :prvImage="Vehicle_Image"
                  v-model="form.vehicle_image" />
                <div class="text-danger">
                  {{ form.errors.vehicle_image }}
                </div>

                <SelectInputComponentVue id="featured" label="Is Featured" :error="form.errors.featured" :options="[
                  {
                    id: '1',
                    name: 'Enable',
                  },
                  {
                    id: '0',
                    name: 'Disable',
                  },
                ]" v-model="form.featured" />

                <SelectInputComponentVue id="latest" label="Is Latest" :error="form.errors.latest" :options="[
                  {
                    id: '1',
                    name: 'Enable',
                  },
                  {
                    id: '0',
                    name: 'Disable',
                  },
                ]" v-model="form.latest" />

                <SelectInputComponentVue id="status" label="status" :error="form.errors.status" :options="[
                  {
                    id: '1',
                    name: 'Active',
                  },
                  {
                    id: '0',
                    name: 'Inactive',
                  },
                ]" v-model="form.status" />
              </div>
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-main me-2" :disabled="form.processing">
                {{ vehicle ? "Update" : "Save" }}
              </button>
              <Link class="btn btn-outline-danger" :href="route('vehicle_manufacture.index')">Cancel</Link>
            </div>
          </form>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

<script>
import { Link, useForm } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import FileInputComponent from "@/Components/FileInputComponent.vue";
import SelectInputComponentVue from "../../../Components/SelectInputComponent.vue";
import Editor from "@tinymce/tinymce-vue";
import { ref } from "vue";

// import SuspendedUserAlert from "./Partials/SuspendedUserAlert.vue";

export default {
  components: {
    Link,
    AppLayout,
    FileInputComponent,
    // SuspendedUserAlert,
    SelectInputComponentVue,
    Editor,
  },
  // setup() {
  //   const apiKey = ref(import.meta.env.VITE_TINYMCE_API_KEY);
  //   return {
  //     apiKey
  //   }
  // },
  props: {
    errors: Object,
    allRoles: Object,
    backendUser: Object,
    branches: Array,
    features: Array,
    service_types: Object,
    vehicle_manufacture: Object,
    vehicle: Object,
    type: Object,
    manufacture: Object,
    color: Object,
    model: Object,
  },

  data() {
    return {
      apiKey:import.meta.env.VITE_TINYMCE_API_KEY,
      form: useForm({
        id: "",
        vehicle_type: "",
        manufacture_name: "",
        model: "",
        seo_url: "",
        ex_color: "",
        in_color: "",
        features: [],
        transmission: "",
        year: "",
        chassis_no: "",
        condition: "",
        seats: "",
        doors: "",
        passengers: "",
        engine_capacity: "",
        mileage: "",
        fuel_type: "",
        drive_type: "",
        auction_grade: "",
        interior_condition: "",
        availability: "",
        editorContent: "",
        featured: "",
        latest: "",
        status: "",
        vehicle_image: "",
      }),
      // password: useForm({
      //   id: "",
      //   confirm_password: "",
      //   password: "",
      //   password_confirmation: "",
      // }),
    };
  },
  mounted() {
    let self = this;

    if (this.vehicle) {
      this.form.id = this.vehicle.id;
      this.form.vehicle_type = this.vehicle.vehicle_type_id;
      this.form.manufacture_name = this.vehicle.manufacture_id;
      this.form.model = this.vehicle.vehicle_model_id;
      this.form.seo_url = this.vehicle.seo_url;
      this.form.ex_color = this.vehicle.ex_color;
      this.form.in_color = this.vehicle.in_color;
      this.form.features = this.vehicle.FeaturesList ?? [];
      this.form.transmission = this.vehicle.transmission;
      this.form.year = this.vehicle.year;
      this.form.chassis_no = this.vehicle.chassis_no;
      this.form.condition = this.vehicle.condition;
      this.form.seats = this.vehicle.seats;
      this.form.doors = this.vehicle.doors;
      this.form.passengers = this.vehicle.passengers;
      this.form.engine_capacity = this.vehicle.engine_capacity;
      this.form.mileage = this.vehicle.mileage;
      this.form.fuel_type = this.vehicle.fuel_type;
      this.form.drive_type = this.vehicle.drive_type;
      this.form.auction_grade = this.vehicle.auction_grade;
      this.form.interior_condition = this.vehicle.interior_condition;
      this.form.availability = this.vehicle.availability;
      this.form.editorContent = this.vehicle.editorContent;
      this.form.featured = this.vehicle.featured;
      this.form.latest = this.vehicle.latest;
      this.form.status = this.vehicle.status;
    }
    // $(".card-body").on("change", "#role", function (evt) {
    //   self.form.role = $(evt.target).val();
    // });
    // $(".card-body").on("change", "#branch", function (evt) {
    //   self.form.branch = $(evt.target).val();
    // });
  },
  computed: {
    Vehicle_Image() {
      return this.vehicle
        ? this.vehicle.media.length > 0
          ? this.vehicle.media[0].original_url
          : ""
        : "";
    },
  },
  methods: {
    getModels() {
      this.$inertia.reload({
        method: "POST",
        data: { _method: "GET", manufacture_id: this.form.manufacture_name },
      });
    },
    submit() {
      this.form.post(
        this.vehicle ? route("vehicle.update") : route("vehicle.store"),
        {
          onSuccess: () => {
            this.form.reset();
            this.$root.showMessage(
              "success",
              '<span class="text-success">Success</span><br/>',
              "A Record Was Created Successfully! "
            );
          },
          onError: () => {
            this.form.reset("password", "password_confirmation");
            this.$root.showMessage(
              "error",
              '<span class="text-danger">Error</span><br>',
              "Something went wrong! "
            );
          },
        }
      );
    },
  },
};
</script>
<style scoped>
/* Flex container for checkboxes */
.features-container {
  display: flex;
  flex-wrap: wrap;
  gap: 1rem;
}

/* Checkbox Container */
.checkbox-container {
  display: flex;
  align-items: center;
  width: calc(25% - 1rem);
  /* Adjust the width to divide the space into 4 columns */
  margin-bottom: 0.5rem;
}

/* Hide the default checkbox */
.checkbox-container input[type="checkbox"] {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Custom Checkbox Design */
.checkbox-container label {
  position: relative;
  padding-left: 30px;
  cursor: pointer;
  font-weight: 500;
  user-select: none;
}

/* Create the custom checkbox */
.checkbox-container label::before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 20px;
  height: 20px;
  background-color: #f1f1f1;
  border: 2px solid #ccc;
  border-radius: 4px;
  transition: background-color 0.2s, border-color 0.2s;
}

/* Show the checkmark when checked */
.checkbox-container input[type="checkbox"]:checked+label::before {
  background-color: #3d3232;
  border-color: #000000;
}

.checkbox-container input[type="checkbox"]:checked+label::after {
  content: "";
  position: absolute;
  left: 6px;
  top: 2px;
  width: 6px;
  height: 12px;
  border: solid white;
  border-width: 0 2px 2px 0;
  transform: rotate(45deg);
}

/* Hover Effect */
.checkbox-container label:hover::before {
  border-color: #007bff;
}
</style>