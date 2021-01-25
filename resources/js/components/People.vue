<template>
	<div class="table-responsive">
		<table class="table">
			<thead>
			<tr>
				<th>Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Actions</th>
			</tr>
			</thead>
			<tbody>
				<tr v-for="(person, index) in people" :key="index">
					<td>{{ person.name }}</td>
					<td>{{ person.phone }}</td>
					<td>{{ person.email }}</td>
					<td>
						<a :href="`Person/show/${person.id}`" class="btn btn-info text-white">View</a>
						<a class="btn btn-danger" @click.prevent="borrar(person)">Delete</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</template>

<script>
export default {
	props: ['agenda'],
	data(){
		return{
			people: []
		}
	},
	created(){
		this.people = this.agenda.people
	},
	methods:{
		async borrar(person){
			await axios.get(`/Person/delete/${person.id}`).then( res => {
				if(res.data.deleted){
					let person_index = _.findIndex(this.people, function(o) { return o.id == person.id; });
					this.people.splice(person_index, 1)
				}
			})
		}
	}
}
</script>
