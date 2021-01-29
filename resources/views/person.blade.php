@extends('template.maintemplate')

@section('content')
    <main class="container mt-5" id="app">
        @if(session()->has('message_success'))
            <div class="container alert alert-success" role="alert">
                <h4 class="alert-heading">Information</h4>
                <p>{{ Session::get('message_success') }}</p>
            </div>
        @endif

        <h1>Person</h1>
        <form action="{{ route('person.update', $person) }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $person->name }}">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ $person->phone }}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $person->email }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
		</form>

		<store-son :person="{{ $person }}"/>

		{{-- <h2 class="mt-4">Sons</h2>
		<table class="mt-4 table table-bordered">
			<thead>
				<th>Name</th>
				<th>Age</th>
				<th>Actions</th>
			</thead>
			<tbody>
				@foreach ($person->sons as $item)
					<tr>
						<td>{{ $item->name }}</td>
						<td>{{ $item->age }}</td>
						<td>
							<button class="btn btn-info text-white">Edit</button>
							<button class="btn btn-danger">Delete</button>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		<h2 class="mt-4">Add Son</h2>
		<form action="{{ route('person.store.sons', $person) }}" class="form mb-5 w-50" method="POST">
			@csrf
			<div class="form-grup">
				<label>Name</label>
				<input type="text" class="form-control" name="name" required>
			</div>
			<div class="form-grup">
				<label>Age</label>
				<input type="number" class="form-control" name="age" required>
			</div>
			<div class="form-grup mt-2">
				<button type="submit" class="btn btn-success">Save</button>
			</div>
		</form> --}}
    </main>
@endsection
