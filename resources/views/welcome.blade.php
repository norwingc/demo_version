@extends('template.maintemplate')

@section('content')

    <h1 class="title text-center">
        Clase <span>Nueva</span>
    </h1>

    <main class="container mt-5" id="app">
		<agenda :agenda="{{ $agenda }}"></agenda>
    </main>
@endsection
