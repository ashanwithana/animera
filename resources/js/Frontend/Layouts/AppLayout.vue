<template>
    <div>
        <Topnavigationbar style="top: 0;" />

        <slot />

        <Footer />

    </div>

</template>
<script setup>

</script>

<script>
import Topnavigationbar from './partials/Topnavigationbar.vue';
import Footer from './partials/Footer.vue';


export default {
    components: {
        Topnavigationbar,
        Footer
    },
    mounted() {
        var toggleButton = document.getElementById('darkmode-toggle');
        var textElement = document.getElementById('body');

        toggleButton.addEventListener('change', function () {
            if (toggleButton.checked) {
                textElement.classList.add('dark');
            } else {
                textElement.classList.remove('dark');
            }
        });
    }
}
</script>

<style>
label {
    width: 70px;
    height: 35px;
    position: relative;
    display: block;
    background: #ebebeb;
    border-radius: 200px;
    box-shadow: inset 0px 5px 15px rgba(0, 0, 0, 0.4),
        inset 0px -5px 15px rgba(255, 255, 255, 0.4);
    cursor: pointer;
    transition: 0.3s;

    &:after {
        content: "";
        width: 30px;
        height: 30px;
        position: absolute;
        top: 3px;
        left: 3px;
        background: linear-gradient(180deg, #ffcc89, #d8860b);
        border-radius: 180px;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }

    svg {
        position: absolute;
        width: 25px;
        top: 5px;
        z-index: 100;

        &.sun {
            left: 5px;
            fill: #fff;
            transition: 0.3s;
        }

        &.moon {
            left: 40px;
            fill: #7e7e7e;
            transition: 0.3s;
        }
    }
}

input {
    width: 0;
    height: 0;
    visibility: hidden;

    &:checked+label {
        background: #242424;

        &:after {
            left: 67px;
            transform: translateX(-100%);
            background: linear-gradient(180deg, #777, #3a3a3a);
        }

        svg {
            &.sun {
                fill: #7e7e7e;
            }

            &.moon {
                fill: #fff;
            }
        }

        +.background {
            background: #242424;
        }
    }

    &:active:after {
        width: 260px;
    }
}

.dark {
    background-color: #343434 !important;
}
</style>