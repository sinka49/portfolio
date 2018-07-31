require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import VeeValidate from 'vee-validate'
import PulseLoader from 'vue-spinner/src/PulseLoader.vue'

window.bus = new Vue()



Vue.component('main-layout', require('./layouts/Main.vue'))

Vue.directive('mousemove', require('./directives/MouseMove.vue'))

Vue.use(VueRouter)
Vue.use(VeeValidate)


// Pages
import Home from './pages/Home.vue'
import Contact from './pages/Contact.vue'
import Resume from './pages/Resume.vue'
import p404 from './pages/404.vue'
import Projects from './pages/Projects.vue'



const routes = [
    { path: '/', component: Home, meta : {sidebar:true}},
    { path: '/resume', component : Resume},
    { path: '/contact', component : Contact, meta : {sidebar:true}},
    { path: '/projects', component: Projects},
    { path: '/404', component: p404, meta : {invert : true}},
    { path: '*', redirect: '/404'}
]

const router = new VueRouter({
    linkExactActiveClass : 'active',
    mode: 'history',
    routes: routes
})

router.beforeEach((to, from, next) => {
    bus.$emit('menu:close');
    next();

})


const app = new Vue({
    components: {
        PulseLoader
    },
    router
}).$mount('#app');

