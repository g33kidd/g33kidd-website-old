<template>
	<section class="posts-list">
		<div class="post" v-for="post in posts">
			<span class="title">{{ post.title }}</span>
			<span class="short">{{ post.description }}</span>
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