<template>
  <Dashboard>

    <div class="topic-wrapper mt-5 pt-5 ps-5">
      <p class="table-heading mt-4">Pets</p>
    </div>
    <div class="btn-section px-3">
      <div class="row mx-0" style="justify-content:space-between">
        <div class="col-md-2">
          <div class="">
            <Link class="btn add-btn text-white">
            Add New Pet <i class="fa-solid fa-plus ps-3"></i>
            </Link>
          </div>
        </div>
        <div class="col-md-3">
          <SearchBar placeholder="Taffy" />
        </div>
      </div>
    </div>
    <div class="data-table-wrapper mx-4 pt-3">
      <div class="scroll" style="height: 400px; overflow:auto; width:1200px; ">


        <table class="table text-center table-bordered pet-table table-responsive">
          <thead>
            <tr class="sticky-top">
              <th scope="col" style="min-width: 100px;">Code</th>
              <th scope="col" style="min-width: 100px;">Pet Name</th>
              <th scope="col" style="min-width: 100px;">Type</th>
              <th scope="col" style="min-width: 100px;">Handle</th>
              <th scope="col" style="min-width: 100px;">Handle</th>
              <th scope="col" style="min-width: 100px;">Handle</th>
              <th scope="col" style="min-width: 100px;">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">1asdasdas</td>
              <td>Maasdsdsdsdsdsdsdsdsdrk</td>
              <td>Ottsdfdddddddddddddo</td>
              <td>@masddddddasdddddddo</td>
              <td>@msaddddddddddo</td>
              <td>@mdsaaaaaaado</td>
              <td>@masddddddddo</td>
            </tr>
            <tr>
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
  }
}
</script>

<style></style>