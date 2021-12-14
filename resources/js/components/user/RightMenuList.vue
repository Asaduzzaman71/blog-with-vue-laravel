<template>
    <div class="right-menu-list-container">
        <ul class="right-menu-list" style="min-height: 200px;">
            <li>
                <span class="thumb-container">
                    <a title="Enjoying the breeze at Small Island" href="">
                        <img alt="Enjoying the breeze at Small Island" src="https://4.bp.blogspot.com/-A12ybCENG6k/WjK_UwrilNI/AAAAAAAAHdk/QQNfAF3yIb0bAa62HnsIsv8oJaQSp_11ACLcBGAs/s200-c/pexels-photo-235711.jpg">
                        <br>
                        Enjoying the breeze at Small Island
                    </a>
                </span>
            </li>
            <li>
                <span class="thumb-container">
                    <a title="Enjoying the breeze at Small Island" href="">
                        <img alt="Enjoying the breeze at Small Island" src="https://4.bp.blogspot.com/-A12ybCENG6k/WjK_UwrilNI/AAAAAAAAHdk/QQNfAF3yIb0bAa62HnsIsv8oJaQSp_11ACLcBGAs/s200-c/pexels-photo-235711.jpg">
                        <br>
                        Enjoying the breeze at Small Island
                    </a>
                </span>
            </li>
            <li>
                <span class="thumb-container">
                    <a title="At last reached my one only destination - love this cave" href="">
                        <img alt="At last reached my one only destination - love this cave" src="https://2.bp.blogspot.com/-_CxNjlQaxsI/WjK_jQCt85I/AAAAAAAAHds/0tHcDWcIjEolbK88PLGc1OFwQec5v_zggCLcBGAs/s200-c/pexels-photo-522797.jpg">
                        <br>
                        At last reached my one only destination - love this cave
                    </a>
                </span>
            </li>
            <li>
                <span class="thumb-container">
                    <a title="Feels like heaven, 5 more days here yay" href="">
                    <img alt="Feels like heaven, 5 more days here yay" src="https://3.bp.blogspot.com/-oZwpqM7AQYg/Wbo6bCqohBI/AAAAAAAAG9E/IS35ISNXvc8M6flfdBHRTKfce20006-YgCLcBGAs/s200-c/StockSnap_6GV28UB5QU-1200x700.jpg">
                    <br>
                    Feels like heaven, 5 more days here yay
                    </a>
                </span>
            </li>
        </ul>
    </div>
</template>

<script>

export default {
    name:'RightMenuList',
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
