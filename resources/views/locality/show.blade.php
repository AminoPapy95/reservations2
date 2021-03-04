@extends('layouts.app')

@section('title', 'La localité')



@section('content')

    <div class="container">
        <h1>{{ $locality->postal_code }} {{ $locality->locality }}</h1>

        <ul>
        @foreach($locality->Location as $location)

            <li>{{ $location->designation }}</li>
            
        @endforeach
        </ul>
    </div>

@endsection
