
@extends('layouts.plantilla')

@section('title','Stadium ' . $stadium->name)
    
@section('content')
    <h1>Este es el estadio: {{$stadium->name}}</h1>
    <p> Capacidad:{{$stadium->capacity}}</p>
    <a href={{ route('stadia.index') }}>Volver a Estadios</a>
    <a href={{ route('stadia.edit', $stadium) }}>Editar Estadio</a>

@endsection

