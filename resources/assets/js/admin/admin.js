import Vue from 'vue'
import { sync } from 'vuex-router-sync'

import App from './App.vue'
import router from './router'
import store from './store'
import axios from 'axios'

Vue.prototype.$http = axios.create({
	headers: {
		'X-CSRF-TOKEN': Laravel.csrfToken
	}
})
// Vue.prototype.$http = axios

sync(store, router)

const app = new Vue({
    router,
    store,

    created() {},
    mounted() {},

    ...App
})

app.$mount('#app')
