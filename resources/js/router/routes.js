// import Vue
import Vue from 'vue'

// import vue router
import VueRouter from 'vue-router'
Vue.use(VueRouter)

// pages
// const Home = require('./pages/Home.vue').default
// const About = require('./pages/About.vue').default
// const NotFound = require('./pages/NotFound.vue').default;

import Home from '../pages/Home.vue'
import About from '../pages/About.vue'
import NotFound from '../pages/NotFound.vue'
import User from '../pages/User.vue'

const myRoutes = [
    {
        path: '/home',
        component: Home
    },
    {
        path: '/about',
        component: About
    },
    {
        path: '/user/:name?',
        component: User,
        props: true
    },
    {
        path: '*',
        component: NotFound
    },
]

const router = new VueRouter({
    mode: 'history',
    routes: myRoutes
})

export default router