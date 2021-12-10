<template>
<div class="slider-post">
    <carousel :items-to-show="1"  :autoplay="4000" :wrap-around="true">
            <slide v-for="slide in 10" :key="slide">
                <div class="slider-post-wrapper">
                    <div class="item-image">
                        <i class="fa fa-camera"></i>
                        <a href="https://perfection-oddthemes.blogspot.com/2017/09/chair-trick-performed-by-this-bearded.html" class="travel-post-image"></a>
                    </div>
                    <div class="slider-post-topinfo">
                        <div class="cat-title">
                            <a class="button" href="/search/label/Fashion?max-results=6">Travel</a>
                        </div>
                        <div class="item-title">
                            <a href="https://perfection-oddthemes.blogspot.com/2017/09/chair-trick-performed-by-this-bearded.html" title="Chair trick performed by this bearded man">Chair trick performed by this bearded man</a>
                        </div>
                    </div>
                </div>
            </slide>

        <template #addons>
            <navigation />
        </template>
    </carousel>
</div>

</template>

<script scoped>
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';
export default {
    name:"Slider",
    data() {
      return {

      }
    },
    components: {
        Carousel,
        Slide,
        Pagination,
        Navigation,
    },
}
</script>

<style>
.slider-post{
    width: 600px;
    padding-left: 0;
}
.slider-post-wrapper{
    position:relative;

}
.cat-title{
    color:white;
}
.button {
  background-color: rgb(101, 101, 216);
  border-radius: 10%;
  color: white;
  padding: 8px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  cursor: pointer;
}
.item-image{
    position:relative;
    z-index: 1;
    background: no-repeat;
}
.fa-camera {

    position: absolute;
    top:5%;
    right:5%;
    top: 20px;
    right: 20px;
    color: #fff;
    padding: 7px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -o-border-radius: 50%;
    -moz-border-radius: 50%;
    font-size: 12px;
    background: rgba(0, 0, 0, 0.5);
    transition: 300ms;
    z-index: 9;

}
.travel-post-image{
    background:url('/assets/images/strawberry.jpg') no-repeat center center;
    background-size: cover;
    height: 400px;
    width: 600px;
    margin: 0;
    padding: 0;
    display:block;
}
.slider-post-topinfo {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 3;
  color:white;


}
.slider-post-topinfo a{
     color:white;

}

.carousel__prev,
.carousel__next {
  box-sizing: content-box;
  border: 1px solid white;
  width:40px;
  height:40px;
  border-radius: 50%;
  background: transparent;
}
.carousel__prev{
    left:5%;
}
.carousel__next {
  right:5%;
}

</style>
