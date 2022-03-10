
@extends('layouts.plantilla')

@section('title','Games')
    
@section('content')
    <h1>Pagina principal de Games</h1>
    <ul>
        @foreach ($games as $game)
        <li>
            <a href="{{ route('games.show', $game->id) }}">{{$game->id . $game->date}}</a>
        </li>   
        @endforeach
        
    </ul>
    <a href="{{ route('games.create') }}">Crear Partido</a>
@endsection

