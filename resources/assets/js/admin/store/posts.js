import Vue from 'vue'

export default {
	state: {
		all: null
	},

	mutations: {
		RECEIVE_POSTS(state, payload) {
			state.all = payload
		},
		ADDED_POST(state, payload) {
			state.all.push(payload)
		}
	},

	actions: {
		FETCH_POSTS(context, payload) {
			Vue.$http.get('/api/posts')
				.then(response => {
					context.commit('RECEIVE_POSTS', payload)
				})
		},

		ADD_POST(context, payload) {},
		REMOVE_POST(context, payload) {},
		UPDATE_POST(context, payload) {},
		PUBLISH_POST(context, payload) {}
	}
}