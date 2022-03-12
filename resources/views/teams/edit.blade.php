
@extends('layouts.plantilla')

@section('title','Team Edit')
    
@section('content')
    <h1>Aquí puedes editar un Team</h1>
    <form action="{{ route('teams.update', $team) }}" method="POST">

        @csrf   {{-- genera token --}}

        @method('put')

        <label for="">Nombre:</label>
        <br>
            <input type="text" name="name" value="{{$team->name}}">
        <br>

        <label for="">Campo:</label>
        <br>
            <select name="stadium">
                
                @foreach ($stadia as $stadium)
                    <option value="{{$stadium['id']}}">{{$team->stadium->name}}</option>
                    @endforeach
            </select>
            @error('stadium')
                <br>
                <small>*{{$message}}</small>
            @enderror
        <br>

        <button type="submit">Guardar</button>
    </form>
@endsection