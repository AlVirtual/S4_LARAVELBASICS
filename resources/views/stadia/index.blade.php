
@extends('layouts.plantilla')

@section('title','Stadia')
    
@section('content')
    <h1>Pagina principal de stadia</h1>
    <a href="{{ route('stadia.create') }}">Crear Estadio</a>
    <ul>
        @foreach ($stadia as $stadium)
            <li>
                <a href="{{ route('stadia.show', $stadium->id) }}">{{$stadium->name}}</a>
            </li>
        @endforeach
    </ul>
@endsection

