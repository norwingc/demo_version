<template>
<section>
	<h2 class="mt-4">Sons</h2>
	<table class="mt-4 table table-bordered">
		<thead>
			<th>Name</th>
			<th>Age</th>
			<th>Actions</th>
		</thead>
		<tbody>
			<tr v-for="(son, index) in sons.sons" :key="index">
				<td>{{ son.name }}</td>
				<td>{{ son.age }}</td>
				<td>
					<button class="btn btn-info text-white">Edit</button>
					<button class="btn btn-danger">Delete</button>
				</td>
			</tr>
		</tbody>
	</table>

	<h2 class="mt-4">Add Son</h2>
	<form @submit.prevent="storeSon" class="form mb-5 w-50">
		<div class="form-grup">
			<label>Name</label>
			<input type="text" class="form-control" v-model="son.name" required>
		</div>
		<div class="form-grup">
			<label>Age</label>
			<input type="number" class="form-control" v-model="son.age" required>
		</div>
	</form>
</section>
</template>

<script>
export default {
	props: ['person'],
	created(){
		this.getSons()
	},
	data(){
		return{
			sons: [],
			son: {
				name: '',
				age: ''
			}
		}
	},
	methods:{
		async getSons(){
			await axios.get(`/Person/Sons/${this.person.id}`).then(res => {
				this.sons = res.data
			});
		},
		async storeSon(){
			await axios.post(`/Person/Sons/store/${this.person.id}`, this.son).then(res => {
				this.son.push(res.data.sons)
			})
		}
	}
}
</script>
