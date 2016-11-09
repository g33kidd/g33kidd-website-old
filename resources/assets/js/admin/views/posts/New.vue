<template>
	<section class="new-post">
		<form v-on:submit.prevent="$store.dispatch('ADD_POST', form)">
			<input type="text" name="title" v-model="form.title">
			<input type="text" name="description" v-model="form.description">
			<textarea cols="30" rows="10" v-model="form.body"></textarea>
			<button type="submit">Create Post</button>
		</form>
	</section>
</template>

<script>
export default {
	data() {
		return {
			form: {
				title: '',
				description: '',
				body: '',
				published: true
			}
		}
	}
}
</script>