
@extends('layouts.plantilla')

@section('title','Game ' . $game->id)
    
@section('content')
    <h1>Detalles del partido: {{$game->local_team_id .' contra '.$game->visitor_team_id}}</h1>
    <a href="{{ route('games.index') }}">Volver a Partidos</a>
@endsection

