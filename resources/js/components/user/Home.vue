<template>
    <div class="home-container">
        <Header />
        <br>
        <br>
        <MainMenu />

        <div class="post-wrapper">
            <!-- <AllPost /> -->
            <Post />
            <div class="popular-posts">
                <h6 class="heading">Popular Post</h6>
                <div class="single-popular-post">

                    <div class="popular-post-img">
                        <img src="/assets/user/images/music.jpg">
                    </div>
                    <div class="popular-post-title">
                        <a href="https://perfection-oddthemes.blogspot.com/2017/09/chair-trick-performed-by-this-bearded.html" title="Chair trick performed by this bearded man">Chair trick performed by this bearded man</a>
                    </div>
                </div>

                <div class="widget Label" data-version="1" id="Label1">
                    <div>
                        <h2 class="heading">Category</h2>
                    </div>
                    <div class="categories-pill">
                        <span class="category-name-span">
                            <a class="button" href="https://perfection-oddthemes.blogspot.com/search/label/Activities?&amp;max-results=7">
                            Activities
                            </a>
                        </span>
                        <span class="category-name-span">
                            <a  class="button" href="https://perfection-oddthemes.blogspot.com/search/label/Beauty?&amp;max-results=7">
                            Beauty
                            </a>
                        </span>
                        <span class="category-name-span">
                            <a  class="button" href="https://perfection-oddthemes.blogspot.com/search/label/Break?&amp;max-results=7">
                            Break
                            </a>
                        </span>
                        <span class="category-name-span">
                            <a  class="button" href="https://perfection-oddthemes.blogspot.com/search/label/Cool?&amp;max-results=7">
                            Cool
                            </a>
                        </span>
                        <span class="category-name-span">
                            <a  class="button" href="https://perfection-oddthemes.blogspot.com/search/label/Extras?&amp;max-results=7">
                            Extras
                            </a>
                        </span>
                        <span class="category-name-span">
                            <a  class="button" href="https://perfection-oddthemes.blogspot.com/search/label/Fashion?&amp;max-results=7">
                            Fashion
                            </a>
                        </span>
                        <span class="category-name-span">
                            <a  class="button" href="https://perfection-oddthemes.blogspot.com/search/label/Lifestyle?&amp;max-results=7">
                            Lifestyle
                            </a>
                        </span>
                        <span class="category-name-span">
                            <a  class="button" href="https://perfection-oddthemes.blogspot.com/search/label/Music?&amp;max-results=7">
                            Music
                            </a>
                        </span>
                        <span class="category-name-span">
                            <a  class="button" href="https://perfection-oddthemes.blogspot.com/search/label/Sport?&amp;max-results=7">
                            Sport
                            </a>
                        </span>
                        <span class="category-name-span">
                            <a  class="button" href="https://perfection-oddthemes.blogspot.com/search/label/Travel?&amp;max-results=7">
                            Travel
                            </a>
                        </span>
                        <div class="clear"></div>
                    </div>
                </div>
                <div>
                    <div>
                        <h2 class="heading">Stay Connected</h2>
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
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import Header from '../../components/user/Header.vue';
    import MainMenu from '../../components/user/MainMenu.vue';
    import AllPost from '../../components/user/AllPost.vue';
    import Post from '../../components/user/Post.vue';

    export default {
        name:"Home",
        components: {Header,MainMenu,AllPost,Post},

    }
</script>
<style scoped>

.post-wrapper {
    border-top: 1px solid rgb(214, 213, 213);
    display: block;
    background: #fff;
    margin-top:450px;
    width:100%;
    display:flex;
}

.popular-posts{

    height:4000px;

}
.heading{
    padding-left:20px;
    font-family: var(--Abel);
    font-size: 1.3rem;
    margin-top: 15px;
}
.single-popular-post{
    display: flex;
    margin-bottom: 35px;
}
.popular-post-img{
     margin-left:20px;
}
.popular-post-img img{
    height:auto;
    width:220px;
}
.popular-post-title{
    margin-left:20px;
}
.popular-post-title a{
    font-family:var(--Lexend);
    font-size:20px;
    color: #000000;
    line-height: 20px;
    display: block;
}

.categories-pill{
    width:400px;
    display:flex;
    flex-wrap: wrap;
    margin-left:20px;

}
.button {
  background: #4068AD;
  color: #fff;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 18px;
}

.button:hover {
  background-color: #a888db;
}

    .topsocial{
        margin-left:20px;
        display:flex;
        flex-wrap: wrap;
        justify-content:flex-start;
    }
    .topsocial a{
        margin: .2rem .2rem;
        border:1px solid black;

    }
     .topsocial a:hover{
        background-color: #4068AD;


    }
    .topsocial i{
        padding: 1.5rem 1.5rem;
        color:black;
    }
    .topsocial i:hover{
        color:white;
    }
</style>
