@extends('base')

@section('title', 'Fiche d\'un lieu de spectacle')

@section('content')
    <article class="container">
        <h1>{{ $location->designation }}</h1>
        <address>
            <p>{{ $location->address }}</p>
            <p>{{ $location->locality->postal_code }}
               {{ $location->locality->locality }}
            </p>

            @if($location->website)
            <p><a href="{{ $location->website }}" target="_blank">{{ $location->website }}</a></p>
            @else
            <p>Pas de site web</p>
            @endif

            @if($location->phone)
            <p><a href="tel:{{ $location->phone }}">{{ $location->phone }}</a></p>
            @else
            <p>Pas de téléphone</p>
            @endif
        </address>
    </article>
@endsection
