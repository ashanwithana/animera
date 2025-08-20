<template>
    <div>
        <div class="h3 mb-5 border-bottom pb-2">
            <span class="pb-1 sub-topic-border pb-2">Deals Of The Day</span>
        </div>
       
    </div>

</template>

<script>
import { ref } from "vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/pagination";
import 'swiper/css/navigation';
import { Autoplay, Navigation, Pagination } from "swiper/modules";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Swiper,
        SwiperSlide,
        Link,
    },
    mounted() {
        
        
    },
    data() {
        return {
           
            
           
        }
    },
   computed:{
   
   },

    methods: {
        
    },
    setup() {
        return {
            modules: [Navigation, Pagination],
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

.card-body {
    font-size: 15px;
}
</style>
<style>
.deals-slider .swiper-button-prev:after{
    content: "";
    background-image: url('/images/icons/left.png');
    background-size: cover; 
    background-repeat: no-repeat;
    width: 5px;
    height: 5px;
    display: inline-block;
    background-color: antiquewhite;
    padding: 15px;
    border-radius: 11px;
}
.deals-slider .swiper-button-next:after{
    content: "";
    background-image: url('/images/icons/right.png');
    background-size: cover; 
    background-repeat: no-repeat;
    width: 5px;
    height: 5px;
    display: inline-block;
    background-color: antiquewhite;
    padding: 15px;
    border-radius: 11px;
}
</style>