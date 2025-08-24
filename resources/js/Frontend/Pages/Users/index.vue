<template>
  <Dashboard>

    <div class="topic-wrapper mt-5 pt-5 ps-5">
      <p class="table-heading mt-4">Veterinary User</p>
    </div>
    <div class="btn-section px-3">
      <div class="row mx-0" style="justify-content:space-between">
        <div class="col-md-2">
          <div class="">
            <Link class="btn add-btn text-white" :href="route('adduser')">
            Add New User <i class="fa-solid fa-plus ps-3"></i>
            </Link>
          </div>
        </div>
        <div class="col-md-3">
          <SearchBar placeholder="Dr. Jagath" />
        </div>
      </div>
    </div>
    <div class="data-table-wrapper mx-4 pt-3">
      <div class="scroll" style="height: 400px; overflow:auto; width:100%; ">


        <table class="table text-center table-bordered pet-table table-responsive">
          <thead>
            <tr class="sticky-top">
              <th class=" custom-color" scope="col" style="min-width: 100px;">Code</th>
              <th class=" custom-color" scope="col" style="min-width: 100px;">Name</th>
              <th class=" custom-color" scope="col" style="min-width: 100px;">Type</th>
              <th class=" custom-color" scope="col" style="min-width: 100px;">Contact No.</th>
              <th class=" custom-color" scope="col" style="min-width: 100px;">E-mail</th>

              <th class=" custom-color" scope="col" style="min-width: 100px;">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="user in staff" :key="user.code">
              <td scope="row" class="py-3 custom-color">{{ user.code }}</td>
              <td class="py-3 custom-color">{{ user.name }}</td>
              <td class="py-3 custom-color">{{ user.type }}</td>
              <td class="py-3 custom-color">{{ user.contactno }}</td>
              <td class="py-3 custom-color">{{ user.email }}</td>
              <td class="py-3 custom-color">
                <div>
                  <Link><i class="fa-solid fa-pen text-black mx-2"></i></Link>
                  <Link><i class="fa-solid fa-trash-can text-black mx-2"></i></Link>
                </div>
              </td>
            </tr>
            <tr v-if="data == 0">
              <td colspan="7" class="text-muted">No records found</td>
              
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </Dashboard>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Dashboard from '../../Layouts/Dashboard.vue';
import SearchBar from '../../components/SearchBar.vue';


export default {
  components: {
    Dashboard,
    Link,
    SearchBar
  },
  props:{
    staff:Object
  },
  data(){
    return{
      data:1
    }
  }
}
</script>

<style scoped>

</style>