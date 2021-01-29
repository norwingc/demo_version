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
    </main>
@endsection
