<template>
    <Dashboard>
        <div class="topic-wrapper mt-5 pt-5 ps-5">
            <p class="table-heading mt-4">Pets</p>
        </div>
        <div class="btn-section px-3">
            <div class="row mx-0" style="justify-content: space-between">
                <div class="col-md-2">
                    <div class="">
                        <Link
                            class="btn add-btn text-white"
                            :href="route('addpet')"
                        >
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
            <div
                class="scroll"
                style="height: 400px; overflow: auto; width: 100%"
            >
                <table
                    class="table text-center table-bordered pet-table table-responsive"
                >
                    <thead>
                        <tr class="sticky-top">
                            <th
                                class="custom-color"
                                scope="col"
                                style="min-width: 100px"
                            >
                                Code
                            </th>
                            <th
                                class="custom-color"
                                scope="col"
                                style="min-width: 100px"
                            >
                                Pet Name
                            </th>
                            <th
                                class="custom-color"
                                scope="col"
                                style="min-width: 100px"
                            >
                                Type
                            </th>
                            <th
                                class="custom-color"
                                scope="col"
                                style="min-width: 100px"
                            >
                                Breed
                            </th>
                            <th
                                class="custom-color"
                                scope="col"
                                style="min-width: 100px"
                            >
                                DOB
                            </th>
                            <th
                                class="custom-color"
                                scope="col"
                                style="min-width: 100px"
                            >
                                Pet Owner
                            </th>
                            <th
                                class="custom-color"
                                scope="col"
                                style="min-width: 100px"
                            >
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="pet in pets" :key="pet.code">
                            <td scope="row" class="py-3 custom-color">
                                {{ "P00" + pet.id }}
                            </td>
                            <td class="py-3 custom-color">
                                {{ pet.pet_name }}
                            </td>
                            <td class="py-3 custom-color">{{ pet.type }}</td>
                            <td class="py-3 custom-color">{{ pet.breed }}</td>
                            <td class="py-3 custom-color">{{ pet.dob }}</td>
                            <td class="py-3 custom-color">
                                {{ pet.pet_owner }}
                            </td>
                            <td class="py-3 custom-color">
                                <div>
                                    <Link
                                        v-if="$page.props.user == 'jagath'"
                                        :href="route('pets.edit', pet.id)"
                                        ><i
                                            class="fa-solid fa-pen text-black mx-2"
                                        ></i
                                    ></Link>
                                    <button
                                        @click="deletePet(pet.id)"
                                        class="border-0"
                                    >
                                        <i
                                            class="fa-solid fa-trash-can text-black mx-2"
                                        ></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr v-if="pets == ''">
                            <td colspan="7" class="text-muted">
                                No records found
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </Dashboard>
</template>

<script>
import { Link, useForm } from "@inertiajs/inertia-vue3";
import Dashboard from "../../Layouts/Dashboard.vue";
import SearchBar from "../../components/SearchBar.vue";
import Swal from "sweetalert2";

export default {
    components: {
        Dashboard,
        Link,
        SearchBar,
    },
    props: {
        pets: Array,
    },
    data() {
        return {
            data: 1,

            form: useForm({
                ids: [],
            }),
        };
    },
    methods: {
        deletePet(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "This action cannot be undone.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancel",
            }).then((result) => {
                if (result.isConfirmed) {
                    this.form
                        .transform((data) => ({
                            ...data,
                            ids: [id],
                        }))
                        .post(route("pets.delete"), {
                            onSuccess: () => {
                                this.reloadTable();

                                Swal.fire({
                                    icon: "success",
                                    title: "Deleted!",
                                    text: "Record deleted successfully.",
                                    timer: 2000,
                                    showConfirmButton: false,
                                });
                            },
                            onError: () => {
                                Swal.fire({
                                    icon: "error",
                                    title: "Error!",
                                    text: "Something went wrong.",
                                });
                            },
                        });
                }
            });
        },
    },
};
</script>

<style></style>
