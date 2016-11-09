<template>
	<section class="posts-list">
		<div class="post" v-for="post in posts" v-if="posts.length > 0">
			<span class="title">{{ post.title }}</span>
			<span class="short">{{ post.description }}</span>
		</div>
		<div v-else>
			<h2>There are no posts... ☹</h2>
		</div>
	</section>
</template>

<script>
import { mapGetters } from 'vuex'
export default {
	computed: {
		...mapGetters(['posts'])
	}
}
</script>