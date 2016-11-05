import Vue from 'vue'
import Resource from 'vue-resource'
import { sync } from 'vuex-router-sync'

import App from './App.vue'
import router from './router'
import store from './store'

Vue.use(Resource)
Vue.http.interceptors.push((request, next) => {
    request.headers.set('X-CSRF-TOKEN', Laravel.csrfToken)
    next()
})

sync(store, router)

const app = new Vue({
    router,
    store,

    created() {},
    mounted() {},

    ...App
})

app.$mount('#app')
