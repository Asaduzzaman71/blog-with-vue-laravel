<template>
    <div class="wrapper">
        <Leftsidebar :isActive="isActive"/>
        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse"   @click="makeActiveOrInactive()">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-10">
                            <h1>Create Post Category</h1>
                        </div>
                        <div class="col-sm-2">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10 ">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Quick Example</h3>
                                </div>
                                <form @submit.prevent="addCategory()">
                                    <div class="card-body">
                                        <div class="form-group mb-3">
                                            <label for="name">Email address</label>
                                            <input type="name" class="form-control" id="name" placeholder="Enter Blog category name" v-model="form.name">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import Leftsidebar from '../../../components/admin/Leftsidebar.vue';
export default {
    name:"dashboard",
    components: {Leftsidebar},
    data () {
        return {
            isActive: false,
            form:{
                name: '',
            },
            errors:[],
        }
    },
    methods: {
        makeActiveOrInactive () {
            this.isActive = !this.isActive;
        },
        addCategory() {
            const token = (localStorage.getItem('access-token'));
            axios.post('/api/admin/categories', this.form,{
            headers: {
                authorization: "Bearer " + token
            }
            }).then((response) =>{
                this.$router.push({ name: "dashboard"});

            }).catch((error) =>{
                this.errors = error.response.data.error;
            })
        }
    }


}

</script>

<style  scoped>
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
    width: 100%;
    align-items: stretch;
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
.card-header{
    background-color: #007bff;
    height:50px;

}
button.btn {
    border: none;
    border-radius: .2rem ;
    padding: .5rem 1rem ;
    font-size: 1rem;
    font-family: var(--Livvic);
    cursor: pointer;
}



/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
#content {
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
    width:100%;
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
