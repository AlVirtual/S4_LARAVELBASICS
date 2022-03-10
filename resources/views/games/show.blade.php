
@extends('layouts.plantilla')

@section('title','Game ' . $game)
    
@section('content')
    <h1>Este es el player: {{$game}}</h1>
@endsection

