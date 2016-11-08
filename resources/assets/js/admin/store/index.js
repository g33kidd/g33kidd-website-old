import Vue from 'vue'
import Vuex from 'vuex'

// Import api and store modules
//
import posts from './posts'

Vue.use(Vuex)

const state = {}

const mutations = {}

const actions = {}

const getters = {
	posts(state) {
		return state.posts.all
	}
}

const store = new Vuex.Store({
    state,
    mutations,
    actions,
    getters,
    modules: {
        posts,
    }
})

export default store
