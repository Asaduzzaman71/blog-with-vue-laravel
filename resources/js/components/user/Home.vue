<template>
    <div class="container">
        <Header />
        <br>
        <br>
        <MainMenu />


    </div>

</template>

<script>
    import Header from '../../components/user/Header.vue';
    import MainMenu from '../../components/user/MainMenu.vue';
    export default {
            name:"Home",
            components: {Header,MainMenu},

    }
</script>
<style scoped>

</style>
