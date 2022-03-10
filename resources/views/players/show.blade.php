
@extends('layouts.plantilla')

@section('title','Player ' . $player)
    
@section('content')
    <h1>Este es el player: {{$player->name}}</h1>
    <a href="{{ route('players.index') }}">Volver a Jugadores</a>

@endsection

