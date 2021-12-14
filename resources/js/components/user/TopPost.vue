<template>
    <div class='top-post-container'>
        <Slider />
        <div class="right-side-grid">
            <div class="right-side-top-post-wrapper">
                <div class="item-image">
                    <i class="fa fa-camera"></i>
                    <a href="https://perfection-oddthemes.blogspot.com/2017/09/chair-trick-performed-by-this-bearded.html" > <img :src ="fashion_image_src" class="fashion-post-image"> </a>

                </div>
                <div class="right-side-top-post-topinfo">
                    <div class="cat-title">
                        <a class="button" href="/search/label/Fashion?max-results=6">Fashion</a>
                    </div>
                    <div class="item-title">
                        <a href="https://perfection-oddthemes.blogspot.com/2017/09/chair-trick-performed-by-this-bearded.html" title="Chair trick performed by this bearded man">Chair trick performed by this bearded man</a>
                    </div>
                </div>
            </div>
            <div class="bottom-items">
                <div class="right-side-bottom-left-post-wrapper">
                    <div class="item-image">
                        <i class="fa fa-camera"></i>
                        <a  href="https://perfection-oddthemes.blogspot.com/2017/09/chair-trick-performed-by-this-bearded.html" ><img :src ="life_style_image_src" class="lifestyle-post-image"></a>
                    </div>
                    <div class="right-side-bottom-left-post-topinfo">
                        <div class="cat-title">
                            <a class="button" href="/search/label/Fashion?max-results=6">Life style</a>
                        </div>
                        <div class="item-title">
                            <a href="https://perfection-oddthemes.blogspot.com/2017/09/chair-trick-performed-by-this-bearded.html" title="Chair trick performed by this bearded man">Chair trick performed by this bearded man</a>
                        </div>
                    </div>
                </div>
                <div class="right-side-bottom-right-post-wrapper">
                    <div class="item-image">
                        <i class="fa fa-camera"></i>
                        <a href="https://perfection-oddthemes.blogspot.com/2017/09/chair-trick-performed-by-this-bearded.html"  > <img :src ="beauty_image_src" class="beauty-post-image"></a>
                    </div>
                    <div class="right-side-bottom-right-post-topinfo">
                        <div class="cat-title">
                            <a  class="button" href="/search/label/Fashion?max-results=6">Beauty</a>
                        </div>
                        <div class="item-title">
                            <a href="https://perfection-oddthemes.blogspot.com/2017/09/chair-trick-performed-by-this-bearded.html" title="Chair trick performed by this bearded man">Chair trick performed by this bearded man</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import Slider from '../../components/user/Slider.vue';
export default {
    name:"TopPost",
    components: {Slider},
    data() {
        return {
            fashion_image_src : '../assets/user/images/music.jpg',
            life_style_image_src :'../assets/user/images/food.jpg',
            beauty_image_src : '../assets/user/images/fashion.jpg',
        }
    },
}
</script>

<style scoped>
.top-post-container{
    display: flex;
    justify-content: space-between;
    width:1000px;
}
.button {
  background-color: rgb(101, 101, 216);
  border-radius: 10%;
  color: white;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  cursor: pointer;
}
.cat-title{
    text-align: center;
}
.item-title{
    text-align: center;
}
.cat-title a{
    color:white;
    text-align: center;

}
.item-title a{
    color:white;
    text-align: center;
}
 .item-title a:hover{
  text-decoration:underline;
}
.item-image{
    top:0%;
    left:0%;
    right:0%;
    bottom:0%;
    z-index: 1;
}
.fa-camera {
    top:5%;
    right:5%;
    z-index: 2;

}
.right-side-grid{
    display: flex;
    width:400px;
    padding-right: 0;
    flex-direction: column;
}


.right-side-top-post-wrapper{
    position:relative;
}
.fashion-post-image{
    background: no-repeat center center;
    background-size: cover;
    width: 400px;
    height: 200px;
    display:block;
}


.right-side-top-post-topinfo{
    position: absolute;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%);
    z-index: 3;
}


.bottom-items{
    display: flex;
}
.lifestyle-post-image{
    background: no-repeat center center;
    background-size: cover;
    width: 200px;
    height: 200px;
    display:block;
}
.beauty-post-image{
    background: no-repeat center center;
    background-size: cover;
    width: 200px;
    height: 200px;
    display:block;
}

.right-side-top-post-topinfo{
    position: absolute;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%);
    z-index: 3;

}
.right-side-bottom-left-post-wrapper{
    position: relative;
}

.right-side-bottom-left-post-topinfo {
    position: absolute;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%);
    z-index: 3;
}
.right-side-bottom-right-post-wrapper{
    position: relative;
}
.right-side-bottom-right-post-topinfo {
    position: absolute;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%);
    z-index: 3;
}
</style>
