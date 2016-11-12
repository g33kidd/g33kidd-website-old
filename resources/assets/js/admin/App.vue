<template>
    <div id="app">
    	<navbar />
        <router-view />
    </div>
</template>

<script>
import Navbar from 'admin/components/layout/Navbar'
export default {
	components: {
		Navbar
	}
}
</script>
