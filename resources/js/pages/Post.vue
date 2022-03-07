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
                            <li class="breadcrumb-item active">Post</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="offset-10 col-sm-2">
                            <button type="button" class="btn-primary" @click="openCreateModal()">Create post</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card card-primary">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sl#</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(post,index) in posts" :key="post.id">
                                            <td>{{index+1}}</td>
                                            <td><img :src="'/storage/'+post.post_images[0].image" class="rounded" alt="Services" width="100" height="100"></td>
                                            <td>{{post.title}}</td>
                                            <td><button type="button" class="btn-danger" @click="deletePost({...post})"><i class="fa fa-trash"></i></button><button type="button" class="btn-primary" @click="openEditModal({...post})"><i class="fa fa-edit"></i></button></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <form @submit.prevent=" editMode ? editPost():addPost()" enctype="multipart/form-data">
                        <Modal v-if="createMode" @close="close">
                            <template v-slot:header> <h6 v-if="createMode">Create Post</h6></template>

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
                                        <label for="title">Post Title</label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter post title" v-model="title">
                                    </div>
                                    <div class="form-group mb-3">
                                        <div>Choose post category</div>
                                        <select  v-model="category_id"  id="category_list">
                                            <option  v-for="category in categories" :key="category.id" :value="category.id">
                                                {{category.name}}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="excerpt">Excerpt</label>
                                        <input type="excerpt" class="form-control" id="excerpt" placeholder="Enter post title" v-model="excerpt">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="Content">Content</label>
                                        <QuillEditor v-model:content="content"  contentType="html" theme="snow" toolbar="#custom-toolbar"  @change="onEditorChange($event)">
                                            <template #toolbar>
                                            <div id="custom-toolbar">
                                                <select class="ql-size">
                                                <option value="small"></option>
                                                <option selected></option>
                                                <option value="large"></option>
                                                <option value="huge"></option>
                                                </select>
                                                <select class="ql-header">
                                                <option :value="1"></option>
                                                <option :value="2"></option>
                                                <option :value="3"></option>
                                                <option :value="4"></option>
                                                <option :value="5"></option>
                                                <option :value="6"></option>
                                                <option selected></option>
                                                </select>
                                                <button class="ql-bold"></button>
                                                <button class="ql-italic"></button>
                                                <button class="ql-underline"></button>
                                                <button class="ql-strike"></button>
                                                <button class="ql-script" value="sub"></button>
                                                <button class="ql-script" value="super"></button>
                                                <select class="ql-align">
                                                <option selected></option>
                                                <option value="center"></option>
                                                <option value="right"></option>
                                                <option value="justify"></option>
                                                </select>
                                                <button class="ql-list" value="ordered"></button>
                                                <button class="ql-list" value="bullet"></button>
                                                <button class="ql-blockquote"></button>
                                                <button class="ql-code-block"></button>
                                                <button class="ql-link"></button>
                                                <button class="ql-image"></button>

                                                <button id="your-button" @click="setContent()">Save</button>
                                            </div>
                                            </template>
                                        </QuillEditor>
                                    </div>
                                    <div  class="image-preview-container">
                                        <div v-for="(previewFile, key) in previewFiles" :key="key">
                                            <div class ="image-preview-wrapper">
                                                <img class="preview" :src=previewFile  />
                                                <button @click='removePreviewImage(key)' class="close close-button">
                                                    <span>&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group mb-3">

                                        <input type="file" style="display:none" multiple accept="image/*" @change="onFileChange" ref="fileInput"/>
                                        <button @click.prevent="$refs.fileInput.click()">Choose Image</button>
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
                            <template v-slot:header><h6 v-if="editMode">Edit Post</h6> </template>


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
                                        <label for="title">Post Title</label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter post title" v-model="title">
                                    </div>
                                    <div class="form-group mb-3">
                                        <div>Choose post category</div>
                                        <select  v-model="category_id"  id="category_list">
                                            <option  v-for="category in categories" :key="category.id" :value="category.id">
                                                {{category.name}}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="excerpt">Excerpt</label>
                                        <input type="excerpt" class="form-control" id="excerpt" placeholder="Enter post title" v-model="excerpt">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="Content">Content</label>
                                        <QuillEditor v-model:content="content"  contentType="html" theme="snow" toolbar="#custom-toolbar"  @change="onEditorChange($event)">
                                            <template #toolbar>
                                            <div id="custom-toolbar">
                                                <select class="ql-size">
                                                <option value="small"></option>
                                                <option selected></option>
                                                <option value="large"></option>
                                                <option value="huge"></option>
                                                </select>
                                                <select class="ql-header">
                                                <option :value="1"></option>
                                                <option :value="2"></option>
                                                <option :value="3"></option>
                                                <option :value="4"></option>
                                                <option :value="5"></option>
                                                <option :value="6"></option>
                                                <option selected></option>
                                                </select>
                                                <button class="ql-bold"></button>
                                                <button class="ql-italic"></button>
                                                <button class="ql-underline"></button>
                                                <button class="ql-strike"></button>
                                                <button class="ql-script" value="sub"></button>
                                                <button class="ql-script" value="super"></button>
                                                <select class="ql-align">
                                                <option selected></option>
                                                <option value="center"></option>
                                                <option value="right"></option>
                                                <option value="justify"></option>
                                                </select>
                                                <button class="ql-list" value="ordered"></button>
                                                <button class="ql-list" value="bullet"></button>
                                                <button class="ql-blockquote"></button>
                                                <button class="ql-code-block"></button>
                                                <button class="ql-link"></button>
                                                <button class="ql-image"></button>

                                                <button id="your-button" @click="setContent()">Save</button>
                                            </div>
                                            </template>
                                        </QuillEditor>
                                    </div>
                                    <div  class="image-preview-container">
                                        <div v-for="(uploadedImage, key) in uploadedImages" :key="key">
                                            <div class ="image-preview-wrapper">
                                                <img class ="preview" :src = "'/storage/'+uploadedImage.image"  />
                                                <button @click.prevent ='removeUploadedImage(uploadedImage,key)' class="close close-button">
                                                    <span>&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div v-for="(previewFile, key) in previewFiles" :key="key">
                                            <div class="image-preview-wrapper">
                                                <img class="preview" :src=previewFile  />
                                                <button @click='removePreviewImage(key)' class="close close-button">
                                                    <span>&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group mb-3">

                                        <input type="file" style="display:none" multiple accept="image/*" @change="onFileChange" ref="fileInput"/>
                                        <button @click.prevent="$refs.fileInput.click()">Choose Image</button>
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
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';
export default {
    name:"Post",
    components: {Leftsidebar,Header,Modal,QuillEditor },
    data () {
        return {
            isActive: false,
            createMode: false,
            editMode:false,
            isLoading:false,
            title: '',
            category_id:null,
            content:'',
            excerpt:'',
            images:[],
            posts:[],
            categories:[],
            postId : null,
            errors:[],
            unauthorized: false,
            form:[],
            images: [],
            previewFiles: [],
            uploadedImages:[],

        }
    },
    created() {
            const token = (localStorage.getItem('access-token'));
            axios.get('/api/admin/posts',{
                    headers: {
                        authorization: "Bearer " + token,
                    }
                })
                .then(response => {
                    this.posts = response.data.results;

                });
            axios.get('/api/admin/categories',{
                    headers: {
                        authorization: "Bearer " + token
                    }
                })
                .then(response => {
                    this.categories = response.data.results;
                    this.category_id = this.categories[0].id;

                });
        },
    methods: {
        changeIsActiveValue(IsActiveValue) {
            this.isActive=IsActiveValue;
        },
        openCreateModal() {
            this.createMode = true;
        },
        openEditModal(post) {
            this.form = [];
            this.createMode = false;
            this.editMode = true;
            this.postId = post.id;
            this.title = post.title;
            this.category_id = post.category_id;
            this.excerpt = post.excerpt;
            this.content = post.content;
            this.uploadedImages = post.post_images.map(( postImage ) =>postImage);
        },
        close() {
            this.createMode = false;
            this.editMode = false;
            this.form = false;
            this.category_id = null;
        },
        onFileChange(event) {
            const selectedFiles = event.target.files;
             for (let i = 0; i < selectedFiles.length; i++) {
                this.images.push(selectedFiles[i]);
                let reader = new FileReader();
                reader.onload = (e) => {
                    this.previewFiles[i] = reader.result;//make base 64 encoded
                };
                reader.readAsDataURL(selectedFiles[i]);
            }
        },
        removePreviewImage(key){
              this.images.splice(key,1);
              this.previewFiles.splice(key,1);
        },
        removeUploadedImage(uploadedImage,key){
             const token = (localStorage.getItem('access-token'));
             axios.delete('/api/admin/post-images/'+uploadedImage.id,{
                    headers: {
                        authorization: "Bearer " + token
                    }
            }).then((response) =>{
                this.uploadedImages.splice(key,1);
            }).catch((error) =>{

            });

        },

        addPost() {
            this.isLoading = true;
            const token = (localStorage.getItem('access-token'));
            let formData = new FormData();
            formData.append('title',this.title);
            formData.append('excerpt',this.excerpt);
            formData.append('category_id',this.category_id);
            formData.append('content',this.content);
            for( var i = 0; i < this.images.length; i++ ){
                formData.append('images[' + i + ']', this.images[i]);
            }

            console.log(formData);
            axios.post('/api/admin/posts', formData,{
            headers: {
                authorization: "Bearer " + token,
                "Content-Type": "multipart/form-data"

            }
            }).then((response) =>{
                this.posts.push(response.data.results);
                this.$swal(
                            'Updated!',
                            'Post has been updated.',
                            'success'
                            )
                this.createMode=false;
                this.errors=[];
                this.form=[];
                this.previewFiles=[];
                this.unauthorized = false;
            }).catch((error) =>{
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
        editPost(){
            console.log(this.title);
            this.isLoading = true;
            let formData = new FormData();
            formData.append('title',this.title);
            formData.append('excerpt',this.excerpt);
            formData.append('category_id',this.category_id);
            formData.append('content',this.content);
            formData.append("_method", "PUT");
            console.log(formData.entries);

            for( var i = 0; i < this.images.length; i++ ){
                formData.append('images[' + i + ']', this.images[i]);
            }
            const token = (localStorage.getItem('access-token'));

            axios.post('/api/admin/posts/'+this.postId, formData,{
                headers: {
                    authorization: "Bearer " + token,
                    "Content-Type": "multipart/form-data"
                }
            }).then(( response ) =>{
                this.posts.find(( item,index ) => {
                    if( item.id == response.data.results.id ){
                        this.posts.splice(index,1,response.data.results);
                    }
                })
                this.$swal(
                        'Updated!',
                        'Category has been updated.',
                        'success'
                        )
                this.editMode=false;
                this.images=[];
                this.previewFiles=[];
                this.uploadedImages = [];
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

        deletePost(post){

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
                    axios.delete('/api/admin/posts/'+post.id,{
                    headers: {
                        authorization: "Bearer " + token
                    }
                    }).then((response) =>{
                        this.$swal(
                            'Deleted!',
                            'post has been deleted.',
                            'success'
                            )
                        this.posts.find(( item,index ) => {
                            if(item.id == response.data.results.id){
                                this.posts.splice(index,1);
                            }
                        })
                        this.errors = [];
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
.image-preview-container{
      display: flex;
      justify-content: flex-start;
      border: 1px solid black;
      border-radius: 2px;
}
.image-preview-wrapper{
       position: relative;
}
.preview{
        cursor: pointer;
        width: 100px;
        height: 100px;
        background-position: center center;
        background-size: cover;
        margin:5px;
    }

.close-button{
  position: absolute;
  z-index: 1;
  right: 8px;
  top:5px;
  background: yellowgreen;
  color:rgb(255, 0, 0);
  border:none;
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
