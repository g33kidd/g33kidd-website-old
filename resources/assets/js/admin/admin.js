import Vue from 'vue'
import Resource from 'vue-resource'
import { sync } from 'vuex-router-sync'

import App from './App.vue'
import router from './router'
import store from './store'
import axios from 'axios'

Vue.use(Resource)
Vue.prototype.$http = axios.create({
	headers: {'X-CSRF-TOKEN': Laravel.csrfToken}
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
