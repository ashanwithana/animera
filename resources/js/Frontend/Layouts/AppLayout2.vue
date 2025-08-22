    <template>
    <div>
        <Topnavigationbar style="top: 0;" />

        <slot />


    </div>

</template>
<script setup>

</script>

<script>
import Topnavigationbar from './partials/Topnavigationbar.vue';



export default {
    components: {
        Topnavigationbar,
       
    },
    mounted() {
        
    }
}
</script>

<style>

</style>