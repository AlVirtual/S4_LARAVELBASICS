
@extends('layouts.plantilla')

@section('title', 'Teams')
    
@section('content')
    <h1>Pagina de Teams</h1>
    <ul>
        @foreach ($teams as $team)
            <li>
                <a href="{{ route('teams.show', $team->id) }} ">{{$team->name}}</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('teams.create') }} ">Crear un equipo</a>
@endsection