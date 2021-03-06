@extends('base')
@section('title', 'Fiche d\'un type')

@section('content')
    <div class="container">
        <h1>{{ $type->type }}</h1>

        <h2>Liste des artistes</h2>
        <ul>
        @foreach($type->artists as $artist)
            <li>{{ $artist->firstname }} {{ $artist->lastname }}</li>
        @endforeach
        </ul>
    </div>
@endsection
