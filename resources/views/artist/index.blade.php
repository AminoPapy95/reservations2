@extends('base')

@section('title', 'Liste des artistes')

@section('content')
    <div class="container">
        <h1>Liste des {{ $resource }}</h1>

        <table>
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                </tr>
            </thead>
            <tbody>
            @foreach($artists as $artist)
                <tr>
                    <td>{{ $artist->firstname }}</td>
                    <td>{{ $artist->lastname }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
