<template>
   <!-- Sidebar Holder -->
    <nav id="sidebar"  :class="{active:isActive}">
        <div class="sidebar-header">
            <h3>Bootstrap Sidebar</h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="#homeSubmenu"  data-bs-toggle="collapse" aria-expanded="false" ><i class="fa fa-list right-padding"></i>Post Category<i class="fa fa-angle-down left-padding" aria-hidden="true" ></i></a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a href="#">All categories</a></li>
                    <li><a href="#">Create Category</a></li>
                    <li><a href="#">Edit Category</a></li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu"  data-bs-toggle="collapse" aria-expanded="false" >Pages<i class="fa fa-angle-down left-padding" aria-hidden="true"></i></a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>

    </nav>
</template>

<script>
export default {
    name:'Leftsidebar',
    props:['isActive']


}
</script>

<style scoped>
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */
.wrapper {
    display: flex;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background:  #212529;
    color: rgba(255,255,255,.8);
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #212529;
    border-bottom: 1px solid #4b545c;
}

#sidebar ul.components {
    padding: 20px 10px;

}

#sidebar ul p {
    color: rgba(255,255,255,.8);
    padding: 10px 0 10px;
}


#sidebar ul li a {
    padding: 10px 10px 10px 20px;
    font-size: 1.1em;
    display: block;
}


#sidebar ul li.active > a, a[aria-expanded="true"] {
    background-color: #007bff;
    color: #fff;
}
#sidebar ul li a:hover {
    color: #fff;
    background:#5d6064;
}




a[data-toggle="collapse"] {
    position: relative;
}
/*
a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
    content: '\e259';
    display: block;
    position: absolute;
    right: 20px;
    font-family: 'Glyphicons Halflings';
    font-size: 0.6em;
}
a[aria-expanded="true"]::before {
    content: '\e260';
} */


ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;

}
.left-padding{
    padding-left:3rem;
}
.right-padding{
    padding-right:.5rem;
}




/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
#content {
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */
@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}



</style>
