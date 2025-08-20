<template>
    <div>
        <div class="h3 mb-5 border-bottom pb-2" id="text-topic"><span class="pb-1 sub-topic-border pb-2">Popular Categories</span></div>
        <div class="category-slider">
            <swiper
                :slidesPerView="5"
                :spaceBetween="30"
                :autoplay="{
                    delay: 2500,
                    disableOnInteraction: true,
                }"
                :modules="modules"
                :breakpoints="{
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                    1200: {
                        slidesPerView: 5,
                        spaceBetween: 30,
                    },
                }"
                class="mySwiper"
            >
                <swiper-slide>
                    <Link class="card" type="button">
                        <img
                            src="http://wp.plazathemes.com/rozer/wp-content/uploads/2021/01/3.jpg"
                            class="card-img-top object-fit-cover custom-image-size p-3"
                            alt="..."
                        />
                        <div class="card-body">
                            <h6 class="card-title text-center">Video Games</h6>
                        </div>
                    </Link>
                </swiper-slide>
                <swiper-slide>
                    <Link class="card">
                        <img
                            src="http://wp.plazathemes.com/rozer/wp-content/uploads/2021/01/1.jpg"
                            class="card-img-top object-fit-cover custom-image-size p-3"
                            alt="..."
                        />
                        <div class="card-body">
                            <h6 class="card-title text-center">Laptops</h6>
                        </div>
                    </Link>
                </swiper-slide>
                <swiper-slide>
                    <Link class="card">
                        <img
                            src="https://thumbs.dreamstime.com/b/rc-model-rally-car-toy-offroad-buggy-remote-control-isolated-white-background-138358859.jpg"
                            class="card-img-top object-fit-cover custom-image-size p-3"
                            alt="..."
                        />
                        <div class="card-body">
                            <h6 class="card-title text-center">Toys</h6>
                        </div>
                    </Link>
                </swiper-slide>
                <swiper-slide>
                    <Link class="card">
                        <img
                            src="http://wp.plazathemes.com/rozer/wp-content/uploads/2021/01/2.jpg"
                            class="card-img-top object-fit-cover custom-image-size p-3"
                            alt="..."
                        />
                        <div class="card-body">
                            <h6 class="card-title text-center">Home Audio</h6>
                        </div>
                    </Link>
                </swiper-slide>
                <swiper-slide>
                    <Link class="card" type="button">
                        <img
                            src="http://wp.plazathemes.com/rozer/wp-content/uploads/2021/01/4.jpg"
                            class="card-img-top object-fit-cover object-fit-cover custom-image-size p-3"
                            alt="..."
                        />
                        <div class="card-body">
                            <h6 class="card-title text-center">
                                Camera & Photos
                            </h6>
                        </div>
                    </Link>
                </swiper-slide>
                <swiper-slide>
                    <Link class="card">
                        <img
                            src="http://wp.plazathemes.com/rozer/wp-content/uploads/2021/01/5.jpg"
                            class="card-img-top object-fit-cover custom-image-size p-3"
                            alt="..."
                        />
                        <div class="card-body">
                            <h6 class="card-title text-center">Headphones</h6>
                        </div>
                    </Link>
                </swiper-slide>
            </swiper>
        </div>
    </div>
</template>

<script>
import { ref } from "vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/pagination";
import { Autoplay } from "swiper/modules";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Swiper,
        SwiperSlide,
        Link,
    },
    mounted() {},
    setup() {
        const progressCircle = ref(null);
        const progressContent = ref(null);
        const onAutoplayTimeLeft = (s, time, progress) => {
            progressCircle.value.style.setProperty("--progress", 1 - progress);
            progressContent.value.textContent = `${Math.ceil(time / 2500)}s`;
        };
        return {
            onAutoplayTimeLeft,
            progressCircle,
            progressContent,
            modules: [Autoplay],
        };
    },
};
</script>

<style scoped>
.swiper {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex !;
    justify-content: center;
    align-items: center;
}

.swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.card {
    border: 1px solid rgb(223, 218, 218);
}
.card:hover {
    border: 1px solid rgb(111, 79, 255);
}
.custom-image-size{
    width: auto !important;
}
</style>
