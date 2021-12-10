<template>
  <div class="container">
        <div class="main-sidebar">
            <div class="brand-link">
                <a><span class="first-letter">P</span>ERFECTION</a>
            </div>
        </div>
        <div class="right-side-wrapper">
            <nav class="head-navigation">
                <!-- Left navbar links -->
                <ul class="left-navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                    </li>
                </ul>
                <!-- Right navbar links -->
                <ul class="right-navbar-nav">
                <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="" data-toggle="dropdown" href="#">
                            <i class="fa fa-comments red-color"></i>
                            <span class="badge badge-danger">3</span>
                        </a>
                        <div class="comment-list">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="" alt="User Avatar" class="">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                                        </h3>
                                        <p class="">Call me whenever you can...</p>
                                        <p class=""><i class="far fa-clock "></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                <img src="" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell yellow-color"></i>
                            <span class="">15</span>
                        </a>
                        <div class="notification-list">
                            <span class="">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class=""></i> 3 new reports
                                <span class="">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class=""></i> 3 new reports
                                <span class="">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <li>
                        <div class="user-profile-image">
                            <img src="/assets/images/avatar.jpg" alt="User Avatar" class="avatar-img">
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="content">

            </div>
        </div>
    </div>

</template>

<script>
export default {
    name:"Dashboard",
}
</script>

<style scoped>
.container{
    display:flex;
}
.blue-color {
color:blue;
}
.green-color {
color:green;
}
.teal-color {
color:teal;
}
.yellow-color {
color:rgb(255, 208, 0);
}
.red-color {
color:rgba(255, 0, 0, 0.616);
}
.navbar-badge {
    font-size: .6rem;
    font-weight: 300;
    padding: 2px 4px;
    position: absolute;
    right: 5px;
    top: 9px;
}
.blue-bedge{
  height: 25px;
  width: 25px;
  background-color: blue;
  border-radius: 50%;
  display: inline-block;
}
.main-sidebar{
    top:0%;
    left:0%;
    background-color: #343a40;
    width:250px;

}

.brand-link{
    height:70px;
    width:250px;
    border-bottom: 1px solid #bbc4cc;
    background-color: #343a40;
}
.brand-link a{
    display:block;
    padding:.8rem 3.5rem;
    color: rgba(255,255,255,.8);
    font-weight: 300!important;
    letter-spacing: 3px;
    font-family:sans-serif;
}
.first-letter{
   font-size: 200%;

 }
.right-side-wrapper{
   width:100%

}

.head-navigation{
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #bbc4cc;
}
.head-navigation ul{
    display: flex;
    justify-content: space-around;

}
.head-navigation ul li{
    display: inline-block;
    margin: .5em;
    padding: .1em;
}

.head-navigation .right-navbar-nav a{



}
.comment-list{
    display: none;
}
.notification-list{
    display: none;
}

.avatar-img{
    border-radius: 50%;
    width: 30px;
    height: 30px;
    margin:0;
    padding:0;
}

</style>
