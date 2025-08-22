<template>
    <AppLayout>
    <div class="container-fluid">
        <Welcome />
        {{ $page.props.user }}
    </div>
    </AppLayout>
</template>
<script>
import Welcome from './partials/welcome.vue';
import AppLayout from '../../Layouts/AppLayout.vue';



export default {

    components: {
        AppLayout,
        Welcome
    },
    props:{
        
    },
    
    
    data() {
        return {

        }
    },
    mounted(){
        axios.get('/api/user')
      .then(res => {
        this.user = res.data.user;
        console.log(this.user);
      });
    },
    methods: {

    }
};
</script>

<style scoped>

</style>
