<template>
<section class="position-relative">
    <div class="welcome-section d-flex align-items-center justify-content-center">
        <div class="row justify-content-center mx-0">
            <div class="col-9">
                <div class="heading-wrapper text-center">
                    <PrimaryHeading label="Welcome to Animera!" />
                </div>
                <div class="secondary-text-wrapper text-center">
                    <p class="dm-sans welcome-sub-text"><i>Transforming veterinary care with smarter
                            pet health management...</i></p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 col-9">
                        <div class="btn-grp text-center pt-3">
                    <div class="btn-wrapper pb-4">
                        <PrimaryButton class="qr-btn py-2 px-4 fw-semibold w-100" label="Generate QR Code" />
                    </div>
                    <div class="btn-wrapper pb-4">
                        <Link :href="route('animera')">
                        <PrimaryButton class="home-btn py-2 px-4 fw-semibold w-100" label="Home" />
                        </Link>
                    </div>
                    <!-- <div class="btn-wrapper">
                        <Link class="login-btn" :href="route('login')">Login</Link>
                    </div> -->
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-absolute absolute-image d-none d-md-block">
        <img src="images/cat-dog.png" alt="" class="cat-dog-image w-100 h-100">
    </div>
</section>
</template>
<script>
import { Link } from '@inertiajs/inertia-vue3';
import PrimaryButton from '../../../components/PrimaryButton.vue';
import PrimaryHeading from '../../../components/PrimaryHeading.vue';


export default {

    components: {
        PrimaryHeading,
        PrimaryButton,
        Link
    },
    data() {
        return {

        }
    },
    methods: {

    }
};
</script>

<style scoped>
.welcome-section {
    height: 100vh;
}
.absolute-image{
    right: 0;
    bottom: 0;
}

</style>
