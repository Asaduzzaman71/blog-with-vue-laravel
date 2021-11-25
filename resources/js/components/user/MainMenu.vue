<template>
<div class="container">
    <div class="main-menu">
        <ul class="main-menu-list" >
            <li><a href="/" class="">Home</a></li>
            <li><a  v-on:click="toggle = !toggle" class="menu-target" href="#">Category<i class="fa fa-caret-down"></i></a></li>
        </ul>
    </div>
    <div  v-show="toggle" class="main-sub-menu">
        <LeftMenuList   />
        <RightMenuList  />
    </div>
    <div class="top-posts">
        <TopPost />
    </div>
</div>

</template>

<script>
import RightMenuList from '../../components/user/RightMenuList.vue';
import LeftMenuList from '../../components/user/LeftMenuList.vue';
import TopPost from '../../components/user/TopPost.vue';
export default {
    data () {
        return {
            toggle: false,

        }
    },
    components: {RightMenuList,LeftMenuList,TopPost},
}
</script>

<style scoped>
.container{
   position: relative;
   width:1000px;
   margin: 0 auto;
}
.main-menu{
    border-top: 1px solid rgb(214, 213, 213);
    border-bottom: 1px solid rgb(214, 213, 213);
    width:1000px;
    margin: 0 auto;

}
.main-menu .main-menu-list{
    display: flex;
    justify-content: center;
}
.main-menu .main-menu-list .menu-target i{
    padding: 0 .5rem;

}

.main-menu .main-menu-list > li a{
    padding: 1.5rem;
    font: normal normal 16px 'Lato', sans-serif;
    font-weight: 600;
    letter-spacing: 0px;
    font-size: 20px;
    color:black

}
.main-sub-menu{
    display: flex;
    width: 800px;
    position: absolute;
    margin: 0 100px;
    z-index: 2;
    background: white;

}

.top-posts{
    position: absolute;
    margin: auto;
    z-index: 1;

}

</style>
