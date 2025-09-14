<template>
    <Dashboard>
        <div class="topic-wrapper mt-2 pt-3 ps-5">
            <p class="table-heading mt-4">Pet Profile</p>
        </div>
        <form class="row mx-0 px-5" @submit.prevent="submit()">
            <div class="col-md-5">
                <Fileinput
                    :isRequired="false"
                    id="pet_image"
                    :prvImage="Pet_Images"
                    v-model="form.pet_image"
                />
                <p class="mb-1 text-danger" v-if="form.errors.pet_image">
                    {{ "*" + form.errors.pet_image }}
                </p>
                <div class="add-heading pt-3 pb-3">
                    <p class="mb-0 pet-add-topic">Pet</p>
                </div>
                <div class="inpu-data-wrapper">
                    <div class="row mx-0 align-items-center pb-2">
                        <div class="col-md-3 ps-0">
                            <div class="input-heading">
                                <p class="mb-0 input-heading-text">Pet Code</p>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <input
                                v-model="form.id"
                                type="text"
                                disabled
                                class="form-control w-100 input-data rounded-0 shadow disbled-input"
                            />
                        </div>
                    </div>
                    <div class="row mx-0 align-items-center pb-2">
                        <div class="col-md-3 ps-0">
                            <div class="input-heading">
                                <p class="mb-0 input-heading-text">Pet Name</p>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <input
                                type="text"
                                v-model="form.pet_name"
                                class="form-control w-100 input-data rounded-0 shadow"
                            />
                        </div>
                        <p class="mb-1 text-danger" v-if="form.errors.pet_name">
                            {{ "*" + form.errors.pet_name }}
                        </p>
                    </div>
                    <div class="row mx-0 align-items-center pb-2">
                        <div class="col-md-3 ps-0">
                            <div class="input-heading">
                                <p class="mb-0 input-heading-text">Type</p>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <select
                                class="form-select form-control input-data rounded-0"
                                aria-label="Default select example"
                                v-model="form.type"
                                :error="form.errors.type"
                            >
                                <option value="Dog">Dog</option>
                                <option value="Cat">Cat</option>
                            </select>
                        </div>
                        <p class="mb-1 text-danger" v-if="form.errors.type">
                            {{ "*" + form.errors.type }}
                        </p>
                    </div>
                    <div class="row mx-0 align-items-center pb-2">
                        <div class="col-md-3 ps-0">
                            <div class="input-heading">
                                <p class="mb-0 input-heading-text">Gender</p>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <select
                                class="form-select form-control input-data rounded-0"
                                aria-label="Default select example"
                                v-model="form.gender"
                                :error="form.errors.gender"
                            >
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <p class="mb-1 text-danger" v-if="form.errors.gender">
                            {{ "*" + form.errors.gender }}
                        </p>
                    </div>
                    <div class="row mx-0 align-items-center pb-2">
                        <div class="col-md-3 ps-0">
                            <div class="input-heading">
                                <p class="mb-0 input-heading-text">Breed</p>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <select
                                class="form-select form-control input-data rounded-0"
                                aria-label="Default select example"
                                v-model="form.breed"
                                :error="form.errors.breed"
                            >
                                <option value="Labrado">Labrado</option>
                                <option value="German Shepherd">
                                    German Shepherd
                                </option>
                            </select>
                        </div>
                        <p class="mb-1 text-danger" v-if="form.errors.breed">
                            {{ "*" + form.errors.breed }}
                        </p>
                    </div>
                    <div class="row mx-0 align-items-center pb-2">
                        <div class="col-md-3 ps-0">
                            <div class="input-heading">
                                <p class="mb-0 input-heading-text">DOB</p>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <input
                                v-model="form.dob"
                                :error="form.errors.dob"
                                type="date"
                                class="form-control w-100 input-data rounded-0 shadow"
                            />
                        </div>
                        <p class="mb-1 text-danger" v-if="form.errors.dob">
                            {{ "*" + form.errors.dob }}
                        </p>
                    </div>
                    <div class="row mx-0 align-items-center pb-5">
                        <div class="col-md-3 ps-0">
                            <div class="input-heading">
                                <p class="mb-0 input-heading-text">Age</p>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <input
                                v-model="form.age"
                                :error="form.errors.age"
                                type="text"
                                name="age"
                                class="form-control w-100 input-data rounded-0 shadow"
                            />
                        </div>
                        <p class="text-danger" v-if="form.errors.age">
                            {{ "*" + form.errors.age }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 ms-5">
                <div
                    class="add-heading pt-3 pb-3 d-flex align-items-center"
                    style="justify-content: space-between"
                >
                    <p class="mb-0 pet-add-topic">Pet Owner</p>
                    <p class="mb-0">
                        <span class="fw-semibold pe-2">Date:</span>
                        <span>{{ $page.props.current_date }}</span>
                    </p>
                </div>
                <div class="input-data-wrapper">
                    <div class="row mx-0 align-items-center pb-2">
                        <div class="col-md-3 ps-0">
                            <div class="input-heading">
                                <p class="mb-0 input-heading-text">
                                    Owner Name
                                </p>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <input
                                v-model="form.pet_owner"
                                :error="form.errors.pet_owner"
                                type="text"
                                class="form-control w-100 input-data rounded-0 shadow"
                            />
                        </div>
                        <p
                            class="mb-1 text-danger"
                            v-if="form.errors.pet_owner"
                        >
                            {{ "*" + form.errors.pet_owner }}
                        </p>
                    </div>
                    <div class="row mx-0 align-items-center pb-2">
                        <div class="col-md-3 ps-0">
                            <div class="input-heading">
                                <p class="mb-0 input-heading-text">
                                    Contact No
                                </p>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <input
                                v-model="form.p_no"
                                :error="form.errors.p_no"
                                type="text"
                                class="form-control w-100 input-data rounded-0 shadow"
                            />
                        </div>
                        <p class="mb-1 text-danger" v-if="form.errors.p_no">
                            {{ "*" + form.errors.p_no }}
                        </p>
                    </div>
                    <div class="row mx-0 align-items-center pb-2">
                        <div class="col-md-3 ps-0">
                            <div class="input-heading">
                                <p class="mb-0 input-heading-text">Email</p>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <input
                                v-model="form.email"
                                :error="form.errors.email"
                                type="email"
                                class="form-control w-100 input-data rounded-0 shadow"
                            />
                        </div>
                        <p class="mb-1 text-danger" v-if="form.errors.email">
                            {{ "*" + form.errors.email }}
                        </p>
                    </div>
                </div>
                <div class="row mx-0 justify-content-center mt-5">
                    <div class="col-md-8">
                        <!-- <PrimaryButton
                            
                            class="qr-btn py-2 px-4 fw-semibold w-75"
                            label="Generate QR Code"
                        /> -->

                        <div class="row pt-3" v-if="pets && pets.media && pets.media.length > 1 && pets.media[1].original_url" >
                            <div class="col-md-8">
                                <div class="qr-code-wrapper mb-3">
                                    <img
                                        :src="pets.media[1].original_url"
                                        class="w-100 h-100"
                                        alt="QR Code"
                                    />
                                </div>
                                <a
                                    
                                    :href="pets.media[1].original_url"
                                    :download="pets.pet_name + pets.id"
                                    class="py-2 px-4 fw-semibold text-center text-decoration-underline"
                                    tag="a"
                                    ><i class="fa-solid fa-download pe-3"></i
                                    >Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-0 justify-content-end mt-5 pb-5">
                    <div class="col-md-8">
                        <Link :href="route('pets')">
                            <PrimaryButton
                                class="qr-btn cancle-btn py-2 px-4 fw-semibold mx-2"
                                label="Cancle"
                            />
                        </Link>

                        <button
                            class="btn border-0 qr-btn submit-btn py-2 px-4 fw-semibold mx-2"
                            type="submit"
                            :disabled="form.processing"
                        >
                            {{ pets ? "Update" : "Submit" }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </Dashboard>
>>>>>>> 113dddac8d56652687cbb4c0b51119d8c2f9c7af
</template>

<script>
import { Link, useForm } from "@inertiajs/inertia-vue3";
import InputFeild from "../../components/InputFeild.vue";
import PrimaryButton from "../../components/PrimaryButton.vue";
import Dashboard from "../../Layouts/Dashboard.vue";
import Fileinput from "../../components/Fileinput.vue";
import QRCode from "qrcode";

export default {
    components: {
        Dashboard,
        InputFeild,
        PrimaryButton,
        Link,
        Fileinput,
    },
    props: {
        error: Object,
        pets: Object,
    },
    data() {
        return {
            showQRcode: false,
            qrCodeUrl: "",
            previewImage: null,

            form: useForm({
                id: "",
                pet_name: "",
                type: "",
                gender: "",
                breed: "",
                dob: "",
                age: "",
                pet_owner: "",
                p_no: "",
                email: "",
                pet_image: "",
            }),
        };
    },
    mounted() {
        let self = this;

        if (this.pets) {
            this.form.id = this.pets.id;
            this.form.pet_name = this.pets.pet_name;
            this.form.type = this.pets.type;
            this.form.gender = this.pets.gender;
            this.form.breed = this.pets.breed;
            this.form.dob = this.pets.dob;
            this.form.age = this.pets.age;
            this.form.pet_owner = this.pets.pet_owner;
            this.form.p_no = this.pets.p_no;
            this.form.email = this.pets.email;
        }
    },
    methods: {
        generateQR() {
            if (!this.url) return;

            QRCode.toCanvas(
                this.$refs.qrCanvas,
                this.url,
                { width: 200 },
                function (error) {
                    if (error) console.error(error);
                }
            );
        },
        submit() {
            this.form.post(
                this.pets ? route("pets.update") : route("pets.store"),
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
        // handleImageUpload(event) {
        //     const file = event.target.files[0];
        //     if (file) {
        //         this.form.pet_image = file;

        //         // Optional: Show image preview
        //         this.previewImage = URL.createObjectURL(file);
        //     }
        // },
    },
    computed: {
        Pet_Images() {
            return this.pets
                ? this.pets.media.length > 0
                    ? this.pets.media[0].original_url
                    : ""
                : "";
        },
    },
};
</script>

<style>
.pet-pic-wrapper {
    height: 170px !important;
    width: 170px !important;
    border-radius: 50% !important;
}
.disbled-input {
    background-color: rgb(235, 236, 255) !important;
}
</style>
