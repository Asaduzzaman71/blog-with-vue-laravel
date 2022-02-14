import Home from './components/user/Home.vue';
import Blog from './components/user/Blog.vue';
import Contact from './components/user/Contact.vue';
import About from './components/user/About.vue';
import Dashboard from './pages/Dashboard.vue';
import Login from './pages/Login.vue';
import Category from './pages/Category.vue';
import Post from './pages/Post.vue';

function guardMyroute(to, from, next)
{
    var isAuthenticated= false;

    if(localStorage.getItem('access-token')){
        isAuthenticated = true;
    }else{
        isAuthenticated= false;
    }

    if(isAuthenticated){
        next(); // allow to enter route
    }
    else{
        next('/login'); // go to '/login';
    }
}
export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'about',
        path: '/about',
        component: About
    },
    {
        name: 'blogs',
        path: '/blogs',
        component: Blog
    },
    {
        name: 'contact',
        path: '/contact',
        component: Contact
    },
    {
        name: 'dashboard',
        path: '/dashboard',
        component: Dashboard
    },
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        name: 'categories',
        path: '/categories',
        beforeEnter : guardMyroute,
        component: Category

    },
    {
        name: 'posts',
        path: '/posts',
        beforeEnter : guardMyroute,
        component: Post
    },

];
