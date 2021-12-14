<template>
   <div class="header-container">
        <nav class="navigation">
            <div class="navigation-menu">
                <ul class="navigation-items">
                    <li class="navigation-item">
                        <router-link to="/" class="navigation-link">Home</router-link>
                    </li>
                    <li class="navigation-item">
                        <router-link to="/about" class="navigation-link">About</router-link>
                    </li>
                    <li class="navigation-item">
                        <router-link to="/contact" class="navigation-link">Contact</router-link>
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
                    image_src: '../assets/user/images/perfection2.png',
                }
            },

    }
</script>

<style scoped>
    .navigation{
        display: flex;
        background: #4068AD;
        margin:auto;
        width: 100%;
    }
    .navigation-menu .navigation-items{
        display: flex;
        list-style: none;
        padding: .3rem 1.1rem;

    }

    .navigation-menu .navigation-items .navigation-item{
        padding: .5rem 1.2rem;
    }
    .navigation-menu .navigation-items .navigation-item .navigation-link{
        text-decoration: none;
        color:white;
    }

    .navigation  .topsocial{
        margin-left: 45rem;
    }
    .navigation  .topsocial i{
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
