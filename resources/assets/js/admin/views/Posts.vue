<template>
	<section class="posts">
		<h3>Posts</h3>
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