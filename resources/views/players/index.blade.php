
@extends('layouts.plantilla')

@section('title','Players')
    
@section('content')
    <h1>Pagina principal de Players</h1>
    <ul>
        @foreach ($players as $player)
            <li>
                <a href="{{ route('players.show', $player->id) }}">{{$player->name}}</a>
            </li>
        @endforeach
    </ul>
    <a href=" {{ route('players.create') }} ">Crear un Jugador</a>
@endsection

