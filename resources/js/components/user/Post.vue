<template>
    <div class="post">
        <div class="single-post">
            <div class="post-img">
                <img src="/assets/images/strawberry.jpg">
            </div>
            <div class="post-info">
                <div class="item-title">
                    <a href="https://perfection-oddthemes.blogspot.com/2017/09/chair-trick-performed-by-this-bearded.html" title="Chair trick performed by this bearded man">Chair trick performed by this bearded man</a>
                </div>
                <hr>
                <div class="post-creation-time">
                    September 14, 2017
                    <i class="fa fa-comments"></i> 5
                </div>
                <div class="post-description">
                        You should never complain, complaining is a weak emotion, you got life, we breathing, we blessed. Surround yourself with angels. They neve...
                </div>
                <div class="post-read-more">
                    <a href="https://perfection-oddthemes.blogspot.com/2017/09/chair-trick-performed-by-this-bearded.html">READ MORE</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
   name:"Post",
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
.post{
    padding:30px;
    border-right: 1px solid rgb(214, 213, 213);
    width: 1000px;
    height:4000px;

}
.single-post{

    margin-bottom: 35px;
}

.post-img{
    margin-left:20px;

}
.post-img img{
    height:170px;
    width:240px;

}
.post-info{
    padding-left:30px
}
hr{
    width: 100px;
    margin-left:0;
    padding-left:0;
}
.item-title a{
    font-family:var(--Lexend);
    font-size:20px;
    color:black ;
    line-height: 1.4em;
    font-weight: 700;

}
.post-creation-time{
    color: #aaa;
    font-weight: 400px;
    font-size: 15px;
    font-family:verdana;
    margin-top: 15px;
}
.post-description{
    font-size:18px;
    color:black ;
    margin-top: 15px;
    font-family: var(--Lexend);
}
.post-read-more{
    margin-top: 15px;

}
.post-read-more a{
    color:blueviolet;
    font-family:var(--serif);
    font-size:15px;
    font-weight: 700px;
}



</style>
