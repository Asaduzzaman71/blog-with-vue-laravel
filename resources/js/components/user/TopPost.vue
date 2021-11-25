<template>
        <div class='container'>
            <div class="slider-post">
                <div class="slider-post-wrapper">
                    <div class="item-image">
                        <i class="fa fa-camera"></i>
                        <a href="https://perfection-oddthemes.blogspot.com/2017/09/chair-trick-performed-by-this-bearded.html" class="travel-post-image"></a>
                    </div>
                    <div class="slider-post-topinfo">
                        <div class="cat-title">
                            <a href="/search/label/Fashion?max-results=6">Travel</a>
                        </div>
                        <div class="item-title">
                            <a href="https://perfection-oddthemes.blogspot.com/2017/09/chair-trick-performed-by-this-bearded.html" title="Chair trick performed by this bearded man">Chair trick performed by this bearded man</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-side-grid">
                <div class="right-side-top-post-wrapper">
                    <div class="item-image">
                        <i class="fa fa-camera"></i>
                        <a href="https://perfection-oddthemes.blogspot.com/2017/09/chair-trick-performed-by-this-bearded.html" class="fashion-post-image"></a>
                    </div>
                    <div class="slider-post-topinfo">
                        <div class="cat-title">
                            <a href="/search/label/Fashion?max-results=6">Fashion</a>
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
                            <a href="https://perfection-oddthemes.blogspot.com/2017/09/chair-trick-performed-by-this-bearded.html" class="lifestyle-post-image"></a>
                        </div>
                        <div class="right-side-bottom-left-post-topinfo">
                            <div class="cat-title">
                                <a href="/search/label/Fashion?max-results=6">Life style</a>
                            </div>
                            <div class="item-title">
                                <a href="https://perfection-oddthemes.blogspot.com/2017/09/chair-trick-performed-by-this-bearded.html" title="Chair trick performed by this bearded man">Chair trick performed by this bearded man</a>
                            </div>
                        </div>
                    </div>
                    <div class="right-side-bottom-right-post-wrapper">
                        <div class="item-image">
                            <i class="fa fa-camera"></i>
                            <a href="https://perfection-oddthemes.blogspot.com/2017/09/chair-trick-performed-by-this-bearded.html" class="beauty-post-image"></a>
                        </div>
                        <div class="right-side-bottom-right-post-topinfo">
                            <div class="cat-title">
                                <a href="/search/label/Fashion?max-results=6">Beauty</a>
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

import { Carousel, Slide } from 'vue-carousel';

export default {
    name:"TopPost",
    components: {
    Carousel,
    Slide
  }

}
</script>

<style scoped>
.container{
    display: flex;
    justify-content: space-between;
    width:1000px;
}

.slider-post{
    width: 600px;
    padding-left: 0;
}
.right-side-grid{
    display: flex;
    width:400px;
    padding-right: 0;

    flex-direction: column;
}
.slider-post-wrapper{
    position:relative;

}
.item-image{
    position:relative;
    z-index: 1;
}
.fa-camera {
    position: absolute;
    top:5%;
    right:5%;
    z-index: 2;

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
}




.right-side-top-post-wrapper{
     position:relative;
}

.fashion-post-image{
    background:url('/assets/images/music.jpg') no-repeat center center;
    background-size: cover;
    width: 400px;
    height: 200px;
    display:block;
}
.bottom-items{
    display: flex;
}
.lifestyle-post-image{
    background:url('/assets/images/food.jpg') no-repeat center center;
    background-size: cover;
    width: 200px;
    height: 200px;
    display:block;
}
.beauty-post-image{
    background:url('/assets/images/fashion.jpg') no-repeat center center;
    background-size: cover;
    width: 200px;
    height: 200px;
    display:block;
}

.right-side-top-post-topinfo{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

}
.right-side-bottom-left-post-wrapper{
    position: relative;
}

.right-side-bottom-left-post-topinfo {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.right-side-bottom-right-post-wrapper{
    position: relative;
}
.right-side-bottom-right-post-topinfo {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
