<template>
    <div class="side-wrapper">
        <div class="user-wrapper pt-5">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="avatar rounded-circle border-3 border">
                        <img src="images/avatar.png" class="w-100" alt="">
                    </div>
                </div>
            </div>
            <div class="user-name text-center pt-3">
                <p class="name pb-0 mb-0">Hi, Amith</p>
                <!-- <Link class="logout-btn-sidenav text-black py-1 px-2 rounded">Logout <i
                    class="fa-solid fa-arrow-right-from-bracket"></i></Link> -->
                <p class="email" type="button">amith@animera.com</p>
            </div>
        </div>
        <div class="menu-wrapper pt-4">
            <Link :href="route('animera')">
            <div class="menu py-2 px-5 my-2" v-bind:class="{
                active: addActiveClass(['animera']),
            }">
                <Link class="text-white menu-link" :href="route('animera')"><i
                    class="fa-solid fa-chart-simple pe-2"></i>Dashboard</Link>
            </div>
            </Link>
            <Link :href="route('pets')">
            <div class="menu py-2 px-5 my-2" v-bind:class="{
                active: addActiveClass(['pets']),
            }">
                <Link class="text-white menu-link" :href="route('pets')"><i class="fa-solid fa-paw pe-2"></i>Pets</Link>
            </div>
            </Link>
            <Link :href="route('vaccines')">
            <div class="menu py-2 px-5 my-2" v-bind:class="{
                active: addActiveClass(['vaccines']),
            }">
                <Link class="text-white menu-link" :href="route('vaccines')"><i class="fa-solid fa-syringe pe-2"></i>Vaccines</Link>
            </div>
            </Link>
            <Link :href="route('users')">
            <div class="menu py-2 px-5 my-2" v-bind:class="{
                active: addActiveClass(['users']),
            }">
                <Link class="text-white menu-link" :href="route('users')"><i class="fa-solid fa-users pe-2"></i>Users</Link>
            </div>
            </Link>
            <Link :href="route('users')">
            <div class="menu py-2 px-5 my-2" v-bind:class="{
                active: addActiveClass(['users']),
            }">
                <Link class="text-white menu-link" :href="route('users')"><i class="fa-solid fa-sheet-plastic pe-2"></i>Pet Records</Link>
            </div>
            </Link>
            <Link :href="route('users')">
            <div class="menu py-2 px-5 my-2" v-bind:class="{
                active: addActiveClass(['users']),
            }">
                <Link class="text-white menu-link" :href="route('users')"><i class="fa-solid fa-venus-mars pe-2"></i>Pet Crossing</Link>
            </div>
            </Link>
            <div class="menu py-2 px-5 my-2">
                <Link class="text-white menu-link"><i class="fa-solid fa-right-from-bracket pe-2"></i>Logout</Link>
            </div>
        </div>

    </div>
</template>

<script>
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