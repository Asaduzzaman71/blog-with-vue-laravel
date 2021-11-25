<template>
  <div class="loader"></div>
</template>

<script>
export default {
    name:"SpinLoader",
}
</script>



<style>
#loader{
    position: relative;
}
.loader{
    position: absolute;
    top:0px;
    right:0px;
    width:100%;
    height:100%;
    background-color:#eceaea;
    background-image: url('/assets/images/Spinner-05.gif');
    background-size: 50px;
    background-repeat:no-repeat;
    background-position:center;
    z-index:10000000;
    opacity: 0.4;
    filter: alpha(opacity=40);
}
</style>

