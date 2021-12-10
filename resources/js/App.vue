<template>
    <div class="container">


        <router-view> </router-view>
    </div>
</template>

<script>
import Home from './components/user/Home.vue';
import Dashboard from './components/admin/Dashboard.vue';
    export default {
        components:{Home,Dashboard},

    }
</script>

