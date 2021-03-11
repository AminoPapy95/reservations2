@extends('base')
@section('title', 'Liste des lieux de spectacles')

@section('content')
    <div class="container">
        <h1>Liste des {{ $resource }}</h1>

        <ul>
        @foreach($locations as $location)
        <li>{{ $location->designation }}
            @if($location->website)
            - <a href="{{ $location->website }}">{{ $location->website }}</a>
            @endif
        </li>
        @endforeach
        </ul>
    </div>
@endsection
