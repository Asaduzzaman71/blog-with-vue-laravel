<template>
    <div class="wrapper">
        <Leftsidebar :isActive="isActive"/>
        <div id="content">
            <Header @changeIsActive="changeIsActiveValue($event)"/>
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-10">
                            <h1>Category List</h1>
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
                    <div class="row mb-2">
                        <div class="offset-10 col-sm-2">
                            <button type="button" class="btn-primary" @click="openModal()">Add category</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card card-primary">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sl#</th>
                                            <th>Category name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Mary</td>
                                            <td>Moe</td>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>mary@example.com</td>
                                        </tr>
                                        <tr>
                                            <td>July</td>
                                            <td>Dooley</td>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>july@example.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                      <form @submit.prevent="addCategory()">
                    <Modal v-show="visible" @close="close">
                        <template v-slot:header> <h6>Add Category</h6> </template>

                        <template v-slot:body>

                                    <div class="card-body">
                                        <div class="form-group mb-3">
                                            <label for="name">Category Title</label>
                                            <input type="name" class="form-control" id="name" placeholder="Enter Blog category name" v-model="form.name">
                                        </div>
                                    </div>


                        </template>

                        <template v-slot:footer>
                            <button type="submit" class="btn-primary">Submit</button>
                        </template>
                    </Modal>
                     </form>
                </div>
            </section>
        </div>
    </div>
</template>


<script>
import axios from "axios";
import Leftsidebar from '../components/admin/Leftsidebar.vue';
import Header from '../components/admin/Header.vue';
import Modal from "../components/admin/Modal.vue";
export default {
    name:"Category",
    components: {Leftsidebar,Header,Modal},
    data () {
        return {
            isActive: false,
            visible: false,
            form:{
                name: '',
            },
            errors:[],
        }
    },
    methods: {

        addCategory() {
            alert('hi');
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
        },
        changeIsActiveValue(IsActiveValue)
        {
            this.isActive=IsActiveValue;
        },
        openModal() {
        this.visible = true;
        },
        close() {
        this.visible = false;
        },
    }


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

.card-header{
    background-color: #007bff;
    height:50px;

}
button.btn-primary{
    color: white;
    background: blue;
    border: 1px solid blue;
    border-radius: 4px;
    margin: 20px 5px;
    padding: 5px 10px;
}


</style>
