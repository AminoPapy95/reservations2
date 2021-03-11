@extends('base')

@section('title', 'Fiche d\'un artiste')

@section('content')
    <div class="container">
        <h1>{{ $artist->firstname }} {{ $artist->lastname }}</h1>

        <h2>Liste des types</h2>
        <ul>
        @foreach($artist->types as $type)
            <li>{{ $type->type }}</li>
        @endforeach
    </div>
@endsection
