<template>
    <div class="right-menu-list-container">
        <ul class="right-menu-list" style="min-height: 200px;">
            <li v-for="(post,index) in postsByCategory" :key="index">
                <span class="thumb-container">
                    <a title="Enjoying the breeze at Small Island" href="">
                        <img alt="Enjoying the breeze at Small Island" :src = "'/storage/'+post.post_images[index].image">
                        <br>
                        {{post.title}}
                    </a>
                </span>
            </li>

        </ul>
    </div>
</template>

<script>

export default {
    name:'RightMenuList',
    props:['postsByCategory']
}
</script>

<style scoped>
.right-menu-list-container{
    width: 650px;
    padding-left: 0px;
}
.right-menu-list{
    display: flex;
    padding-top: .2rem;
    width:650px;
    padding-left: 0px;
    justify-content: space-around;
}
.right-menu-list li {
    padding:  0 .1rem;
}

.right-menu-list li a{
    display: block;
     width:150px;
}
.thumb-container img{
    width:150px;
    height: 150px;
}
</style>
