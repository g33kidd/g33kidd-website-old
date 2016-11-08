import Vue from 'vue'

export default {
	state: {
		all: []
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
			axios.get('/api/posts')
				.then(response => {
					context.commit('RECEIVE_POSTS', response.data)
				})
		},

		ADD_POST(context, payload) {},
		REMOVE_POST(context, payload) {},
		UPDATE_POST(context, payload) {},
		PUBLISH_POST(context, payload) {}
	}
}