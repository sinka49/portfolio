<template>
	<div class="row profile">
		<div class="col-sm-6 col-primary">
			<div class="profile__image" style="background-image:url(/images/emilsgulbis.jpg)"></div>
		</div>
		<div class="col-sm-6 profile__content" v-mousemove>
			<div class="title">Ruslan<div class="text-primary point-to-left">Aliev</div></div>
			<h1 class="text-default">Android developer - Russia</h1>
			<p class="text-muted">I'm Ruslan Aliev and I love to develop<br/>beautiful UI's.<br/>22 year old code ninja from <router-link to="/contact" class="link--styled">Makhachkala, Russia</router-link></p>
		</div>
	</div>
</template>
<script>

export default {

}
</script>
