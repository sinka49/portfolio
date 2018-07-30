<template>
	<div>
		<div class="row">
			<div class="col-lg-6 col-primary">
				<contact-form></contact-form>
				<map-canvas position="42.967528,47.50548" zoom="5" icon="/images/mapmarker.png"></map-canvas>
			</div>
			<div class="col-lg-6 flex-first flex-lg-unordered">
				<h1 class="title title--spaced">Contact me</h1>
				
				<div class="list-group">
					<div class="list-group-item">
						<p class="item-title">Email</p>
						<p><a href="mailto:heckslam@gmail.com">heckslam@gmail.com</a></p>
					</div>
					<div class="list-group-item">
						<p class="item-title">Phone</p>
						<p><a href="tel:+79634232023">+7 963 423-2023</a></p>
					</div>
					<div class="list-group-item">
						<p class="item-title">Address</p>
						<p>Makhachkala, Russia, 367026</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</template>
<script>
import MapCanvas from '../components/MapCanvas.vue';
import ContactForm from '../components/ContactForm.vue';
import Typed from '../../../../node_modules/typed.js/lib/typed'
export default {
	components : {
		MapCanvas,
		ContactForm
	}
}
</script>
