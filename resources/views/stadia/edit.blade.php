
@extends('layouts.plantilla')

@section('title','Stadium Edit')
    
@section('content')
    <h1>Aqui puedes editar un stadium</h1>
    <form action="{{ route('stadia.update', $stadium) }}" method="POST">

        @csrf   {{-- genera token --}}

        @method('put')

        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{$stadium->name}}">
        </label>

        <br>
        <label for="">
            Capacidad:
            <br>
            <input type="number" name="capacity" value="{{$stadium->capacity}}">
        </label>

        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
