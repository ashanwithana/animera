<template>
    <div>
        <div class="h3 mb-5 border-bottom pb-2">
            <span class="pb-1 sub-topic-border pb-2">Bestseller Products</span>
        </div>
        <div class="category-slider">
            <swiper :slidesPerView="4" :spaceBetween="10" :modules="modules" :breakpoints="{
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            }" class="mySwiper">
                <swiper-slide>
                    <Link class="card border-0 shadow-sm hover-styles">
                        <div class="position-relative">
                            <img src="http://wp.plazathemes.com/rozer/wp-content/uploads/2020/12/7-600x600.jpg"
                                class="card-img-top object-fit-cover" alt="..." />
                            <div class="position-absolute img-2">
                                <img src="http://wp.plazathemes.com/rozer/wp-content/uploads/2020/12/14-600x600.jpg"
                                    class="card-img-top object-fit-cover hover-img" alt="..." />
                                <div class="card-buttons position-absolute me-2">
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div><br>
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-regular fa-heart"></i>
                                    </div><br>
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body mt-3">
                            <p class="card-text text-secondary text-start mb-1">
                                SHOP
                            </p>
                            <p class="card-text text-dark fw-semibold text-start mb-1">
                                Nostrum exercitation undertakes laborious
                                physical
                            </p>
                            <p class="card-text text-start mb-2">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-regular fa-star text-warning"></i>
                            </p>
                            <p class="card-text text-black fw-semibold text-start mb-1">
                                $86.00
                            </p>
                        </div>
                        <div class="cart-button position-absolute me-2 mb-3">
                            <div class="btn border rounded-4 py-1 mx-1 add-cart-btn">
                                Add
                            </div>
                        </div>
                    </Link>
                </swiper-slide>
                <swiper-slide>
                    <div class="card border-0 shadow-sm hover-styles">
                        <div class="position-relative">
                            <img src="http://wp.plazathemes.com/rozer/wp-content/uploads/2020/12/19-1-600x600.jpg"
                                class="card-img-top object-fit-cover" alt="..." />
                            <div class="position-absolute img-2">
                                <img src="http://wp.plazathemes.com/rozer/wp-content/uploads/2020/12/18-768x768.jpg"
                                    class="card-img-top object-fit-cover hover-img" alt="..." />
                                <div class="card-buttons position-absolute me-2">
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div><br>
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-regular fa-heart"></i>
                                    </div><br>
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body mt-3">
                            <p class="card-text text-secondary text-start mb-1">
                                SHOP
                            </p>
                            <p class="card-text text-dark fw-semibold text-start mb-1">
                                Aliquam lobortis perferendis doloribus asperiores
                            </p>
                            <p class="card-text text-start mb-2">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-regular fa-star text-warning"></i>
                            </p>
                            <p class="card-text text-black fw-semibold text-start mb-1">
                                $86.00
                            </p>
                        </div>
                        <div class="cart-button position-absolute me-2 mb-3">
                            <div class="btn border rounded-4 py-1 mx-1 add-cart-btn">
                                Add
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="card border-0 shadow-sm hover-styles">
                        <div class="position-relative">
                            <img src="http://wp.plazathemes.com/rozer/wp-content/uploads/2020/12/3-600x600.jpg"
                                class="card-img-top object-fit-cover" alt="..." />
                            <div class="position-absolute img-2">
                                <img src="http://wp.plazathemes.com/rozer/wp-content/uploads/2020/12/2-600x600.jpg"
                                    class="card-img-top object-fit-cover hover-img" alt="..." />
                                <div class="card-buttons position-absolute me-2">
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div><br>
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-regular fa-heart"></i>
                                    </div><br>
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body mt-3">
                            <p class="card-text text-secondary text-start mb-1">
                                SHOP
                            </p>
                            <p class="card-text text-dark fw-semibold text-start mb-1">
                                Hendrerit est untrammelled and when nothing
                            </p>
                            <p class="card-text text-start mb-2">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-regular fa-star text-warning"></i>
                            </p>
                            <p class="card-text text-black fw-semibold text-start mb-1">
                                $86.00
                            </p>
                        </div>
                        <div class="cart-button position-absolute me-2 mb-3">
                            <div class="btn border rounded-4 py-1 mx-1 add-cart-btn">
                                Add
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="card border-0 shadow-sm hover-styles">
                        <div class="position-relative">
                            <img src="http://wp.plazathemes.com/rozer/wp-content/uploads/2020/12/14-600x600.jpg"
                                class="card-img-top object-fit-cover" alt="..." />
                            <div class="position-absolute img-2">
                                <img src="http://wp.plazathemes.com/rozer/wp-content/uploads/2020/12/22-600x600.jpg"
                                    class="card-img-top object-fit-cover hover-img" alt="..." />
                                <div class="card-buttons position-absolute me-2">
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div><br>
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-regular fa-heart"></i>
                                    </div><br>
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body mt-3">
                            <p class="card-text text-secondary text-start mb-1">
                                SHOP
                            </p>
                            <p class="card-text text-dark fw-semibold text-start mb-1">
                                Dolorum fuga eget saepe eveniet ut et voluptates
                            </p>
                            <p class="card-text text-start mb-2">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-regular fa-star text-warning"></i>
                            </p>
                            <p class="card-text text-black fw-semibold text-start mb-1">
                                $86.00
                            </p>
                        </div>
                        <div class="cart-button position-absolute me-2 mb-3">
                            <div class="btn border rounded-4 py-1 mx-1 add-cart-btn">
                                Add
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="card border-0 shadow-sm hover-styles">
                        <div class="position-relative">
                            <img src="http://wp.plazathemes.com/rozer/wp-content/uploads/2020/12/1-600x600.jpg"
                                class="card-img-top object-fit-cover" alt="..." />
                            <div class="position-absolute img-2">
                                <img src="http://wp.plazathemes.com/rozer/wp-content/uploads/2020/12/3-600x600.jpg"
                                    class="card-img-top object-fit-cover hover-img" alt="..." />
                                <div class="card-buttons position-absolute me-2">
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div><br>
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-regular fa-heart"></i>
                                    </div><br>
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body mt-3">
                            <p class="card-text text-secondary text-start mb-1">
                                SHOP
                            </p>
                            <p class="card-text text-dark fw-semibold text-start mb-1">
                                Augue nisi non neque omnis voluptas assumenda est
                            </p>
                            <p class="card-text text-start mb-2">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-regular fa-star text-warning"></i>
                            </p>
                            <p class="card-text text-black fw-semibold text-start mb-1">
                                $86.00
                            </p>
                        </div>
                        <div class="cart-button position-absolute me-2 mb-3">
                            <div class="btn border rounded-4 py-1 mx-1 add-cart-btn">
                                Add
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="card border-0 shadow-sm hover-styles">
                        <div class="position-relative">
                            <img src="http://wp.plazathemes.com/rozer/wp-content/uploads/2020/12/16-600x600.jpg"
                                class="card-img-top object-fit-cover" alt="..." />
                            <div class="position-absolute img-2">
                                <img src="http://wp.plazathemes.com/rozer/wp-content/uploads/2020/12/15-600x600.jpg"
                                    class="card-img-top object-fit-cover hover-img" alt="..." />
                                <div class="card-buttons position-absolute me-2">
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div><br>
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-regular fa-heart"></i>
                                    </div><br>
                                    <div class="btn border rounded-circle py-2 my-1">
                                        <i class="fa-solid fa-code-compare"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body mt-3">
                            <p class="card-text text-secondary text-start mb-1">
                                SHOP
                            </p>
                            <p class="card-text text-dark fw-semibold text-start mb-1">
                                Consequuntur magni dolorem eum fugiat quo voluptas
                            </p>
                            <p class="card-text text-start mb-2">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-regular fa-star text-warning"></i>
                            </p>
                            <p class="card-text text-black fw-semibold text-start mb-1">
                                $86.00
                            </p>
                        </div>
                        <div class="cart-button position-absolute me-2 mb-3">
                            <div class="btn border rounded-4 py-1 mx-1 add-cart-btn">
                                Add
                            </div>
                        </div>
                    </div>
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
    mounted() { },
    // setup() {
    //     const progressCircle = ref(null);
    //     const progressContent = ref(null);
    //     const onAutoplayTimeLeft = (s, time, progress) => {
    //         progressCircle.value.style.setProperty("--progress", 1 - progress);
    //         progressContent.value.textContent = `${Math.ceil(time / 2500)}s`;
    //     };
    //     return {
    //         onAutoplayTimeLeft,
    //         progressCircle,
    //         progressContent,
    //         modules: [Autoplay],
    //     };
    // },
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

.card-body {
    font-size: 15px;
}
</style>
