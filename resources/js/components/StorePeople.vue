<template>
 	<form @submit.prevent="store" method="post" class="form mb-5">
		<div class="form-group">
			<label>Name</label>
			<input type="text" class="form-control" v-model="person.name" required>
		</div>
		<div class="form-group">
			<label>Phone</label>
			<input type="text" class="form-control" v-model="person.phone" required>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" v-model="person.email" required>
		</div>
		<button type="submit" class="btn btn-primary">Save</button>
	</form>
</template>

<script>
export default {
	data(){
		return{
			person: {}
		}
	},
	methods:{
		async store(){
			await axios.post(`/Person/store`, this.person).then(res => {
				if(res.data.saved){
					this.$parent.agenda_personal.people.push(res.data.person)
					this.person = {}
				}
			})
		}
	}

}
</script>
