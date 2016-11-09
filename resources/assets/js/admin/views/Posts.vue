<template>
	<section class="posts">
		<h3>Posts</h3>
		<router-link to="posts/new">New</router-link>
		<router-view></router-view>
	</section>
</template>

<script>
export default {
	mounted() {
		this.$store.dispatch('FETCH_POSTS')
	}
}
</script>