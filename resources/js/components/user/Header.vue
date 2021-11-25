<template>
   <div class="container">
        <nav class="nav">
            <div class="nav-menu">
                <ul class="nav-items">
                    <li class="nav-item">
                        <router-link to="/" class="nav-link">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/about" class="nav-link">About</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/contact" class="nav-link">Contact</router-link>
                    </li>
                </ul>

            </div>

            <div class="topsocial">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-snapchat"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
                <a href="#"><i class="fa fa-vimeo"></i></a>
                <a href="#"><i class="fa fa-rss"></i></a>
            </div>

        </nav>
        <div class="header">
            <div class="header-logo">
               <img  :src ="image_src">
            </div>
        </div>
   </div>
</template>

<script>
    export default {
        name:'Header',
        data(){
                return {
                    image_src: '/assets/images/perfection2.png',
                }
            },

    }
</script>

<style scoped>
    .nav{
        display: flex;
        background: #4068AD;
        margin:auto;
        width: 100%;
    }
    .nav-menu .nav-items{
        display: flex;
        list-style: none;
        padding: .3rem 1.1rem;

    }

    .nav-menu .nav-items .nav-item{
        padding: .5rem 1.2rem;
    }
    .nav-menu .nav-items .nav-item .nav-link{
        text-decoration: none;
        color:white;
    }

    .nav  .topsocial{
        margin-left: 45rem;
    }
    .nav  .topsocial i{
        padding: 1.8rem .6rem;
        color:white;
        text-decoration: none;
    }
    .header{
        display: flex;
        justify-content: center;
    }
    .header .header-logo{
        margin:.5rem 0;
    }
</style>
