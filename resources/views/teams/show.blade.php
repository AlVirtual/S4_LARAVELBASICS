
@extends('layouts.plantilla')

@section('title', 'Team' . $team->name)
    
@section('content')
    <h1>Este es el Team: {{$team->name}}</h1>
    <a href="{{ route('teams.index') }}">Volver a teams</a>
    <a href={{ route('teams.edit', $team) }}>Editar Equipo</a>
@endsection