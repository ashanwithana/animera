<template>
    <div class="side-wrapper position-fixed">
        <div class="user-wrapper pt-5">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="avatar rounded-circle border-3 border">
                        <img src="/images/avatar.png" class="w-100" alt="" v-if="$page.props.user === 'amith'">
                        <img src="/images/jagath.png" class="w-100" alt="" v-if="$page.props.user === 'jagath'">
                        <img src="/images/sanudi.png" class="w-100" alt="" v-if="$page.props.user === 'sanudi'">
                    </div>
                </div>
            </div>
            <div class="user-name text-center pt-3">
                <p class="name pb-0 mb-0" v-if="$page.props.user === 'amith'">Hi, Amith</p>
                <p class="name pb-0 mb-0" v-if="$page.props.user === 'jagath'">Hi, Dr. Jagath</p>
                <p class="name pb-0 mb-0" v-if="$page.props.user === 'sanudi'">Hi, Sanudi</p>
                <!-- <Link class="logout-btn-sidenav text-black py-1 px-2 rounded">Logout <i
                    class="fa-solid fa-arrow-right-from-bracket"></i></Link> -->
                <p class="email" type="button" v-if="$page.props.user === 'amith'">amith@gmail.com</p>
                <p class="email" type="button" v-if="$page.props.user === 'jagath'">drjagath@gmail.com</p>
                <p class="email" type="button" v-if="$page.props.user === 'sanudi'">sanudisarithma1999@gmail.com</p>
            </div>
        </div>
        <div class="menu-wrapper pt-4">
            <Link :href="route('index')" v-if="$page.props.user == 'jagath'">
            <div class="menu py-2 px-5 my-2" >
                <Link class="text-white menu-link" :href="route('index')"><i
                    class="fa-solid fa-home pe-2"></i>Home</Link>
            </div>
            </Link>
            <Link :href="route('animera')">
            <div class="menu py-2 px-5 my-2" v-bind:class="{
                active: addActiveClass(['animera']),
            }">
                <Link class="text-white menu-link" :href="route('animera')"><i
                    class="fa-solid fa-chart-simple pe-2"></i>Dashboard</Link>
            </div>
            </Link>
            <Link :href="route('mypets')"  v-if="$page.props.user == 'sanudi'">
            <div class="menu py-2 px-5 my-2" v-bind:class="{
                active: addActiveClass(['mypets']),
            }">
                <Link class="text-white menu-link" :href="route('mypets')"><i
                    class="fa-solid fa-dog pe-2"></i>My Pets</Link>
            </div>
            </Link>
            <Link :href="route('pets')" v-if="$page.props.user == 'amith' || $page.props.user == 'jagath'">
            <div class="menu py-2 px-5 my-2" v-bind:class="{
                active: addActiveClass(['pets', 'addpet','details']),
            }">
                <Link class="text-white menu-link" :href="route('pets')"><i class="fa-solid fa-paw pe-2"></i>Pets</Link>
            </div>
            </Link>
            <Link :href="route('vaccines')" v-if="$page.props.user == 'jagath' || $page.props.user == 'amith'">
            <div class="menu py-2 px-5 my-2" v-bind:class="{
                active: addActiveClass(['vaccines', 'addvaccine']),
            }">
                <Link class="text-white menu-link" :href="route('vaccines')"><i
                    class="fa-solid fa-syringe pe-2"></i>Vaccines</Link>
            </div>
            </Link>
            <Link :href="route('users')" v-if="$page.props.user == 'amith' || $page.props.user == 'jagath'">
            <div class="menu py-2 px-5 my-2" v-bind:class="{
                active: addActiveClass(['users', 'adduser']),
            }">
                <Link class="text-white menu-link" :href="route('users')"><i class="fa-solid fa-users pe-2"></i>Users
                </Link>
            </div>
            </Link>
            <Link :href="route('records')" v-if="$page.props.user == 'sanudi'">
            <div class="menu py-2 px-5 my-2" v-bind:class="{
                active: addActiveClass(['records','details']),
            }">
                <Link class="text-white menu-link" :href="route('records')"><i
                    class="fa-solid fa-sheet-plastic pe-2"></i>Pet Records</Link>
            </div>
            </Link>
           
            <Link :href="route('crossing')" v-if="$page.props.user == 'sanudi'">
            <div class="menu py-2 px-5 my-2" v-bind:class="{
                active: addActiveClass(['crossing','view','owner']),
            }">
                <Link class="text-white menu-link" :href="route('crossing')"><i
                    class="fa-solid fa-venus-mars pe-2"></i>Pet Crossing</Link>
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