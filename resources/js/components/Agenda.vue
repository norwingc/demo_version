<template>
	<section>
		<h1>Agenda</h1>
		<people :agenda="agenda_personal"></people>

		<h1 class="my-5">Add Person</h1>
		<store-people />
	</section>
</template>

<script>

import People from './People'
import StorePeople from './StorePeople'

export default {
	props: ['agenda'],
	components: {
		People,
		StorePeople
	},
	data(){
		return{
			agenda_personal: {}
		}
	},
	created(){
		this.agenda_personal = this.agenda
	}
}
</script>
