
@extends('layout.app')

@section('title','Comics')

@section('content')
    
    <h1>Comics page</h1>

    
    @foreach ($comics as $comic)
        <div class="card">
            <h2>{{ $comic['title'] }}</h2>
            <h2>{{ $comic['series'] }}</h2>
            <img src="{{ $comic['thumb'] }}" alt="">

        </div>
    @endforeach
@endsection
