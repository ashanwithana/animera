<template>
    <div class="side-wrapper position-fixed">
        <div class="user-wrapper pt-5">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="avatar rounded-circle border-3 border">
                        <img src="/images/avatar.png" class="w-100" alt="" v-if="$page.props.user === 'amith'">
                        <img src="/images/jagath.png" class="w-100" alt="" v-if="$page.props.user === 'jagath'">
                        
                    </div>
                </div>
            </div>
            <div class="user-name text-center pt-3">
                <p class="name pb-0 mb-0" v-if="$page.props.user === 'amith'">Hi, Amith</p>
                <p class="name pb-0 mb-0" v-if="$page.props.user === 'jagath'">Hi, Dr. Jagath</p>
               
                <!-- <Link class="logout-btn-sidenav text-black py-1 px-2 rounded">Logout <i
                    class="fa-solid fa-arrow-right-from-bracket"></i></Link> -->
                <p class="email" type="button" v-if="$page.props.user === 'amith'">amith@gmail.com</p>
                <p class="email" type="button" v-if="$page.props.user === 'jagath'">drjagath@gmail.com</p>
               
            </div>
        </div>
        <div class="menu-wrapper pt-4">
            <Link :href="route('history')">
            <div class="menu py-2 px-5 my-2" v-bind:class="{
                active: addActiveClass(['history']),
            }">
                <Link class="text-white menu-link" :href="route('history')"><i
                    class="fa-solid fa-dog pe-2"></i>Pet History</Link>
            </div>
            </Link>
            <Link :href="route('pvaccine')">
            <div class="menu py-2 px-5 my-2" v-bind:class="{
                active: addActiveClass(['pvaccine']),
            }">
                <Link class="text-white menu-link" :href="route('pvaccine')"><i
                    class="fa-solid fa-syringe pe-2"></i>Past Vaccines</Link>
            </div>
            </Link>
            <Link :href="route('treatments')">
            <div class="menu py-2 px-5 my-2" v-bind:class="{
                active: addActiveClass(['treatments']),
            }">
                <Link class="text-white menu-link" :href="route('treatments')"><i class="fa-solid fa-briefcase-medical pe-2"></i>Treatments</Link>
            </div>
            </Link>
            <Link :href="route('index')">
            <div class="menu py-2 px-5 my-2" v-bind:class="{
                active: addActiveClass(['vaccines', 'addvaccine']),
            }">
                <Link class="text-white menu-link" :href="route('index')"><i
                    class="fa-solid fa-arrow-left pe-2"></i>Back to Home</Link>
            </div>
            </Link>
            <Link :href="route('logout')">
            <div class="menu py-2 px-5 my-2 w-100">
                <Link class="text-white menu-link" :href="route('logout')"><i
                    class="fa-solid fa-right-from-bracket pe-2"></i>Logout</Link>
            </div>
            </Link>
           
        </div>

    </div>
</template>

<script>
import { Inertia } from '@inertiajs/inertia';
import { Link } from '@inertiajs/inertia-vue3';


export default {
    components: {
        Link
    },
    data() {
        return {
            currentRoute: "",
        }
    },

    methods: {
        addActiveClass(routes) {
            if (routes.includes(route().current())) {
                return true;
            } else {
                return false;
            }
        },

    }
}
</script>

<style></style>