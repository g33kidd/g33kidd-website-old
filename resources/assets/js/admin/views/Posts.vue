<template>
	<section class="posts">
		<div class="container">
			<router-view></router-view>
		</div>
	</section>
</template>

<script>
export default {
	mounted() {
		this.$store.dispatch('FETCH_POSTS')
	}
}
</script>