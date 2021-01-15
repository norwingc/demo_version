@extends('template.maintemplate')

@section('content')

    <h1 class="title text-center">
        Clase <span>Nueva</span>
    </h1>

    <main class="container mt-5" id="app">
        @if(session()->has('message_success'))
            <div class="container alert alert-success" role="alert">
                <h4 class="alert-heading">Information</h4>
                <p>{{ Session::get('message_success') }}</p>
            </div>
        @endif

        <h1>Agenda</h1>
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
                    @foreach($agenda->people as $person)
                        <tr>
                            <td>{{ $person->name }}</td>
                            <td>{{ $person->phone }}</td>
                            <td>{{ $person->email }}</td>
                            <td>
                                <a href="{{ route('person.view', $person) }}" class="btn btn-info text-white">View</a>
                                <a href="{{ route('person.delete', $person) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <h1 class="my-5">Add Person</h1>
        <form action="{{ route('person.store') }}" method="post" class="form mb-5">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </main>
@endsection
