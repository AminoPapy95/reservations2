@extends('layouts.app')

@section('title', 'Liste des types d\'utilisateurs')

@section('content')
    <div class="container">
        <h1>Liste des {{ $resource }}</h1>

        <table>
            <thead>
                <tr>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
            @foreach($types as $type)
                <tr>
                    <td>{{ $type->type }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
