import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

const router = new Router({
    mode: 'history',
    base: '/admin',
    linkActiveClass: 'active',

    routes: [
        { path: '/', component: require('views/Home') },
        { 
        	path: '/posts', 
        	component: require('views/Posts'),
        	children: [
        		{ path: '/', component: require('views/posts/List') }
        	]
        }
    ]
})

export default router
