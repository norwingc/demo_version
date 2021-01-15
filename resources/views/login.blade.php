@extends('template.maintemplate')


@section('content')
    <main class="container mt-5 w-50" id="app">
        @if(session()->has('message_success'))
            <div class="container alert alert-success" role="alert">
                <h4 class="alert-heading">Information</h4>
                <p>{{ Session::get('message_success') }}</p>
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Login</button>
            </div>
        </form>
    </main>
@endsection
