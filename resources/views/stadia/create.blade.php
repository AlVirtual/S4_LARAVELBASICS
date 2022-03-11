
@extends('layouts.plantilla')

@section('title','Stadium Create')
    
@section('content')
    <h1>Aqui puedes crear un stadium</h1>
    <form action="{{ route('stadia.store') }}" method="POST">

        @csrf   {{-- genera token --}}

        <label for="">
            Nombre:
            <br>
            <input type="text" name="name">
        </label>

        <br>
        <label for="">
            Capacidad:
            <br>
            <input type="number" name="capacity">
        </label>

        <br>
        <button type="submit">Guardar</button>
    </form>
@endsection


