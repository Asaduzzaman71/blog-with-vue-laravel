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
                            <button type="button" class="btn-primary" @click="openCreateModal()">Add category</button>
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
                                        <tr v-for="(category,index) in categories" :key="category.id">
                                            <td>{{index+1}}</td>
                                            <td>{{category.name}}</td>
                                            <td>{{category.name}}</td>
                                            <td>{{category.name}}</td>
                                            <td><button type="button" class="btn-danger" @click="deleteCategory({...category})"><i class="fa fa-trash"></i></button><button type="button" class="btn-primary" @click="openEditModal({...category})"><i class="fa fa-edit"></i></button></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <form @submit.prevent=" editMode ? editCategory():addCategory()">
                        <Modal v-if="createMode" @close="close">
                            <template v-slot:header> <h6 v-if="createMode">Add Category</h6></template>

                            <template v-slot:body>
                                 <div v-if="unauthorized">
                                    <span class="text-danger">{{ errors}} </span>
                                </div>
                                <div v-else>
                                    <div v-for="(errorArray, index) in errors" :key="index">
                                        <div v-for="(allErrors, index) in errorArray" :key="index">
                                            <span class="text-danger">{{ allErrors}} </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <label for="name">Category Title</label>
                                        <input type="name" class="form-control" id="name" placeholder="Enter Blog category name" v-model="form.name">
                                    </div>
                                </div>
                            </template>

                            <template v-slot:footer>
                                <button type="submit" class="btn-primary">
                                    Submit
                                    <span v-show="isLoading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                </button>
                            </template>
                        </Modal>
                        <Modal v-if="editMode" @close="close">
                            <template v-slot:header><h6 v-if="editMode">Edit Category</h6> </template>

                            <template v-slot:body>
                                 <div v-if="unauthorized">
                                    <span class="text-danger">{{ errors}} </span>
                                </div>
                                <div v-else>
                                    <div v-for="(errorArray, index) in errors" :key="index">
                                        <div v-for="(allErrors, index) in errorArray" :key="index">
                                            <span class="text-danger">{{ allErrors}} </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <label for="name">Category Title</label>
                                        <input type="name" class="form-control" id="name" placeholder="Enter Blog category name" v-model="form.name">
                                    </div>
                                </div>
                            </template>

                            <template v-slot:footer>
                                <button type="submit" class="btn-primary">
                                    <span v-show="isLoading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Submit
                                </button>


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
    components: {Leftsidebar,Header,Modal },
    data () {
        return {
            isActive: false,
            createMode: false,
            editMode:false,
            isLoading:false,
            form:{
                id:null,
                name: '',
            },
            categories:[],
            errors:[],
            unauthorized: false
        }
    },
    created() {
            const token = (localStorage.getItem('access-token'));
            axios.get('/api/admin/categories',{
                    headers: {
                        authorization: "Bearer " + token
                    }
                })
                .then(response => {
                    this.categories = response.data.results;
                    console.log(this.categories);
                });
        },
    methods: {
        changeIsActiveValue(IsActiveValue) {
            this.isActive=IsActiveValue;
        },
        openCreateModal() {
            this.createMode = true;
        },
        openEditModal(category) {
            this.form=[];
            this.createMode = false;
            this.editMode = true;
            this.form=category;
        },
        close() {
            this.createMode = false;
            this.editMode=false;
             this.form=false;
        },

        addCategory() {
            this.isLoading=true;
            const token = (localStorage.getItem('access-token'));
            axios.post('/api/admin/categories', this.form,{
            headers: {
                authorization: "Bearer " + token
            }
            }).then((response) =>{
                this.categories.push(response.data.results);
                this.$swal(
                            'Updated!',
                            'Category has been updated.',
                            'success'
                            )
                this.createMode=false;
                this.errors=[];
                this.form=[];
                this.unauthorized = false;
            }).catch((error) =>{
                console.log(error.response.data.errors);
                if(error.response.status == 422){
                    this.unauthorized = false;
                    this.errors = error.response.data.errors;

                }
                else if(error.response.status == 401){
                    this.unauthorized = true;
                    this.errors = error.response.data.error;
                }
            }).finally(() => {
                      this.isLoading = false;
                    });
        },
        editCategory(){
            const token = (localStorage.getItem('access-token'));
            this.isLoading=true;
            axios.put('/api/admin/categories/'+this.form.id, this.form,{
            headers: {
                authorization: "Bearer " + token
            }
            }).then((response) =>{
                this.categories.find((item,index)=>{
                    if(item.id==response.data.results.id){
                        this.categories.splice(index,1,response.data.results);
                    }
                })
                  this.$swal(
                            'Updated!',
                            'Category has been updated.',
                            'success'
                            )
                this.editMode=false;
                this.form=[];
                this.errors=[];
                this.unauthorized = false;
            }).catch((error) =>{
                console.log(error.response.data.errors);

                if(error.response.status == 422){
                    this.unauthorized = false;
                    this.errors = error.response.data.errors;

                }
                else if(error.response.status == 401){
                    this.unauthorized = true;
                    this.errors = error.response.data.error;
                }
            }).finally(() => {
                      this.isLoading = false;
                    });
        },

        deleteCategory(category){

            this.$swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                    const token = (localStorage.getItem('access-token'));
                    axios.delete('/api/admin/categories/'+category.id,{
                    headers: {
                        authorization: "Bearer " + token
                    }
                    }).then((response) =>{
                        this.$swal(
                            'Deleted!',
                            'Category has been deleted.',
                            'success'
                            )
                        this.categories.find((item,index)=>{
                            if(item.id==response.data.results.id){
                                this.categories.splice(index,1);
                            }
                        })
                        this.errors=[];
                        this.unauthorized = false;
                    }).catch((error) =>{
                        console.log(error.response);
                        if(error.response.status == 422){
                            this.unauthorized = false;
                            this.errors = error.response.data.errors;

                        }
                        else if(error.response.status == 404){
                            this.unauthorized = true;
                            this.errors = error.response.data.error;
                        }
                    })
                })

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
button.btn-danger{
    color: white;
    background: red;
    border: 1px solid red;
    border-radius: 4px;
    margin: 20px 5px;
    padding: 5px 10px;
}


</style>
