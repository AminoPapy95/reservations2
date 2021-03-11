@extends('base')

@section('title', 'Liste des roles')

@section('content')
    <div class="container">
        <h1>Liste des {{ $resource }}</h1>

        <table>
            <thead>
                <tr>
                    <th>Roles</th>
                </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{ $role->type }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
