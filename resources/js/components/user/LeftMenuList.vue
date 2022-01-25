<template>
  <div class="left-menu-list-container">
        <ul  ref="category"  class="left-menu-list">
            <li  v-for="(category,index) in categories" v-bind:key="index"    @mouseover="changeIcon(category,$event)"  @mouseout="hover=false" :class="{ active: hover }"  ><a href="" ><span>{{category}} <i  :class="category == visible ? icon : 'hidden'"></i> </span></a> </li>
        </ul>
  </div>
</template>

<script>
export default {
    name:"LeftMenuList",
    components: {
    },
    data () {
            return {
                hover:false,
                visible:null,
                displayProperty:'is-visible',
                categories:['Travel','Fashion','Lifestyle','Beauty'],
                icon:"fa fa-caret-right",
            }
        },
    methods: {
      changeIcon: function (category,event) {
          event.preventDefault();
           this.hover=true;
           this.visible=category;
        console.log(event.target)
      }
    }


}
</script>


<style scoped>
.left-menu-list-container{
    width: 150px;
    background: skyblue;
}

.left-menu-list {
    padding-top: .4rem;
    margin-left: 0px;
    padding-left: 0px;
    position:relative;
}
.left-menu-list ul {
    margin-left: 0px;

}
.left-menu-list li {
    padding: .5rem 1rem;
    text-align: center;
}

.left-menu-list li a{
    text-decoration: none;
}

.left-menu-list li a span{
    color:black;
    font-family: sans-serif;
    font-weight: bold;
    margin: 0px;
}

.active:hover {
   background:gray;
}

.loader {
  border: 16px solid #f3f3f3;
  border-top: 16px solid #3498db;
  border-radius: 50%;
  width: 36px;
  height: 36px;
  animation: spin 2s linear infinite;
}

</style>
