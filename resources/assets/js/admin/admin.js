import Vue from 'vue'
import { sync } from 'vuex-router-sync'
import axios from 'axios'
window.axios = axios.create({
	headers: {
		'X-CSRF-TOKEN': Laravel.csrfToken
	}
})

import App from './App.vue'
import router from './router'
import store from './store'

sync(store, router)

const app = new Vue({
    router,
    store,

    created() {},
    mounted() {},

    ...App
})

app.$mount('#app')
